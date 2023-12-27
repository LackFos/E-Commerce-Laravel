<?php

namespace App\Http\Controllers;

use App\Helpers\Helpers;
use App\Http\Requests\StoreCategoryRequest;
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
        $categories = Category::all();
        return view('pages.dashboard.kategori', compact('categories'));
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
    public function store(StoreCategoryRequest $request)
    {
        $validated = $request->validated();

        Category::create([
            'name' => $validated['name'],
            'slug' => Str::slug($validated['name'], '-'),
        ]);

        return redirect()
            ->back()
            ->with('success', 'Kategori berhasil ditambahkan');
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
            ->when($sortParam, function ($query, $sortParam) {
                switch ($sortParam) {
                    case 'highest':
                        return $query->orderBy('price', 'desc');
                    case 'lowest':
                        return $query->orderBy('price', 'asc');
                    case 'latest':
                        return $query->orderBy('created_at', 'desc');
                    case 'oldest':
                        return $query->orderBy('created_at', 'asc');
                    default:
                        return $query;
                }
            })
            ->paginate(20);

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
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()
            ->back()
            ->with('success', 'Kategori berhasil dihapus');
    }
}
