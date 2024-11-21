<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengunjung extends Model
{
    use HasFactory;

    protected $table = 'pengunjung';

    protected $fillable = [
        'nama',
        'asal',
        'email',
        'no_tlp',
        'jumlah_pengunjung',
        'tujuan_detail',
        'komentar',
    ];
}
