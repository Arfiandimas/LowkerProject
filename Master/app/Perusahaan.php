<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    protected $fillable = ['user_id', 'deskripsi', 'direktur', 'email', 'email_lain', 'nomor_tlp', 'google', 'facebook', 'twitter'];
}
