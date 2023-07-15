<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\siswa;
use App\Models\Walas;
use App\Models\jadwal;
use App\Models\layanan;
use Illuminate\Http\Request;

class jadwalwController extends Controller
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
        return view('walas.jadwal',compact('jadwal','walas','layanan_bk','guru','siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
