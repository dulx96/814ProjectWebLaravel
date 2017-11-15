<?php

namespace App\Http\Controllers;

use App\BestSell;
use App\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BestSellController extends Controller
{
    public static function getBestSeller(){
        $bestSellerProducts = BestSell::best_sell();
        return view('home')->with('bestseller',$bestSellerProducts);
    }
}
