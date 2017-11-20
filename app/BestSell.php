<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BestSell extends Model
{
    public static function best_sell()
    {
        return DB::table('products')->limit(12)->get();
    }
}
