<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'bail|required|unique:products',
            'price' => 'bail|required|integer',
            'image' => 'bail|required|image',
            'color' => 'bail|required|string',
            'stock' => 'bail|required|integer',
            'description' => 'bail|required',
            'category_id' => 'bail|required|exists:categories',
        ]);

        $product = new Product([
            'name' => $validated['name'],
            'price' => $validated['price'],
            'image' => $validated['image'],
            'color' => $validated['color'],
            'stock' => $validated['stock'],
            'description' => $validated['description'],
            'category_id' => $validated['category_id'],
        ]);
        $product->save();
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('pages.produk', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'bail|required|unique:products,name',
            'price' => 'bail|required|integer',
            'image' => 'bail|image',
            'color' => 'bail|string',
            'stock' => 'bail|required|integer',
            'description' => 'bail',
            'category_id' => 'bail|exists:categories',
        ]);

        $product->update([
            'name' => $validated['name'],
            'price' => $validated['price'],
            'image' => $validated['image'],
            'color' => $validated['color'],
            'stock' => $validated['stock'],
            'description' => $validated['description'],
            'category_id' => $validated['category_id'],
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
    }
}
