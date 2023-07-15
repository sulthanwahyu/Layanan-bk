<?php

namespace App\Http\Controllers;
use PDF;
use App\Models\guru;
use App\Models\User;
use App\Models\siswa;
use App\Models\Walas;

use App\Models\LogActivity;
use Illuminate\Http\Request;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return view('koor.tablekoor',compact('user'));
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
        $siswa = siswa::findOrFail($id);
        $user = User::findOrFail($id);
        $walas = Walas::findOrFail($id);
        $guru = guru::findOrFail($id);
      $siswa->delete();
      $user->delete();
      $walas->delete();
      $guru->delete();

      LogActivity::create([
        'Activity' => auth()->user()->name. ' telah mengubah data Admin'
]);

      return redirect('/tablekoor')
      ->with('success','siswa data deleted successfully');
    }

    public function cetakuser()
{
  $user = User::select('*')
            ->get();

  $pdf = PDF::loadView('koor.cetakuser', ['user' => $user]);
  return $pdf->download('Laporan-Data-user.pdf');
}
}
