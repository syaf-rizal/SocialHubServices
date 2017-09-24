<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class SchTimelines extends Model
{
    protected $table    = 'sch_timelines';
    protected $dates    = ['created_at'];

    protected $fillable = [
        'timelines_user_id', 'timelines_user_name', 'timelines_avatar', 'timelines_story', 'timelines_photo', 'timelines_location', 'timelines_type', 'timelines_likes',
    ];

    public function getCreateAtAttribute($dates)
    {
        return Carbon::parse($dates)->diffForHumans();
    }
}
