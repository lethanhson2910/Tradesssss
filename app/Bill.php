<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
  protected $table = "bills";
 public function customer()
 {
     return $this->belongsTo('App\Customer');
 }
 public function billdetails()
 {
     return $this->hasMany('App\BillDetail');
 }
}
