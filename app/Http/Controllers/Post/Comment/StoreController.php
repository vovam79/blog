<?php

namespace App\Http\Controllers\Post\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Comment\StoreRequest;
use App\Models\Comment;
use App\Models\Post;




class StoreController extends Controller
{
    //
    public function __invoke(Post $post, StoreRequest $request)
    {
        // TODO: Implement __invoke() method.
        //dd($post);
        $data = $request->validated();
        $data['post_id'] = $post->id;
        $data['user_id'] = auth()->user()->id;
        Comment::create($data);
        return redirect()->route('post.show', $post->id  );
    }
}
