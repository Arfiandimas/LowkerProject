<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = ['user_id', 'nama_depan', 'nama_belakang', 'email', 'password', 'telepon', 'alamat', 'negara', 'jenis_kelamin', 'tinggi_badan', 'status', 'pendidikan', 'foto', 'video', 'visa', 'pekerjaan_diinginkan', 'siap_kerja', 'kerja_di_luarnegeri', 'pengalaman_kerja', 'bahasa_inggris', 'penulisan_bahasainggris', 'bacaan_bahasainggris' ];
}
