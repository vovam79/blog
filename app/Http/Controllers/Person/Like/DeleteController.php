<?php

namespace App\Http\Controllers\Person\Like;

use App\Http\Controllers\Controller;
use App\Models\Post;


class DeleteController extends Controller
{
    //
    public function __invoke(Post $like)
    {
        // TODO: Implement __invoke() method.
        auth()->user()->PostUserLike()->detach($like->id);
        return  redirect()->route('person.like.index');
    }
}
