<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\siswa;
use App\Models\Walas;
use App\Models\jadwal;
use App\Models\layanan;
use App\Models\LogActivity;
use Illuminate\Http\Request;

class jadwalgController extends Controller
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
        return view('guru.konseling',compact('jadwal','walas','layanan_bk','guru','siswa'));
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
        'Activity' => auth()->user()->name. ' telah mengubah data guru '
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
        $jadwal= jadwal::findOrFail($id);
        // $user = User::findOrFail($id);
        // $kelas = kelas::all();
        return view('guru.editjadwal', compact('jadwal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $jadwal = jadwal::findOrFail($id);

        $request->validate([
            'deskripsi',
            'tanggal_konseling',
        ]);

        $input = $request->all();
        $jadwal->update($input);

        LogActivity::create([
            'Activity' => auth()->user()->name. ' telah mengubah data guru '
]);

        return redirect('/jadwalguru')->with('success', 'Jadwal updated successfully.');
    }

    public function updateg(Request $request, $id)
    {
        $jadwal = jadwal::findOrFail($id);
    
        if ($jadwal && $jadwal->status === 'waiting' && $jadwal->hasil_konseling === 'waiting') {
            $jadwal->status = 'approved';
            $jadwal->hasil_konseling = 'baik';
            $jadwal->save();
            LogActivity::create([
                'Activity' => auth()->user()->name. ' telah mengubah data guru '
    ]);
            return redirect('/jadwalguru')->with('success', 'Jadwal updated successfully.');
        } else {
            return redirect()->back()->with('message', 'Tidak ada pengajuan yang menunggu persetujuan atau ID pengajuan tidak valid.');
        }
    }
    
    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
