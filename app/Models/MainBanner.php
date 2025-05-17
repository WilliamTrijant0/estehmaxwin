<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MainBanner extends Model
{
    protected $fillable = [
        'sub_title',
        'title',
        'image'
    ];
}
