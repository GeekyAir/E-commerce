<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
           protected $table ="categories";
        protected $fillable = [  'id' , 'type' ,'name_ar' , 'name_en' , 'img_url' , 'created_at' , 'updated_at'];
        // wont Updare
        protected $hidden = [
        ];
}
