<?php

namespace App\Http\Controllers;

use App\SchTimelineComments;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class TimelineCommentsController extends Controller
{
    public function storeTimelineComment(Request $request) {
        try {
            $commentTimeline = [
                'sch_comments_timeline_id' => $request->input('sch_comments_timeline_id'),
                'sch_comments_user_id' => $request->user()->id,
                'sch_comments_user_name' => $request->input('sch_comments_user_name'),
                'sch_comments_avatar' => $request->input('sch_comments_avatar'),
                'sch_comments_reply' => $request->input('sch_comments_reply')
            ];
            $comment = SchTimelineComments::create($commentTimeline);
            $response = SchTimelineComments::where('sch_comments_timeline_id', $request->input('sch_comments_timeline_id'))
                        ->orderBy('sch_comments_id', 'DESC')
                        ->first();
            return response(['callback_data' => $response, 'message' => 'Comment successfully added', 'status' => 200], 200);
        } catch (\Exception $e) {
            return response(['callback_data' => $e], 401);
        }
    }

    public function getCommmentById($id)
    {
        $comments = DB::table('sch_timeline_comments')
                    ->where('sch_comments_timeline_id', $id)
                    ->orderBy('sch_comments_id','asc')
                    ->get();
        return $comments;
    }
}
