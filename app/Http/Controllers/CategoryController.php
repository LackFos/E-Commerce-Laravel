<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
            'name' => 'bail|required|unique:categories|string',
        ]);

        Category::create([
            'name' => $validated['name'],
            'slug' => Str::slug($validated['name'], '-'),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $categories = Category::all();
        $selectedCategory = Category::where('slug', $slug)->firstOrFail();
        $products = $selectedCategory->products;

        return view(
            'pages.category',
            compact('slug', 'categories', 'selectedCategory', 'products')
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name' => 'bail|required|unique:categories,name|string',
        ]);

        $category->update([
            'name' => $validated['name'],
            'slug' => Str::slug($validated['name'], '-'),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
    }
}
