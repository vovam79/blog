<?php

namespace App\Http\Controllers\Person\Comment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
        $comments = auth()->user()->Comments;
        return view("person.comment.index", compact('comments'));
    }
}
