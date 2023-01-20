<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
          protected $table ="offers";
        protected $fillable = [  'id' , 'product_id' ,'discount' , 'point' , 'created_at' , 'updated_at'];
        // wont Updare
        protected $hidden = [
        ];

        public function findProduct($id)
        {
           $product = Product::find($id);

           return $product;
        }
}
