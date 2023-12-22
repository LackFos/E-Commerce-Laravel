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
        return view('pages.dashboard.kategori');
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
    public function show(Request $request, $slug)
    {
        $categories = Category::all();
        $selectedCategory = $categories->where('slug', $slug)->first();

        abort_if(!$selectedCategory, 404, 'Kategori Tidak ditemukan');

        $sortParam = $request->query('sort', null);
        $query = $selectedCategory->products()->with(['category', 'flashsale']);

        if ($sortParam === 'highest') {
            $query->orderBy('price', 'desc');
        } elseif ($sortParam === 'lowest') {
            $query->orderBy('price', 'asc');
        } elseif ($sortParam === 'newest') {
            $query->latest();
        } elseif ($sortParam === 'oldest') {
            $query->oldest();
        }

        $products = $query->get();

        return view(
            'pages.kategori',
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
