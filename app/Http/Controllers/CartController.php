<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CartController extends Controller
{
    private function recalculateTotalPrice(&$cart)
    {
        $cart['total_price'] = array_reduce(
            $cart['products'],
            function ($total, $item) {
                $product = Product::find($item['product_id']);
                return $total +
                    $product->price_after_discount * $item['product_quantity'];
            },
            0
        );
    }

    public function getCartItems(Request $request)
    {
        $cart = json_decode($request->cookie('cart'), true) ?? [
            'products' => [],
            'total_price' => 0,
        ];

        $productIds = array_column($cart['products'], 'product_id');

        $products = Product::whereIn('id', $productIds)->with(['flashsale'])->get()->keyBy('id');

        $total_price = 0;
        foreach ($cart['products'] as $key => &$cartProduct) {
            $productId = $cartProduct['product_id'];

            if (!isset($products[$productId])) {
                unset($cart['products'][$key]);
                continue;
            }

            $product = $products[$productId];
            $cartProduct['product'] = $product;
            $total_price += $product->price_after_discount * $cartProduct['product_quantity'];
        }

        $cart['products'] = array_values($cart['products']);
        $cart['total_price'] = $total_price;

        return view('pages.cart', compact('cart'));
    }
    public function addToCart(Request $request)
    {
        $product = Product::findOrFail($request->products[0]['product_id']);
        $pricePerItem = $product->price_after_discount;
        $productQuantity = $request->products[0]['product_quantity'];

        if ($productQuantity > $product->stock) {
            return redirect()
                ->back()
                ->with('error', 'Stok hanya tersisa ' . $product->stock);
        }

        $cart = json_decode($request->cookie('cart'), true) ?? [
            'products' => [],
            'total_price' => 0,
        ];

        $productFound = false;
        foreach ($cart['products'] as &$cartProduct) {
            if ($cartProduct['product_id'] == $product->id) {
                $cartProduct['product_quantity'] = $productQuantity;
                $productFound = true;
                break;
            }
        }

        if (!$productFound) {
            $cart['products'][] = [
                'product_id' => $product->id,
                'product_quantity' => $productQuantity,
                'price_per_item' => $pricePerItem,
            ];
        }

        $this->recalculateTotalPrice($cart);

        return back()
            ->withCookie(
                Cookie::make('cart', json_encode($cart), 60 * 24 * 180)
            )
            ->with('success', 'Barang berhasil dimasukkan ke keranjang');
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

        $cart['products'] = array_values($cart['products']);

        $this->recalculateTotalPrice($cart);

        return response()
            ->json($cart)
            ->cookie('cart', json_encode($cart), 60 * 24 * 180);
    }
}
