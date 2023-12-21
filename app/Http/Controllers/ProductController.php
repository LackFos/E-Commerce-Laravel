<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display the specified resource (filter by search keyword & sort).
     */
    public function search(Request $request)
    {
        $keyword = $request->input('q', '');
        $sortParam = $request->query('sort', null);

        $query = Product::where('name', 'like', '%' . $keyword . '%');

        if ($sortParam === 'highest') {
            $query->orderBy('price', 'desc');
        } elseif ($sortParam === 'lowest') {
            $query->orderBy('price', 'asc');
        }

        $products = $query->get();

        return view('pages.search', compact('keyword', 'products'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->get();

        return view('pages.dashboard.produk', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $flashsale = 'Ya';
        return view(
            'pages.dashboard.produk-tambah',
            compact('categories', 'flashsale')
        );
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

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('pages.produk', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $categories = Category::all();

        return view(
            'pages.dashboard.produk-edit',
            compact('product', 'categories')
        );
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
