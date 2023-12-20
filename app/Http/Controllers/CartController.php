<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CartController extends Controller
{
    public function getCartItems(Request $request)
    {
        $cart = json_decode($request->cookie('cart'), true) ?? [
            'products' => [],
            'total_price' => 0,
        ];

        foreach ($cart['products'] as &$cartProduct) {
            $cartProduct['product'] = Product::find($cartProduct['product_id']);
        }

        return view('pages.cart', compact('cart'));
    }

    public function addToCart(Request $request)
    {
        $product = Product::findOrFail($request->products[0]['product_id']);
        $pricePerItem = $product->price;
        $productQuantity = $request->products[0]['product_quantity'];

        if ($productQuantity > $product->stock) {
            abort(403, 'Stok hanya tersisa ' . $product->stock);
        }

        $cart = json_decode($request->cookie('cart'), true) ?? [
            'products' => [],
            'total_price' => 0,
        ];

        // Find if item is in the cart, if found update items detail
        $productFound = false;
        foreach ($cart['products'] as &$cartProduct) {
            if ($cartProduct['product_id'] == $product->id) {
                $cartProduct['product_quantity'] = $productQuantity;
                $productFound = true;
                break;
            }
        }

        // Add item if not found
        if (!$productFound) {
            $cart['products'][] = [
                'product_id' => $product->id,
                'product_quantity' => $productQuantity,
                'price_per_item' => $pricePerItem,
            ];
        }

        // Calc Cart Total Price
        $cart['total_price'] = array_reduce(
            $cart['products'],
            function ($total, $item) {
                return $total +
                    $item['price_per_item'] * $item['product_quantity'];
            },
            0
        );

        return back()->withCookie(
            Cookie::make('cart', json_encode($cart), 60 * 24 * 180)
        );
    }

    public function removeFromCart(Request $request)
    {
        $cart = json_decode($request->cookie('cart'), true);
        $productId = $request->product_id;

        abort_if(!$cart, 404, 'Tidak ada barang di keranjang');

        foreach ($cart['products'] as $key => $item) {
            if ($item['product_id'] == $productId) {
                unset($cart['products'][$key]);
                break;
            }
        }

        // Re-index the products array to maintain sequential indices
        $cart['products'] = array_values($cart['products']);

        // Recalculate Cart Total Price
        $cart['total_price'] = array_reduce(
            $cart['products'],
            function ($total, $item) {
                return $total +
                    $item['price_per_item'] * $item['product_quantity'];
            },
            0
        );

        return response()
            ->json($cart)
            ->cookie('cart', json_encode($cart), 60 * 24 * 180);
    }
}
