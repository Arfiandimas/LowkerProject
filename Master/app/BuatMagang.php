<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuatMagang extends Model
{
    protected $fillable = ['id_perusahaan', 'status_kerjaan','nama_magang', 'tentang_magang', 'waktu_kerja', 'gaji_min', 'gaji_max', 'negara', 'kota', 'pendidikan', 'jumlah', 'foto'];
}
