<?php

namespace App\Http\Controllers\Person\Like;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
        $likes = auth()->user()->PostUserLike;

        return view("person.like.index", compact('likes'));
    }
}
