<?php

namespace App\Models;

use App\Models\petakerawanan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class jeniskerawanan extends Model
{

    public function petakerawanan(){
        return $this->hasMany(petakerawanan::class);
    }

    use HasFactory;
    protected $table ='jeniskerawanan';

    protected $fillable=[
        'jenis_kerawanan'
    ];
}
