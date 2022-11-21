<?php

namespace App\Http\Controllers\Person\Comment;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;


class DeleteController extends Controller
{
    //
    public function __invoke(Comment $comment)
    {
        // TODO: Implement __invoke() method.
        $comment->delete();
        return  redirect()->route('person.comment.index');
    }
}
