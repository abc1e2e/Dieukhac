<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingBanner extends Model
{
    protected $table = 'setting_banner';
    protected $fillable = ['image'];
}
