<?php

namespace App\Models;
use App\Models\siswa;
use App\Models\User;
use App\Models\kelas;
use App\Models\jadwal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class siswa extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table ='siswa';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function jadwal()
    {
        return $this->hasMany(jadwal::class,);
    }
    
    public function petakerawanan()
    {
        return $this->hasMany(petakerawanan::class);
    }

    public function kelas()
    {
        return $this->belongsTo(kelas::class);
    } 

    protected $fillable=[
        'nipd',
        'user_id',
        'nama_siswa',
        'ttl',
        'kelas_id', 
        'jenis_kelamin',
    ];
}
