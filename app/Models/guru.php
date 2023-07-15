<?php

namespace App\Models;
use App\Models\User;
use App\Models\guru;
use App\Models\kelas;
use App\Models\jadwal;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class guru extends Model
{
    use HasFactory;
    protected $table ='bk';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function jadwal()
    {
        return $this->hasMany(jadwal::class);
    }

    public function kelas()
    {
        return $this->belongsTo(kelas::class);
    } 

    protected $fillable=[
        'nama_bk',
        'user_id',
        'kelas_id',
        
    ];
}
