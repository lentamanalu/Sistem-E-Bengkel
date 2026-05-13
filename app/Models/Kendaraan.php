<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    /**
     
     * @var array<int, string>
     */
    protected $table = 'kendaraans';
    protected $fillable = [
        'plat_nomor',
        'nama_pemilik',
        'merk_kendaraan',
        'keluhan'
    ];
}