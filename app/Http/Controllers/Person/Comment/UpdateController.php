<?php

namespace App\Http\Controllers\Person\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Person\Comment\UpdateRequest;

use App\Models\Comment;
use Illuminate\Http\Request;


class UpdateController extends Controller
{
    //
         public function __invoke(UpdateRequest  $request, Comment $comment)
    {
        // TODO: Implement __invoke() method.
        $date =  $request->validated();
        $comment->update($date);

        return view('person.comment.show', compact('comment'));
    }
}
