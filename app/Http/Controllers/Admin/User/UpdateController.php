<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\User;



class UpdateController extends Controller
{
    //
         public function __invoke(UpdateRequest  $request, User $user)
    {
        // TODO: Implement __invoke() method.
        $date =  $request->validated();
        //dd($date);
        $user->update($date);

        //return redirect()->route('admin.user.index');
        return view('admin.user.show', compact('user'));
    }
}
