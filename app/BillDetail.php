<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
  protected $table = "billdetails";
 public function bill()
 {
     return $this->belongsTo('App\Bill');
 }

 public function product()
 {
     return $this->belongsTo('App\Product');
 }
}
