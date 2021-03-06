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
        return DB::table('comments')->leftJoin('users','comments.CommentUserID','=','users.UserID')->where('CommentProductID',$productId)->get();
    }
    public static function insertComment($productId, $comment)
    {
        DB::table('comments')->insert([
            'CommentProductID' => $productId,
            'Comment' => $comment
        ]);
    }
}
