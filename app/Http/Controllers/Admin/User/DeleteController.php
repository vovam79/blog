<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    //
    public function __invoke(User $user)
    {
        // TODO: Implement __invoke() method.
        $user->delete();
        return  redirect()->route('admin.user.index');
    }
}
