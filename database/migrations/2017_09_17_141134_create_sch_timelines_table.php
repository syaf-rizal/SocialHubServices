<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchTimelinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sch_timelines', function (Blueprint $table) {
            $table->increments('timelines_id');
            $table->integer('timelines_user_id');
            $table->string('timelines_user_name', 75);
            $table->string('timelines_avatar', 150)->nullable();
            $table->integer('timelines_type')->default(0);
            $table->text('timelines_story')->nullable();
            $table->string('timelines_photo',255)->nullable();
            $table->string('timelines_location', 150)->nullable();
            $table->integer('timelines_likes')->default(0);
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
        Schema::dropIfExists('sch_timelines');
    }
}
