<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;

use Carbon\Carbon;


class ShowController extends Controller
{
    //
    public function __invoke(Post $post)
    {
        // TODO: Implement __invoke() method.
        $date = Carbon::parse($post->created_at);
        $relatePosts = Post::where('category_id', '=', $post->category_id)->
        where('id',"<>",$post->id)->get();


        return view('main.post.show', compact('post', 'date', 'relatePosts'));
    }
}
