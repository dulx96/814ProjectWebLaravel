<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Object_;

class CommentController extends Controller
{
    public function getcommentbyId(Request $request){
        $comments = Comment::getcommentbyProId($request->input('productId'));
        $commentNum = Comment::getcommentbyProId($request->input('productId'))->count();
        $returnhtml = view("includes.comment")->with('comments',$comments)->with('countComment',$commentNum)->with('productId',$request->input('productId'))->render();
        $Obj = new \stdClass();
        $Obj->html = $returnhtml;
        $Obj->count = $commentNum;
        return response()->json($Obj);
    }

    public function insertcomment(Request $request){
        Comment::insertComment($request->input('productId'),$request->input('comment'));
        return response()->json(1);
    }
}
