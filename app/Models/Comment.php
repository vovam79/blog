<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = "comments";
    public $guarded = [];

    public function user(){
        return $this->belongsTo(User::class, 'user_id','id');
    }
    public function getDateAsCarbonAttribute(){
        return Carbon::parse($this->created_at);
    }

}
