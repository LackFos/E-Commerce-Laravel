<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProductRequest;
use App\Utils\Utils;
use App\Models\Product;
use App\Models\Category;
use App\Models\Flashsale;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function search(Request $request)
    {
        $breadcrumb = [
            ['name' => 'Home', 'link' => route('home')],
            ['name' => 'Cari'],
        ];

        $keyword = $request->input('q', '');
        $sortParam = $request->query('sort', null);
        $categories = Category::all();
        $products = Product::with(['category', 'flashsale'])
            ->where('name', 'like', '%' . $keyword . '%')
            ->get();
        $products = Utils::sortProduct($products, $sortParam);

        $heading = $keyword ? 'Produk' . ' "' . $keyword . '" ' : 'Produk';

        return view(
            'pages.archive',
            compact(
                'keyword',
                'categories',
                'heading',
                'breadcrumb',
                'products'
            )
        );
    }

    public function flashsale(Request $request)
    {
        $breadcrumb = [
            ['name' => 'Home', 'link' => route('home')],
            ['name' => 'Flashsale'],
        ];

        $sortParam = $request->query('sort', null);
        $categories = Category::all();
        $flashsales = Flashsale::all();

        $products = Flashsale::with('product')
            ->get()
            ->map(function ($flashsale) {
                return $flashsale->product;
            });

        $products = Utils::sortProduct($products, $sortParam);

        $heading = 'Flash Sale';

        return view(
            'pages.archive',
            compact('categories', 'heading', 'breadcrumb', 'products')
        );
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
        return view('pages.dashboard.produk-tambah', compact('categories'));
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

    public function update(UpdateProductRequest $request, Product $product)
    {
        $validated = $request->validated();
        $product->update($validated);


        if ($request->hasFile('image')) {
            $newImagePath = Utils::uploadImageAndDeleteOld($request->file('image'), 'upload_images', $product->image);
            $product->image = $newImagePath;
            $product->save();
        }

        if (isset($validated['flashsale'])) {
            Flashsale::updateOrCreate([
                'product_id' => $product->id
            ], [
                'price_after_discount' => $validated['flashsale']
            ]);
        }

        return redirect()->back()->with('success', 'Produk berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->with('success', 'Produk berhasil dihapus');
    }
}
