<?php

namespace App\Http\Controllers;
use App\product;
use App\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BestSellController extends Controller
{
    /**
     * @return $this
     */
    public static function getBestSeller(){
        $bestSellerProducts = product::best_sell();
        $loadedData = array();
        foreach ($bestSellerProducts as $product) {
            $loadedData[$product->ProductID] = json_encode($product);
        }
        return view('home')->with('bestseller',$bestSellerProducts)->with('loadedData',$loadedData);
    }
    public static function all(){
        $bestSellerProducts = product::best_sell();
        $loadedData = array();
        foreach ($bestSellerProducts as $product) {
            $loadedData[$product->ProductID] = json_encode($product);
        }
        return view('all-products')->with('bestseller',$bestSellerProducts)->with('loadedData',$loadedData);
    }
}
