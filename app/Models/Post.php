<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = "posts";
    public $guarded = [];
    protected $withCount = ['likeUsers'];
    //protected $whith = ['category'];

    public function tags(){
        return $this->belongsToMany(Tag::class, 'post_tags', 'post_id','tag_id');
    }

    public function  category(){
        return $this->belongsTo(Category::class, 'category_id','id');
    }
    public function likeUsers(){
        return $this->belongsToMany(User::class, 'post_user_likes','post_id','user_id');
    }
    public function Comments(){
        //return $this->BelongsToMany(User::class, 'comments','post_id', 'user_id');
        return $this->hasMany(Comment::class, 'post_id','id');
    }
}
