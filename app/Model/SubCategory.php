<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
         protected $table ="sub_categories";
        protected $fillable = [  'id' , 'cat_id' ,'type', 'name_ar' , 'name_en' , 'img_url' , 'created_at' , 'updated_at'];
        // wont Updare
        protected $hidden = [
        ];

        function findCat($id)
        {
           $category =  Category::find($id);

           return $category->name_ar;
        }
}
