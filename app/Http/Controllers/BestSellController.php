<?php

namespace App\Http\Controllers;

use App\products;
use Illuminate\Http\Request;

class BestSellController extends Controller
{
    public static function getBestSeller(){
        $bestSellerProducts = DB::table('products')->limit(12)->get();
        return view('home')->with('bestseller',$bestSellerProducts);
    }
}
