<?php

namespace App\Http\Controllers\Person\Comment;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;

class EditController extends Controller
{
    //
    public function __invoke(Comment $comment)
    {
        // TODO: Implement __invoke() method.

        return view('person.comment.edit',compact('comment'));
    }
}
