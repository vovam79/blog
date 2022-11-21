<?php

namespace App\Http\Controllers\Person\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
        return view("person.main.index");
    }
}
