<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailUniversitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_universities', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('university_id')->unsigned()->nullable();
            $table->foreign('university_id')->references('id')
                ->on('universities')->onDelete('cascade');

            $table->string('slug');
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
        Schema::dropIfExists('detail_universities');
    }
}
