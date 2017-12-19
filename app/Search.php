<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Search extends Model
{
    //
    public static function Index($key) {
        return  DB::select('select * from products WHERE ProductName LIKE \'%'
            . $key . '%\'  limit 8');
    }


    public static function autocomplete($term) {
        return DB::table('products')->leftJoin('productimages','products.ProductID','=','productimages.ImageProductId')->where('products.ProductName','like','%'
            . $term . '%')->limit(8)->get();

    }
}
