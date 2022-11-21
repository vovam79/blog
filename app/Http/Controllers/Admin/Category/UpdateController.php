<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;


class UpdateController extends Controller
{
    //
         public function __invoke(UpdateRequest  $request, Category $category)
    {
        // TODO: Implement __invoke() method.
        $date =  $request->validated();

        $category->update($date);
        //dd($date);
        //Category::firstOrUpdate($date);
        return view('admin.categories.show', compact('category'));
    }
}
