<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function getcommentbyId(Request $request){
        $comments = Comment::getcommentbyProId($request->input('productId'));
        $returnhtml = view("includes.comment")->with('comments',$comments)->with('productId',$request->input('productId'))->render();

        return response()->json($returnhtml);

    }

    public function insertcomment(Request $request){
        Comment::insertComment($request->input('productId'),$request->input('comment'));
        return response()->json(1);
    }
    //
}
