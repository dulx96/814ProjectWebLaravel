<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    //
    public function index(Request $request)
    {
        $key = $request->input('key');
        $products = DB::select('select * from products WHERE ProductName LIKE \'%'
            . $key . '%\'  limit 8');
        return view('search')->with('products', $products);
    }

    public function autocomplete(Request $request)
    {
        $term = $request->term;

        $results = array();

        $queries = DB::select("select * from products WHERE ProductName LIKE '%"
            . $term . "%' limit 8");

        foreach ($queries as $query) {
            $results[] = ['id' => $query->ProductID,
                'value' => $query->ProductName];
        }
        return response()->json($results);
    }
}

