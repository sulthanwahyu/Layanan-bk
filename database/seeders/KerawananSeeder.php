<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\jeniskerawanan;
use Illuminate\Support\Facades\Schema;


class KerawananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        jeniskerawanan::truncate();

        Schema::enableForeignKeyConstraints();

        $jeniskerawanan = [
            ['jenis_kerawanan'=>'Terlambat'],
            ['jenis_kerawanan'=>'Atribut Tidak Lengkap'],
            ['jenis_kerawanan'=>'Berkelahi di lingkungan sekolah'],
            ['jenis_kerawanan'=>'Membawa sajam'],
            ['jenis_kerawanan'=>'merokok di area sekolah'],
            ['jenis_kerawanan'=>'membawa narkoba'],
        ];


        foreach ($jeniskerawanan as $data){
            jeniskerawanan::insert([
                'jenis_kerawanan'=> $data ['jenis_kerawanan'],
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
        }
    
    }
    
}