<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\kelas;
use Illuminate\Support\Facades\Schema;


class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        kelas::truncate();

        Schema::enableForeignKeyConstraints();

        $kelas = [
            ['nama'=>'X PPLG 1'],
            ['nama'=>'X PPLG 2'],
            ['nama'=>'X PPLG 3'],
            ['nama'=>'X ANIMASI 1'],
            ['nama'=>'X ANIMASI 2'],
            ['nama'=>'X ANIMASI 3'],
            ['nama'=>'X ANIMASI 4'],
            ['nama'=>'X TKJT 1'],
            ['nama'=>'X TKJT 2'],
            ['nama'=>'X TKJT 3'],
            ['nama'=>'X TE'],
            ['nama'=>'X BC'],
            ['nama'=>'XI PPLG 1'],
            ['nama'=>'XI PPLG 2'],
            ['nama'=>'XI ANIMASI 1'],
            ['nama'=>'XI ANIMASI 2'],
            ['nama'=>'XI ANIMASI 3'],
            ['nama'=>'XI ANIMASI 4'],
            ['nama'=>'XI TE'],
            ['nama'=>'XI BC'],
            ['nama'=>'XI TKJT 1'],
            ['nama'=>'XI TKJT 2'],
            ['nama'=>'XII PPLG 1'],
            ['nama'=>'XII PPLG 2'],
            ['nama'=>'XII ANIMASI 1'],
            ['nama'=>'XII ANIMASI 2'],
            ['nama'=>'XII ANIMASI 3'],
            ['nama'=>'XII TE'],
            ['nama'=>'XII BC'],
            ['nama'=>'XII TKJT 1'],
            ['nama'=>'XII TKJT 2'],
        ];


        foreach ($kelas as $data){
            kelas::insert([
                'nama'=> $data ['nama'],
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
        }
    
    }
    
}