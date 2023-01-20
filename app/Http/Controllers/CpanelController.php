<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Course;
use App\Model\Offer;
use App\Model\Product;
use App\Model\Section;
use App\Model\SubCategory;
use Illuminate\Http\Request;

class CpanelController extends Controller
{
    public function index(){
      $categories = Category::all();
      $subcategories = SubCategory::all();
      $products = Product::all();
      $offers = Offer::all();
      $courses = Course::all();
      $sections = Section::all();
      return view('dashboard', [
          'categories'=>$categories,
          'subcategories' =>$subcategories,
          'products' => $products,
          'offers' =>$offers,
          'courses'=>$courses,
          'sections'=>$sections
      ]);

    }
}
