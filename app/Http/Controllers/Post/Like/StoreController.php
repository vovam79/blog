<?php

namespace App\Http\Controllers\Post\Like;

use App\Http\Controllers\Controller;
use App\Http\Requests\Comment\StoreRequest;
use App\Models\Comment;
use App\Models\Post;




class StoreController extends Controller
{
    //
    public function __invoke(Post $post)
    {
        // TODO: Implement __invoke() method.

        //$data = $request->validated();
        auth()->user()->PostUserLike()->toggle($post->id);
        return redirect()->back(); //route('post.index');
    }
}
