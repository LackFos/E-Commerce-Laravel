<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function getCartItems(Request $request)
    {
        $cart = json_decode($request->cookie('cart'), true);
        return response()->json($cart);
    }

    public function addToCart(Request $request)
    {
        $productId = $request->product_id;
        $productQuantity = $request->product_quantity;
        $pricePerItem = $request->price_per_item;

        $cart = json_decode($request->cookie('cart'), true) ?? [
            'products' => [],
            'total_price' => 0,
        ];

        // Find if item on cart, if found update items detail
        $productFound = false;

        foreach ($cart['products'] as $cartProduct) {
            if ($cartProduct['product_id'] == $productId) {
                $cartProduct['product_quantity'] = $productQuantity;
                $productFound = true;
                break;
            }
        }

        // Add item if not found
        if (!$productFound) {
            $cart['products'][] = [
                'product_id' => $productId,
                'product_quantity' => $productQuantity,
                'price_per_item' => $pricePerItem,
            ];
        }

        // Calc Cart Total Price
        $cart['total_price'] = 0;
        foreach ($cart['products'] as $cartProduct) {
            $cart['total_price'] +=
                $cartProduct['price_per_item'] *
                $cartProduct['product_quantity'];
        }

        return response('')->cookie('cart', json_encode($cart), 60 * 24 * 180);
    }

    public function removeFromCart(Request $request)
    {
        $product = Product::findOrFail($request->product_id);

        $cart = json_decode($request->cookie('cart'), true);

        abort_if(!$cart, 404, 'Tidak ada barang di keranjang');

        foreach ($cart['products'] as $key => $item) {
            if ($item['product_id'] == $product->id) {
                unset($cart['products'][$key]);
                break;
            }
        }
    }
}
