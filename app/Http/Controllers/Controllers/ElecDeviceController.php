<?php

namespace App\Http\Controllers\Controllers;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Product;
use Illuminate\Http\Request;

class ElecDeviceController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('elec_devices',[
            'products'=> $products,
            'categories'=> $categories
        ]);
    }
}
