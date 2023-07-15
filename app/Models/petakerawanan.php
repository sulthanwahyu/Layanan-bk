<?php

namespace App\Models;

use App\Models\jeniskerawanan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class petakerawanan extends Model
{
    public function siswa(){
        return $this->belongsTo(siswa::class, 'nipd_id','id');
    }
    
    public function siswas(){
        return $this->belongsTo(siswa::class, 'nama_id','id');
    }

    public function walas(){
        return $this->belongsTo(Walas::class, 'walas_id','id');
    }

    public function jeniskerawanan(){
        return $this->belongsTo(jeniskerawanan::class, 'jenis_kerawanan_id','id');
    }
    
    
    
    use HasFactory;
    protected $table ='peta_kerawanan';

    protected $fillable=[
        'jenis_kerawanan_id',
        'nama_id',
        'nipd_id',
        'walas_id',
    ];
}
