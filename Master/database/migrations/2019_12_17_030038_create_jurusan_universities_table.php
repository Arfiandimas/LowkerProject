<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJurusanUniversitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jurusan_universities', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('detail_university_id')->unsigned()->nullable();
            $table->foreign('detail_university_id')->references('id')
                ->on('detail_universities')->onDelete('cascade');

            $table->integer('jurusan_id')->unsigned()->nullable();
            $table->foreign('jurusan_id')->references('id')
                ->on('jurusans')->onDelete('cascade');

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
        Schema::dropIfExists('jurusan_universities');
    }
}
