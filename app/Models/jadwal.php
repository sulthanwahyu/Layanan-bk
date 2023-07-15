<?php

namespace App\Models;

use App\Models\guru;
use App\Models\siswa;
use App\Models\Walas;
use App\Models\layanan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class jadwal extends Model
{
    use HasFactory;
    protected $table='gurubk';
    // public function siswa(){
    //     return $this->belongsTo(siswa::class, 'nipd_id');
    // }

    public function guru(){
        return $this->belongsTo(guru::class,'bk_id');
    }

    public function Walas(){
        return $this->belongsTo(Walas::class,'walas_id');
    }
    public function layanan(){
        return $this->belongsTo(layanan::class,'layanan_bk_id');
    }

    protected $fillable=[
        'status',
        'layanan_bk_id',
        'bk_id',
        'nama',
        'deskripsi',
        'walas_id',
        'tanggal_konseling',
        'hasil_konseling',
    ];
}
