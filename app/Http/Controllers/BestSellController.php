<?php

namespace App\Http\Controllers;
use App\BestSell;
use App\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BestSellController extends Controller
{
    /**
     * @return $this
     */
    public static function getBestSeller(){
        $bestSellerProducts = BestSell::best_sell();
        $loadedData = array();
        $loadedImage = array();
        foreach ($bestSellerProducts as $product) {
            $loadedData[$product->ProductID] = json_encode($product);
        }
        return view('home')->with('bestseller',$bestSellerProducts)->with('loadedData',$loadedData)->with('loadedImage',$loadedImage);
    }
}
