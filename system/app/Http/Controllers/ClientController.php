<?php

namespace App\Http\Controllers;
use App\Models\Produk;
class ClientController extends Controller
{

    function showHome()
    {   $data['list_produk'] = Produk::all();
        return view(view:'template.home', data: $data);
    }

    function showDetail()
    {   $data['list_produk'] = Produk::all();
        return view('template.fruit', data: $data);
    }

    function showShop()
    {   $data['list_produk'] = Produk::all();
        return view(view:'client.shop.shop', data: $data);
    }

    function showCheckout()
    {
        return view('client.checkout.checkout');
    }

    function showCart()
    {
        return view('client.cart.cart');
    }

}
