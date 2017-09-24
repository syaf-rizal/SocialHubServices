<?php

namespace App\Http\Controllers;

use App\SchTimelines;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class TimelinesController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function StoreTimelines(Request $request)
    {
        try {
            $timelinesData = [
                'timelines_user_id' => $request->user()->id,
                'timelines_user_name' => $request->input('timelines_user_name'),
                'timelines_avatar' => $request->input('timelines_avatar'),
                'timelines_story' => $request->input('timelines_story'),
                'timelines_type' => 0,
                'timelines_likes' => 0
            ];
            $timeline = SchTimelines::create($timelinesData);
            $response = SchTimelines::where('timelines_user_id', $request->user()->id)
                        ->orderBy('timelines_id', 'DESC')
                        ->first();
            
            return response(['callback_data' => $response, 'message' => 'Successfully add to timeline', 'status' => 200], 200);
        } catch (\Exception $e) {
            return response(['callback_data' => $e], 401);
        }
    }

    public function GetAllTimelines()
    {
        $timelines = DB::table('sch_timelines')->orderBy('timelines_id','desc')
                                               ->get();
        return $timelines;
    }
}
