<?php

namespace App\Http\Controllers;

use App\Search;
use Illuminate\Http\Request;
use App\products;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    //
    public function index(Request $request)
    {
        $products = Search::Index($request->input('key'));
        return view('search')->with('products', $products);
    }

    public function autocomplete(Request $request)
    {
        $queries = Search::autocomplete($request->term);
        $results = array();
        foreach ($queries as $query) {
            if ($query->image == null) {
                $query->image = productController::random_image();
            }
            $results[] = ['Product' => $query,  'value' => $query->ProductName];
        }
        return response()->json($results);
    }
}

