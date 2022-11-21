<?php


namespace App\Service\Admin;


use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostService
{

    public function store($data){

        if(isset($data['tag_ids'])){
            $tagIds = $data['tag_ids'];
            unset($data['tag_ids']);
        }
        try {
            DB::beginTransaction();
            $data['preview_image'] = Storage::disk('public')->put('public/image/preview', $data['preview_image']);
            $data['main_image'] = Storage::disk('public')->put('public/image/main', $data['main_image']);
            $post = Post::firstOrCreate($data);
            if(isset($tagIds)) $post->tags()->attach($tagIds);
            DB::commit();
        }
        catch (\Exception $exception){
            Db::rollBack();
            abort(404);
        }
    }

    public function update($data, $post){
        if(isset($data['tag_ids'])){
            $tagIds = $data['tag_ids'];
            unset($data['tag_ids']);
        }
        try {
            DB::beginTransaction();
            if (isset($data['preview_image'])) {
                $data['preview_image'] = Storage::disk('public')->put('public/image/preview', $data['preview_image']);
            }
            if (isset($data['main_image'])) {
                $data['main_image'] = Storage::disk('public')->put('public/image/main', $data['main_image']);
            }
            /* $post = Post::firstOrCreate($data);*/
            $post->update($data);
            if(isset($tagIds)) $post->tags()->sync($tagIds);
            DB::commit();
        }
        catch(\Exception $exception){
            Db::rollBack();
            abort(404);
        }
        return $post;
    }



}
