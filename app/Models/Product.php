<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory,SoftDeletes;

   // protected $table= "products";
    protected $fillable=['name','price','description','image'];

      public function getImageAttribute($value){

        if(isset($value) &&  !empty($value))
        {
           return Storage::disk('uploads')->url($value);
        }
        return null;
      }

}
