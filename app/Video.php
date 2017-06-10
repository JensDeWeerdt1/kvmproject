<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function chat(){
        return $this->hasMany('App\Chat');
    }

    protected $fillable = [
        'video_id', 'thuisPloeg', 'uitPloeg', 'stand', 'videoSrc',
    ];
}
