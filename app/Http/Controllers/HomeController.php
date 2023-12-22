<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Product;
use App\Models\Category;
use App\Models\Flashsale;

class HomeController extends Controller
{
    public function __invoke()
    {
        $banners = Banner::all();
        $flashsale = Flashsale::all();
        $categories = Category::all();
        $latestProducts = Product::latest()
            ->take(10)
            ->get();

        return view(
            'Pages.home',
            compact('banners', 'flashsale', 'categories', 'latestProducts')
        );
    }
}
