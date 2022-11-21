<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;


class ShowController extends BaseController
{
    //
    public function __invoke(Post $post)
    {
        // TODO: Implement __invoke() method.
        //$categories = Category::all();
        return view('admin.post.show', compact('post'));
    }
}
