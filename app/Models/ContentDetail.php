<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentDetail extends Model
{
    protected $table = 'content_detail';
    protected $fillable = ['name','content', 'content_id'];

}
