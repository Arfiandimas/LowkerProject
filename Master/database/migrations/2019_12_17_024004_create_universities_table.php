<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniversitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('universities', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('science_id')->unsigned()->nullable();
            $table->foreign('science_id')->references('id')
                ->on('sciences')->onDelete('cascade');

            $table->string('name');
            $table->string('slug');
            $table->string('logo');
            $table->string('lokasi');
            $table->integer('peringkat');
            $table->string('keterangan');
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
        Schema::dropIfExists('universities');
    }
}
