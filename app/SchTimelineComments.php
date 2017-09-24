<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchTimelineComments extends Model
{
    protected $table    = 'sch_timeline_comments';
    protected $fillable = [
        'sch_comments_timeline_id', 'sch_comments_user_id', 'sch_comments_user_name', 'sch_comments_avatar', 'sch_comments_reply'
    ];
}
