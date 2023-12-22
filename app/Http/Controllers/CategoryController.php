<?php

namespace App\Http\Controllers;

use App\Helpers\Helpers;
use App\Models\Category;
use App\Utils\Utils;
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

        $breadcrumb = [
            ['name' => 'Home', 'link' => route('home')],
            ['name' => 'Kategori'],
            ['name' => $selectedCategory->name],
        ];

        $heading = $selectedCategory->name;
        $sortParam = $request->query('sort', null);
        $products = $selectedCategory
            ->products()
            ->where('category_id', $selectedCategory->id)
            ->with(['category', 'flashsale'])
            ->get();

        $products = Utils::sortProduct($products, $sortParam);

        return view(
            'pages.archive',
            compact('slug', 'breadcrumb', 'categories', 'heading', 'products')
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
