<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'content';
    protected $fillable = ['name'];

    // // Category has many posts
    // public function posts()
    // {
    //     return $this->hasMany(Post::class);
    // }
}
