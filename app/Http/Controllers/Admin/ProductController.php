<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tags = Product::pluck('tag');
        $categories = Category::all();
        return view('admin.products.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateProductRequest $request)
    {
        // Check if the user is authenticated as an admin
        if (!auth()->guard('admin')->check()) {
            // If not authenticated as an admin, redirect with an error message
            return redirect()->route('admin.login')->with('error', 'You are not authorized to perform this action.');
        }


        $image = $request->file('image');
        $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
        $request->image->move(public_path('products/images'), $imageName);

        Product::create([
            'name' => $request->name,
            'desc' => $request->desc,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'image' =>  $imageName,
            'stock' => $request->stock,
            'tag' => $request->tag,
            'admin_id' => auth()->guard('admin')->user()->id,
        ]);

        return redirect()->route('products.index')->with('add', 'Product created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findorfail($id);
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findorfail($id);
        $categories = Category::all();
        $tags = Product::pluck('tag');
        return view('admin.products.edit', compact('product', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, string $id)
    {
        $oldImage = Product::findorfail($id)->image;
        if ($request->hasFile('image')) {
            unlink(public_path('products/images/' . $oldImage));
            $image = $request->file('image');
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
            $request->image->move(public_path('products/images'), $imageName);
        }
        Product::findorfail($id)->update([
            'name' => $request->name,
            'desc' => $request->desc,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'image' =>  isset($imageName) ? $imageName : $oldImage,
            'stock' => $request->stock,
            'tag' => $request->tag,
        ]);
        return redirect()->route('products.index')->with('update', 'Product updated successfully.')->with('image', $imageName);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::findorfail($id)->delete();
        return redirect()->route('admin.products.index')->with('delete', 'Product deleted successfully.');
    }
}
