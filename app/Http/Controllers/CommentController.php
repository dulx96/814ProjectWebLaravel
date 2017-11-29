<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function getcommentbyId(Request $request){
        $comments = Comment::getcommentbyProId($request->input('productId'));
        $returnhtml = view("includes.comment")->with('comments',$comments)->render();
        return response()->json($returnhtml);

    }
    //
}
