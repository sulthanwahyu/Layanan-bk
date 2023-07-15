<?php

namespace App\Models;
use App\Models\jadwal;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class layanan extends Model
{
    use HasFactory;
    

    protected $table='layanan_bk';

  protected $fillable=[
        'jenis_layanan',
        
    ];

    public function siswa(){
        return $this->hasMany(siswa::class, 'layanan_id','id');
    }
    public function jadwal()
    {
        return $this->belongsTo(jadwal::class,'layanan_bk_id','id');
    }
}
