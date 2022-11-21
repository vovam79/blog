<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Tag;


class IndexController extends Controller
{
    //
    public function __invoke()
    {
        // TODO: Implement __invoke() method.

        return redirect()->route('main');
    }
}
