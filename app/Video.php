<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
        'video_id', 'thuisPloeg', 'uitPloeg', 'stand', 'videoSrc',
    ];
}
