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
            'password' => 'required|max:50|min:8',
            'address' => 'required|max:250',
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
            'address' => $request->address,
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
        // Attempt to authenticate the seller
        if (auth()->guard('seller')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // If authentication is successful, retrieve the authenticated seller
            $seller = auth()->guard('seller')->user();
            // Check if the seller is active
            if ($seller->is_active == 0) {
                return redirect()->route('seller.deactivate');
            } else {
                // If active, log in the seller and redirect to the dashboard
                auth()->guard('seller')->login($seller);
                return redirect()->route('seller.dashboard');
            }
        } else {
            // If authentication fails, redirect back with an error message
            return redirect()->back()->with([
                'error' => 'The email or password is incorrect.'
            ]);
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('get.seller.login');
    }


    public function deactivate()
    {
        return view('seller.auth.deactivate');
    }
}
