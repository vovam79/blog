<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
        $posts = Post::paginate(3);
        $randomPosts = Post::get()->random(4);
        $likePosts = Post::withCount('likeUsers')->orderBy('like_users_count','DESC')->get()->take(4);
       //$test = Post::find(1);
       //dd($likePosts->get());
        return view("main.index", compact('posts', 'randomPosts','likePosts'));
    }
}
