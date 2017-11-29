<?php

namespace App\Http\Controllers;

use App\BestSell;
use Illuminate\Http\Request;
use App\products;

class AllProductController extends Controller
{
    //
    public function index()
    {
        $products = products::get52Products();
        $categories = products::getAllCategory();
        $result = array('products' => $products, 'categories' => $categories);

        return view('allproduct')->with('result', $result);
    }

    public function orderFromSmallToBig(Request $request) {
        $value = $request->input("value");
        if($value == 1) {
            $products = products::get52ProducsOrderBySmallToBig();
        } else {
            $products = products::get52ProducsOrderByBigToSmall();
        }
        $categories = products::getAllCategory();
        $result = array('products' => $products, 'categories' => $categories);
        $returnhtml = view("allproduct")->with('result', $result)->render();
        return response()->json($returnhtml);
    }
}
