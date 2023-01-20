<?php

namespace App\Http\Controllers\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\SubCategory ;

class SubCategoryController extends Controller
{
        public function index($type){
                $cat = SubCategory::select()->where('type' , $type) ->get();
          return view('Cpanel.SubCategory.index' , ['cat' -> $cat]);
    }
      public function AddCategory($type){
         return view('Cpanel.SubCategory.create' , ['type' -> $type]);
    }
      public function storeCategory(Request $request)
    {
        $file_extension1 = $request -> img_url -> getClientOriginalExtension();
        $file_name1 =  time() . '.' .'1' . '.'.$file_extension1;
        $path = 'images/SubCategory';
        $request -> img_url -> move($path,$file_name1 );
        // insert
        SubCategory::Create([
            'name_ar' => $request ->name,
            'name_en' => $request ->name,
            'cat_id' =>   $request->cat_id ,
            'type' => $request -> type ,
            'img_url' => $file_name1 ,
        ]);
        return redirect()->route('cpanel-index')->with('success','Sub Category successfully Added.');
    }
     public function editCategory($id){
        $category = SubCategory::find($id);
        return response()->json($category);

    }
      public function updateCategory(Request $request){
        $cat = SubCategory::select('id' , 'cat_id' ,'name_ar' , 'name_en' , 'type', 'img_url') ->find($request->id);
        if(! $cat){
            return redirect() ->back();
        }
    if($request -> img_url ) {
            $file_extension1 = $request -> img_url -> getClientOriginalExtension();
        $file_name1 =  time() . '.' .'1' . '.'.$file_extension1;
        $path = 'images/SubCategory';
        $request -> img_url -> move($path,$file_name1 );
        } else {
            $file_name1 = $cat -> img_url ;
        }
              $cat->update([
            'name_ar' => $request ->name,
            'name_en' => $request ->name,
            'cat_id' =>   $request -> cat_id ,
            'type' => $request -> type ,
            'img_url' => $file_name1 ,

        ]);

        return redirect()->route('cpanel-index')->with("success","Sub Category Updated");

    }

    public function deleteCategory($CategoryId){
        $category = SubCategory::find($CategoryId);
        if(!$category )
            return redirect() -> back() -> with(['error' => 'هذه الفئة غير موجودة'] );
        $category -> delete();
        return redirect()->route('cpanel-index')->with('error','SubCategory successfully Deleted.');
    }
}
