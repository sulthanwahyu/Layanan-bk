<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\siswa;
use App\Models\Walas;
use App\Models\jadwal;
use App\Models\layanan;
use App\Models\LogActivity;
use Illuminate\Http\Request;

class jadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jadwal = jadwal::all();
        $walas = Walas::all();
        $layanan_bk = layanan::all();
        $guru = guru::all();
        $siswa = siswa::all();
        return view('siswa.jadwal',compact('jadwal','walas','layanan_bk','guru','siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jadwal = jadwal::all();
        $walas = Walas::all();
        $layanan_bk = layanan::all();
        $guru = guru::all();
        $siswa = siswa::all();
        return view('siswa.formjadwal',compact('jadwal','walas','layanan_bk','guru','siswa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'layanan_bk_id',
        'bk_id',
        'nama',
        'deskripsi',
        'walas_id',
        'tanggal_konseling',
        'hasil_konseling',
    ]);

    $jadwal = jadwal::create([
        'status' => 'waiting',
        'layanan_bk_id' => $request->input('layanan_bk_id'),
        'bk_id' => $request->input('bk_id'),
        'nama' => $request->input('nama'),
        'deskripsi' => $request->input('deskripsi'),
        'walas_id' => $request->input('walas_id'),
        'tanggal_konseling' => $request->input('tanggal_konseling'),
        'hasil_konseling' => 'waiting',
    ]);
    LogActivity::create([
        'Activity' => auth()->user()->name. ' telah mengubah data jadwal siswa '
]);

    return redirect('/jadwal')->with('success', 'Jadwal created successfully.');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jadwal = jadwal::all();
        $walas = Walas::all();
        $layanan_bk = layanan::all();
        $guru = guru::all();
        $siswa = siswa::all();
        return view('siswa.jadwal',compact('jadwal','walas','layanan_bk','guru','siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
