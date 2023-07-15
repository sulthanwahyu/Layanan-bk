<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\guru;
use App\Models\siswa;
use App\Models\Walas;
use App\Models\LogActivity;
use Illuminate\Http\Request;
use App\Models\petakerawanan;
use App\Models\jeniskerawanan;

class PetaKerawananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $petakerawanan = petakerawanan::all();
        $jeniskerawanan = jeniskerawanan::all();
        $walas = Walas::all();
        $guru = guru::all();
        $siswa = siswa::all();
        return view('guru.petakerawanan',compact('jeniskerawanan','petakerawanan','walas','guru','siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $petakerawanan = petakerawanan::all();
        $jeniskerawanan = jeniskerawanan::all();
        $walas = Walas::all();
        $guru = guru::all();
        $siswa = siswa::all();
        return view('guru.formpeta',compact('jeniskerawanan','petakerawanan','walas','guru','siswa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'jenis_kerawanan_id',
            'nipd_id',
            'walas_id',
            'nama_id',
        ]);
    
        $petakerawanan = petakerawanan::create([
            'jenis_kerawanan_id' => $request->input('jenis_kerawanan_id'),
            'nipd_id' => $request->input('nipd_id'),
            'walas_id' => $request->input('walas_id'),
            'nama_id' => $request->input('nama_id'),
        ]);

        LogActivity::create([
            'Activity' => auth()->user()->name. ' telah mengubah data peta kerawanan bk'
]);

    
        return redirect('/petaguru')->with('success', 'petaguru created successfully.');
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
        $petakerawanan = petakerawanan::all();
        $jeniskerawanan = jeniskerawanan::all();
        $walas = Walas::FindOrFail($id);
        $guru = guru::FindOrFail($id);
        $siswa = siswa::FindOrFail($id);
        return view('guru.editpeta',compact('petakerawanan','walas','guru','siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $petakerawanan = petakerawanan::all();
        $jeniskerawanan = jeniskerawanan::all();
        $walas = Walas::FindOrFail($id);
        $guru = guru::FindOrFail($id);
        $siswa = siswa::FindOrFail($id);

        $request->validate([
            'jenis_kerawanan_id',
            'nama_id',
            'nipd_id',
            'walas_id',
        ]);

       

        $input = $request->all();
        $petakerawanan->update($input);
        $siswa->update($input);
        $walas->update($input);
        $guru->update($input);
        $jeniskerawanan->update($input);

        LogActivity::create([
            'Activity' => auth()->user()->name. ' telah mengubah data peta kerawanan bk'
]);


        return redirect('/petaguru')->with('success', 'peta updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function cetakpeta()
    {
      $petakerawanan = petakerawanan::select('*')
                ->get();
    
      $pdf = PDF::loadView('guru.cetakpeta', ['petakerawanan' => $petakerawanan]);
      return $pdf->download('Laporan-Data-peta.pdf');
    }
}
