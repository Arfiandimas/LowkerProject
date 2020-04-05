<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materis', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('set null');

            $table->integer('study_id')->unsigned()->nullable();
            $table->foreign('study_id')->references('id')->on('studies')
                ->onUpdate('cascade')->onDelete('set null');

            $table->string('judul_video')->nullable();
            $table->string('video')->nullable();
            $table->string('durasi')->nullable();
            $table->text('keterangan')->nullable();
            $table->string('download_video')->nullable();
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
        Schema::dropIfExists('materis');
    }
}
