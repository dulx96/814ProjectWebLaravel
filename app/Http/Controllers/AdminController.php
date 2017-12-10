<?php

namespace App\Http\Controllers;

use App\products;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
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
        $products = products::find($input);
        $result = view("includes.table")->with("products", $products)->render();
        return response()->json($result);
    }

    public function adminAddel() {
        return view("addel");
    }
}
