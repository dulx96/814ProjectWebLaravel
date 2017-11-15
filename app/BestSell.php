<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BestSell extends Model
{
    public static function all()
    {
        return DB::table('products')->get();
    }
}
