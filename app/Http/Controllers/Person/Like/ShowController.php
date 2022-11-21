<?php

namespace App\Http\Controllers\Person\Like;

use App\Http\Controllers\Controller;
use App\Models\Post;


class ShowController extends Controller
{
    //
    public function __invoke(Post $like)
    {
        // TODO: Implement __invoke() method.
        //$categories = Category::all();
        return view('person.like.show', compact('like'));
    }
}
