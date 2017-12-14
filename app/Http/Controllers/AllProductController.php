<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;

class AllProductController extends Controller
{
    //
    public function index()
    {
        $products = products::get32Products();
        $categories = products::getAllCategory();
        $manufactuer = products::getAllManufactuer();
        $result = array('products' => $products, 'categories' => $categories,
            'manufactuer' => $manufactuer);
        $loadedData = array();
        foreach ($result["products"] as $product) {
            if ($product->image == null) {
                $product->image = productController::random_image();
            }
            $loadedData[$product->ProductID] = $product;
        }
        return view('allproduct')->with('result', $result)
            ->with("loadedData", $loadedData);
    }

    public function filter(Request $request)
    {
        $order = $request->input("order");
        $manufactuer = $request->input("manufactuer");
        $category = $request->input("category");

        $products = products::productsFilter($order, $manufactuer, $category);
        $categories = products::getAllCategory();
        $manufactuer = products::getAllManufactuer();
        $result = array('products' => $products, 'categories' => $categories,
            'manufactuer' => $manufactuer);
        $loadedData = array();
        foreach ($result["products"] as $product) {
            $loadedData[$product->ProductID] = $product;
        }
        $returnhtml = view("includes.all_product_include")->with('result', $result)
            ->render();
        return response()->json($returnhtml);
    }
}
