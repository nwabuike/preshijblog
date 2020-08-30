<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel', function (Blueprint $table) {
            $table->bigIncrements('travel_id');
            $table->string('title')->nullable();
            $table->text('body')->nullable();
            $table->string('slug')->nullable();
            $table->text('excerpt')->nullable();
            $table->Integer('Published')->nullable();
            $table->dateTime('publish_date')->nullable();
            $table->bigInteger('image_id')->nullable();
            $table->bigInteger('video_id')->nullable();
            $table->bigInteger('author_id')->nullable();
            $table->text('meta')->nullable();

            $table->softDeletes();
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
        Schema::dropIfExists('travel');
    }
}
