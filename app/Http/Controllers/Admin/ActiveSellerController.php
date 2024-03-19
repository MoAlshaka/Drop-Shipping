<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Seller;
use Illuminate\Http\Request;

class ActiveSellerController extends Controller
{
    public function index()
    {
        $sellers = Seller::orderBy('id', 'desc')->get();
        return view('admin.sellers.index', compact('sellers'));
    }
    public function active(Request $request, $id)
    {
        $seller = Seller::findorfail($id);
        $seller->update(['is_active' => 1]);

        return redirect()->route('admin.sellers.index');
    }
}
