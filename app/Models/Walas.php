<?php

namespace App\Models;
use App\Models\jadwal;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Walas extends Model
{
    use SoftDeletes;

    use HasFactory;
    protected $table ='walas';
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function jadwal()
    {
        return $this->hasMany(jadwal::class,'walas_id','id');
    }

    public function kelas()
    {
        return $this->belongsTo(kelas::class);
    } 

    public function petakerawanan()
    {
        return $this->hasMany(petakerawanan::class);
    } 

    protected $fillable=[
        'name',
        'user_id',
        'kelas_id',
        
    ];

}
