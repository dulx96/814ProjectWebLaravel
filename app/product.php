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

    public static function new()
    {
        return DB::table('products')->leftJoin('productimages','products.ProductID','=','productimages.ImageProductId')->orderBy('ProductUpdateDate','DESC')->limit(12)->get();
    }
    public static function hot()
    {
        return DB::table('products')->leftJoin('productimages','products.ProductID','=','productimages.ImageProductId')->orderBy('ProductPrice','DESC')->limit(12)->get();
    }

}
