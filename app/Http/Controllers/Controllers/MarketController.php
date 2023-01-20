<?php

namespace App\Http\Controllers\Controllers;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Product;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('market',[
            'products'=>$products,
            'categories' => $categories
        ]);
    }
}
