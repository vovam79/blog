<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Category $category)
    {
        // TODO: Implement __invoke() method.
        //$categories = Category::all();
        $posts = $category->posts()->paginate(3);
        $randomPosts = Post::get()->random(4);
        $likePosts = Post::withCount('likeUsers')->orderBy('like_users_count','DESC')->get()->take(4);
        return view("main.index", compact('posts', 'randomPosts','likePosts'));

    }
}
