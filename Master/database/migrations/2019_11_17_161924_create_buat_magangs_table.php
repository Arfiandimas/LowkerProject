<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuatMagangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buat_magangs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_perusahaan')->unsigned()->nullable();
            $table->foreign('id_perusahaan')->references('id')->on('perusahaans')
                ->onUpdate('cascade')->onDelete('set null');
            
            $table->string('nama_magang')->nullable();
            $table->text('tentang_magang')->nullable();
            $table->string('waktu_kerja')->nullable();
            $table->string('gaji_min')->nullable();
            $table->string('gaji_max')->nullable();
            $table->string('negara')->nullable();
            $table->string('kota')->nullable();
            $table->string('pendidikan')->nullable();
            $table->string('jumlah')->nullable();
            $table->string('foto')->nullable();
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
        Schema::dropIfExists('buat_magangs');
    }
}
