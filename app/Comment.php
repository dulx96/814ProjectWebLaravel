<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Comment extends Model
{
    /**
     * @param $productId
     * @return \Illuminate\Support\Collection
     */
    public static function getcommentbyProId($productId){
        return DB::table('comments')->where('CommentProductID',$productId)->get();
    }
}
