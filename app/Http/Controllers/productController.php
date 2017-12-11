<?php

namespace App\Http\Controllers;
use App\product;
use App\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    /**
     * @return $this
     */
    public static function getBestSeller(){
        $bestSellerProducts = product::best_sell();
        $newProducts = product::new();
        $hotProducts = product::hot();
        $loadedData = Array();
        foreach ($bestSellerProducts as $product) {
            if ($product->image == null) {
                $product->image = self::random_image();
            }
            $loadedData[$product->ProductID] = $product;
        }
        foreach ($newProducts as $product) {
            if ($product->image == null) {
                $product->image = self::random_image();
            }
            $loadedData[$product->ProductID] = $product;
        }
        foreach ($hotProducts as $product) {
            if ($product->image == null) {
                $product->image = self::random_image();
            }
            $loadedData[$product->ProductID] = $product;
        }
        return view('home')->with('bestseller',$bestSellerProducts)->with('new',$newProducts)->with('hot',$hotProducts)->with('loadedData',$loadedData);
    }
    public static  function random_image() {

        $n = rand(1,40);
        return  $n .'.jpg' ;
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
