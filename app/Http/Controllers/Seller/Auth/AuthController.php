<?php

namespace App\Http\Controllers\Seller\Auth;

use App\Http\Controllers\Controller;
use App\Models\Seller;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function get_seller_register()
    {
        return view('seller.auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|max:50',
            'password' => 'required|max:50',
            'phone' => 'required|max:50',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
        ]);
        $image = $request->file('image');
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('sellers/images'), $image_name);
        Seller::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone' => $request->phone,
            'image' => $image_name,

        ]);
        return redirect()->route('seller.deactivate');
    }
    public function get_seller_login()
    {
        return view('seller.auth.login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|max:50',
            'password' => 'required|max:50',
        ]);

        if (auth()->guard('seller')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('seller.dashboard');
        } else {
            return redirect()->back()->with([
                'error' => 'the email or password is not correct'
            ]);
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('get.seller.login');
    }
}
