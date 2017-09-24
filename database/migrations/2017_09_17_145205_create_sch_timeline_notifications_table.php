<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchTimelineNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sch_timeline_notifications', function (Blueprint $table) {
            $table->increments('sch_notification_id');
            $table->integer('sch_notification_timelines_id');
            $table->string('sch_notification_remarks', 175);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sch_timeline_notifications');
    }
}
