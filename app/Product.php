<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $table = "products";
 public function category()
 {
     return $this->belongsTo('App\Catetory');
 }

 public function billDetails()
 {
     return $this->hasMany('App\BillDetail');
 }
}
