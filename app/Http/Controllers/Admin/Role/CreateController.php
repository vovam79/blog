<?php

namespace App\Http\Controllers\Admin\Role;

use App\Http\Controllers\Controller;


class CreateController extends Controller
{
    //
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
        return view('admin.role.create');
    }
}
