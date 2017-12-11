<?php

namespace App\Http\Controllers;

use App\product;
use App\products;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(Request $request)
    {
        if (!empty($_GET)) {
            $ProductID = $request->input("ProductID");
            $ProductSKU = $request->input("ProductSKU");
            $ProductName = $request->input("ProductName");
            $ProductCategoryID = $request->input("ProductCategoryID");
            $ProductQuantity = $request->input("ProductQuantity");
            $ProductDescription = $request->input("ProductDescription");
            $ProductManufacturer = $request->input("ProductManufacturer");
            $ProductWeight = $request->input("ProductWeight");
            $ProductPrice = $request->input("ProductPrice");
            products::appendProduct($ProductID, $ProductSKU, $ProductName,
                $ProductCategoryID, $ProductQuantity, $ProductDescription,
                $ProductManufacturer, $ProductWeight, $ProductPrice);
        }
        $query = products::get32Products();
        return view("admin")->with("products", $query);
    }

    public function loadMore(Request $request)
    {
        $i = $request->input("i");
        $products = products::loadMore($i);
        $result = view("includes.table")->with("products", $products)->render();
        return response()->json($result);
    }

    public function adminFilter(Request $request)
    {
        $input = $request->input("input");
        $products = products::findByName($input);
        $result = view("includes.table")->with("products", $products)->render();
        return response()->json($result);
    }

    public function adminAddel(Request $request)
    {
        $categories = products::getAllCategory();
        $id = (int)$request->input("id");
        if ($id == 0) {
            $product = new \stdClass();
            $product->ProductID = "";
            $product->ProductSKU = "";
            $product->ProductName = "";
            $product->ProductDescription = "";
            $product->ProductManufacturer = "";
            $product->ProductPrice = "";
            $product->ProductWeight = "";
            $product->ProductCategoryID = "";
            $product->ProductUpdateDate = "";
            $product->ProductQuantity = "";
            return view("addel")->with("product", $product)
                ->with("categories", $categories);
        } else {
            $result = products::findById($id);
            return view("addel")->with("product", $result[0])
                ->with("categories", $categories);
        }
    }

    public function adminDelete(Request $request) {
        $id = (int)$request->input('id');
        products::deleteById($id);
    }
}
