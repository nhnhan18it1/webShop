<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table='product';

    public function product_detail()
    {
        return $this->hasMany('App\product_detail', 'ID', 'ID');
    }

}
