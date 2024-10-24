<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    use HasFactory;

    protected $table = 'kunjungan';

    protected $fillable = [
        'tujuan', 
        'tujuan_detail', 
        'komentar', 
        'tanggal', 
        'created_at', 
        'updated_at'
    ];

    public $timestamps = true; 
}
