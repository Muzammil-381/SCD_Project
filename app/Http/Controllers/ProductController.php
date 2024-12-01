<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.product', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.new_product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate incoming data
        $request->validate([
            'p_name' => 'required|string|max:255',
            'p_details' => 'nullable|string',
            'p_image' => 'nullable|string|max:255',
            'p_status' => 'nullable|string|max:50',
            'p_price' => 'required|numeric|min:0',
        ]);

        // Create new product
        Product::create([
            'name' => $request->p_name,
            'details' => $request->p_details,
            'image' => $request->p_image,
            'status' => $request->p_status,
            'price' => $request->p_price,
        ]);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.product.edit_product', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate incoming data
        $request->validate([
            'p_name' => 'required|string|max:255',
            'p_details' => 'nullable|string',
            'p_image' => 'nullable|string|max:255',
            'p_status' => 'nullable|string|max:50',
            'p_price' => 'required|numeric|min:0',
        ]);

        // Find and update product
        $product = Product::findOrFail($id);
        $product->update([
            'name' => $request->p_name,
            'details' => $request->p_details,
            'image' => $request->p_image,
            'status' => $request->p_status,
            'price' => $request->p_price,
        ]);

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
