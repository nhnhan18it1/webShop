<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $table='order';
   public $timestamps=true;
   public function account()
   {
       return $this->belongsTo('App\account', 'IDND', 'ID');
   }
   public function product()
   {
       return $this->belongsTo('App\product', 'IDSP', 'ID');
   }
}
