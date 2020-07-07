<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    public function index()
    {
        $all_products = Product::all();
        // dd($all_products);
        return view('prodotti', ['all_products' => $all_products]);
    }
}
