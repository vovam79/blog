<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;

class EditController extends Controller
{
    //
    public function __invoke(User $user)
    {
        // TODO: Implement __invoke() method.

        $roles = Role::all();
        return view('admin.user.edit',compact('user', 'roles'));
    }
}
