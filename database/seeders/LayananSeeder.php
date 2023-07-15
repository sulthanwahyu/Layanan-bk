<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\layanan;
use Illuminate\Support\Facades\Schema;


class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        layanan::truncate();

        Schema::enableForeignKeyConstraints();

        $layanan = [
            ['jenis_layanan'=>'Bimibingan Pribadi'],
            ['jenis_layanan'=>'Bimibingan Sosial'],
            ['jenis_layanan'=>'Bimibingan Karir'],
            ['jenis_layanan'=>'Bimibingan Belajar'],
        ];


        foreach ($layanan as $data){
            layanan::insert([
                'jenis_layanan'=> $data ['jenis_layanan'],
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
        }
    
    }
    
}