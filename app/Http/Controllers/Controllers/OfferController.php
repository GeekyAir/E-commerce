<?php

namespace App\Http\Controllers\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Offer ;
use App\Model\Product ;
class OfferController extends Controller
{
      public function index(){
        $offers = Offer::select() ->get();
        $products = Product::select() ->get();
          return view('Cpanel.Offer.index' ,
          [
              'offers' -> $offers ,
              'products' -> $products
          ]);
    }
      public function AddOffer(){
         return view('Cpanel.Offer.create');
    }
      public function storeOffer(Request $request)
    {
        // insert
        Offer::Create([
            'product_id' => $request ->id,
            'discount' => $request ->discount,
            'point' =>   $request -> point ,
        ]);
        return redirect()->route('cpanel-index')->with('success','Offer successfully Added.');
    }
     public function editOffer($id){
        $offer = Offer::find($id);
        $product = $offer->findProduct($offer->product_id);
        return response()->json($product);
    }
      public function updateOffer(Request $request){
        $offer = Offer::where('product_id',$request->id)->get();
        $offer[0]->product_id = $request->id;
        $offer[0]->discount = $request->discount;
        $offer[0]->point = $request->point;
        $offer[0]->save();
        return redirect()->route('cpanel-index')->with('success','Offer successfully Updated');

    }

    public function deleteOffer($CategoryId){
        $category = Offer::find($CategoryId);
        if(!$category )
            return redirect() -> back() -> with(['error' => 'هذه الفئة غير موجودة'] );
        $category -> delete();
        return redirect()->route('categories')->withStatus(__('Category successfully Deleted.'));
    }

    public function findProduct($id)
    {
        $offer = Product::find($id);
        return response()->json($offer);
    }
}
