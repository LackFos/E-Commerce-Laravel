<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $latestProducts = Product::latest()
            ->take(10)
            ->get();
        $categories = Category::all();

        return view('Pages.home', compact('categories', 'latestProducts'));
    }
}
