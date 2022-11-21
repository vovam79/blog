<?php

namespace App\Http\Controllers\Admin\Role;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Role\StoreRequest;
use App\Models\Role;


class StoreController extends Controller
{
    //
    public function __invoke(StoreRequest $request)
    {
        // TODO: Implement __invoke() method.
        $data = $request->validated();
        Role::firstOrCreate($data);
        return redirect()->route('admin.role.index');
    }
}
