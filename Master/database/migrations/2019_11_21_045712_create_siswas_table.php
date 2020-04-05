<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('set null');

            $table->string('nama_depan')->nullable();
            $table->string('nama_belakang')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->string('telepon')->nullable();
            $table->text('alamat')->nullable();
            $table->string('negara')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->integer('tinggi_badan')->nullable();
            $table->string('status')->nullable();
            $table->string('pendidikan')->nullable();
            $table->string('foto')->nullable();
            $table->string('video')->nullable();
            $table->string('visa')->nullable();
            $table->string('pekerjaan_diinginkan')->nullable();
            $table->string('siap_kerja')->nullable();
            $table->string('kerja_di_luarnegeri')->nullable();
            $table->string('pengalaman_kerja')->nullable();
            $table->string('bahasa_inggris')->nullable();
            $table->string('penulisan_bahasainggris')->nullable();
            $table->string('bacaan_bahasainggris')->nullable();
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
        Schema::dropIfExists('siswas');
    }
}
