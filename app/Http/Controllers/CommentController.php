<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function delete($id){
        $comment = Comment::find($id);
        $comment->delete();
        return back();
    }

    public function create(){
        $comment = new Comment();
        $comment->content = request()->content;
        $comment->article_id = request()->article_id;
        $comment-> save();
        return back();
    }
}
