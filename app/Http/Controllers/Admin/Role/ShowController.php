<?php

namespace App\Http\Controllers\Admin\Role;

use App\Http\Controllers\Controller;
use App\Models\Role;


class ShowController extends Controller
{
    //
        public function __invoke(Role $role)
    {
        // TODO: Implement __invoke() method.
        //$categories = Role::all();
        return view('admin.role.show', compact('role'));
    }
}
