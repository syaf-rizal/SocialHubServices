<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['prefix' => 'v1', 'middleware' => 'auth:api'], function() {
    /**
     * POST
     */
    Route::post('timelinePut', 'TimelinesController@StoreTimelines');
    Route::post('commentTimelinePut','TimelineCommentsController@storeTimelineComment');
    /**
     * End POST
     */
    /**
     * GET
     */
    Route::get('timelineGetAll', 'TimelinesController@GetAllTimelines');
    Route::get('getTimelineComment/{id}', 'TimelineCommentsController@getCommmentById');
    /**
     * End GET
     */
});