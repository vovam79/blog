<?php

namespace App\Http\Controllers\Person\Comment;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;


class ShowController extends Controller
{
    //
    public function __invoke(Comment $comment)
    {
        // TODO: Implement __invoke() method.
        //$categories = Category::all();
        //dd($comment);
        return view('person.comment.show', compact('comment'));
    }
}
