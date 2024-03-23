<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateLeedRequest;
use App\Models\Leed;
use Illuminate\Http\Request;

class LeedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $leeds = Leed::where('seller_id', auth()->guard('seller')->user()->id)->get();
        return view('seller.leeds.index', compact('leeds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('seller.leeds.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateLeedRequest $request)
    {
        Leed::create([
            'customer_name' => $request->customer_name,
            'customer_email' => $request->customer_email,
            'customer_phone' => $request->customer_phone,
            'customer_address' => $request->customer_address,
            'quantity' => $request->quantity,
            'product_id' => $request->product_id,
            'seller_id' => auth()->guard('seller')->user()->id,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('seller.leeds.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('seller.leeds.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
