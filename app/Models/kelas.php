<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;

    protected $table='kelas';

  protected $fillable=[
        'nama',
        
    ];

    public function siswa(){
        return $this->hasMany(siswa::class, 'kelas_id','id');
    }

    public function guru(){
        return $this->hasMany(guru::class, 'kelas_id','id');
    }

    public function Walas(){
        return $this->hasMany(Walas::class, 'kelas_id','id');
    }
}
