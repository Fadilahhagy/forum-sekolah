<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Article extends Model
{
    protected $fillable = ['user_id','judul_content','content','image','size','type','path'];
    
        public function getPostUsername()
        {
            return User::where('id', $this->user_id)->first()->name;
        }
}