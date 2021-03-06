<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Comment;

class Post extends Model
{
    protected $fillable = ['user_id','title','image','body'];
    
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
        public function getPostUsername()
        {
            return User::where('id', $this->user_id)->first()->name;
        }
}