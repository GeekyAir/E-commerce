<?php

namespace App\Http\Controllers\Controllers;

use App\Model\Product;
use App\Model\Category ;
use App\Model\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Dotenv\Regex\Success;

class CategoryController extends Controller
{
    public function index(){
        // $cat = Category::select()->where('type' , $type) ->get();
        $categories = Category::all();
        $subcategories = SubCategory::all();
        $products = Product::all();
        return redirect()->route('cpanel-index')->with('success','تم اضافه الفئه');
    }
      public function AddCategory($type){
         return view('Cpanel.Category.create' , ['type' -> $type]);
    }
      public function storeCategory(Request $request)
    {
        $file_extension1 = $request -> img_url -> getClientOriginalExtension();
        $file_name1 =  time() . '.' .'1' . '.'.$file_extension1;
        $path = 'images/Category';
        $request -> img_url -> move($path,$file_name1 );
        // insert
        Category::Create([
            'name_ar' => $request ->name,
            'name_en' => $request ->name,
            'type' =>   $request -> type,
            'img_url' => $file_name1 ,
        ]);
        return redirect()->route('cpanel-index')->with('success','Category successfully Added.');
    }
     public function editCategory($id){

        $category = Category::find($id);

        return response()->json($category);
    }
      public function updateCategory(Request $request ){
        $cat = Category::select('id' , 'type' ,'name_ar' , 'name_en' , 'img_url') ->find($request->id);
              if($request -> img_url ) {
            $file_extension1 = $request -> img_url -> getClientOriginalExtension();
        $file_name1 =  time() . '.' .'1' . '.'.$file_extension1;
        $path = 'images/Category';
        $request -> img_url -> move($path,$file_name1 );
        } else {
            $file_name1 = $cat -> img_url ;
        }
              $cat->update([
            'name_ar' => $request ->name,
            'name_en' => $request ->name,
            'type' =>   $request -> type ,
            'img_url' => $file_name1 ,

        ]);
        return redirect()->route('cpanel-index')->with("success","Category Updated Successful");

    }

    public function deleteCategory($CategoryId){
        $category = Category::find($CategoryId);
        if(!$category )
            return redirect() -> back() -> with(['error' => 'هذه الفئة غير موجودة'] );
        $category -> delete();
        return redirect()->route('cpanel-index')->with('error','Category successfully Deleted.');
    }

}
