<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class product extends Model
{
    public static function best_sell()
    {
        return DB::table('products')->leftJoin('productimages', 'products.ProductID', '=',
            'productimages.ImageProductId')->limit(12)->get();
    }

}
