<?php

namespace App\Http\Controllers\Admin\Role;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Role\UpdateRequest;
use App\Models\Role;



class UpdateController extends Controller
{
    //
         public function __invoke(UpdateRequest  $request, Role $role)
    {
        // TODO: Implement __invoke() method.
        $date =  $request->validated();

        $role->update($date);

        return view('admin.role.show', compact('role'));
    }
}
