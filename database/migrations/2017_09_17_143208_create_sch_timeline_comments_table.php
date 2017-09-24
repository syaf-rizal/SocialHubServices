<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchTimelineCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sch_timeline_comments', function (Blueprint $table) {
            $table->increments('sch_comments_id');
            $table->integer('sch_comments_timeline_id');
            $table->integer('sch_comments_user_id');
            $table->string('sch_comments_user_name', 75);
            $table->string('sch_comments_avatar', 150);
            $table->text('sch_comments_reply');
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
        Schema::dropIfExists('sch_timeline_comments');
    }
}
