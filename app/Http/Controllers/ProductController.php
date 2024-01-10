<?php

namespace App\Http\Controllers;

use App\Utils\Utils;
use App\Models\Product;
use App\Models\Category;
use App\Models\Flashsale;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

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

        $heading = $keyword ? 'Produk' . ' "' . $keyword . '" ' : 'Produk';
        $metaTitle = 'Produk' . ' "' . $keyword . '"';

        return view(
            'pages.archive',
            compact(
                'metaTitle',
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

        $heading = 'Flash Sale';
        $categories = Category::all();
        $sortParam = $request->query('sort', null);
        $metaTitle = 'Flashsale';

        $productsQuery = Product::select('products.*')
            ->join('flashsales', 'flashsales.product_id', '=', 'products.id')
            ->with('flashsale')
            ->when($sortParam, function ($query, $sortParam) {
                switch ($sortParam) {
                    case 'highest':
                        return $query->orderBy(
                            'flashsales.price_after_discount',
                            'desc'
                        );
                    case 'lowest':
                        return $query->orderBy(
                            'flashsales.price_after_discount',
                            'asc'
                        );
                    case 'latest':
                        return $query->orderBy('products.created_at', 'desc');
                    case 'oldest':
                        return $query->orderBy('products.created_at', 'asc');
                    default:
                        return $query;
                }
            });

        $products = $productsQuery->paginate(20);

        return view(
            'pages.archive',
            compact(
                'metaTitle',
                'categories',
                'heading',
                'breadcrumb',
                'products'
            )
        );
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $keyword = $request->input('q', '');
        $sortParam = $request->query('sort', null);
        $showEmptyProduct = filter_var(
            $request->query('empty'),
            FILTER_VALIDATE_BOOLEAN
        );

        $products = Product::with(['category', 'flashsale'])
            ->where('name', 'like', '%' . $keyword . '%')
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
            ->when($showEmptyProduct, function ($query) {
                return $query->where('stock', '=', 0);
            })
            ->paginate(20);

        $metaTitle = 'Daftar Produk';

        return view(
            'pages.dashboard.produk',
            compact('metaTitle', 'products', 'showEmptyProduct')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $metaTitle = 'Tambah Produk';
        return view(
            'pages.dashboard.produk-tambah',
            compact('metaTitle', 'categories')
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $validated = $request->validated();
        $validated['slug'] = Str::slug($validated['name'], '-');

        if ($request->hasFile('image')) {
            $validated['image'] = Utils::uploadImage(
                $request->file('image'),
                'upload_images'
            );
        }

        $product = new Product($validated);
        $product->save();

        if (isset($validated['flashsale'])) {
            Flashsale::updateOrCreate(
                ['product_id' => $product->id],
                ['price_after_discount' => $validated['flashsale']]
            );
        }

        return redirect()
            ->back()
            ->with('success', 'Produk berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $metaTitle = $product->name;
        return view('pages.produk', compact('metaTitle', 'product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $metaTitle = 'Edit Produk';
        $product = Product::where('slug', $slug)->firstOrFail();
        $categories = Category::all();

        return view(
            'pages.dashboard.produk-edit',
            compact('metaTitle', 'product', 'categories')
        );
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        $validated = $request->validated();
        $product->update($validated);

        if ($request->hasFile('image')) {
            $newImagePath = Utils::uploadImage(
                $request->file('image'),
                'upload_images',
                $product->image
            );
            $product->image = $newImagePath;
            $product->save();
        }

        if (isset($validated['flashsale'])) {
            Flashsale::updateOrCreate(
                ['product_id' => $product->id],
                ['price_after_discount' => $validated['flashsale']]
            );
        } else {
            $existingFlashsale = Flashsale::where(
                'product_id',
                $product->id
            )->first();
            if ($existingFlashsale) {
                $existingFlashsale->delete();
            }
        }

        return redirect()
            ->back()
            ->with('success', 'Produk berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if (Utils::isAdmin()) {
            $product->delete();
            return redirect()
                ->back()
                ->with('success', 'Produk berhasil dihapus');
        }
    }
}
