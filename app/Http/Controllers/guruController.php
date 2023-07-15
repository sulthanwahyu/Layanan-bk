<?php

namespace App\Http\Controllers;
use PDF;
use App\Models\guru;
use App\Models\User;
use App\Models\kelas;
use App\Models\LogActivity;
use Illuminate\Http\Request;

class guruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guru = guru::whereHas('user', function ($query) {
            $query->where('role', 'guru');
        })->get();
        
        return view('koor.guru.tableguru',compact('guru'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $guru= guru::all();
        $kelas = kelas::all();
        return view('koor.guru.formguru',compact('guru','kelas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_bk',
            'user_id', 
            'kelas_id', 
            'email',  
            'password',  
        ]);

        $user = User::create([
            'name'=>$request->input('nama_bk'),
            'email'=>$request->input('email'),
            'role'=>'guru',
            'password'=>$request->input('password'),
        ]);
        $guru = guru::create([
            'nama_bk'=>$request->input('nama_bk'),
            'user_id'=>$user->id,
            // 'kelas_id'=>$kelas->id,
            'kelas_id'=>$request->input('kelas_id'),

        ]);

        LogActivity::create([
            'Activity' => auth()->user()->name. ' telah mengubah data guru '
]);

        

        return redirect('/guru')
                ->with('success','student data created succesfully');
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
        $guru= guru::findOrFail($id);
        $user = User::findOrFail($id);
        $kelas = kelas::all();
        return view('koor.guru.edittableguru', compact('guru','user','kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_bk',
            'user_id', 
            'kelas_id',
            'email',  
            'password', 
        ]);
       

        $guru = guru::findOrFail($id);
        $kelas = kelas::findOrFail($id);
        $user = User::findOrFail($id);
        $input = $request->all();
        $guru->update($input);
        $user->update($input);
        $kelas->update($input);
        
        LogActivity::create([
            'Activity' => auth()->user()->name. ' telah mengubah data guru '
]);

        return redirect('/guru')
        ->with('toast_success','guru data edit successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $guru = guru::findOrFail($id);
        $user = User::findOrFail($id);
      $guru->delete();
      $user->delete();

      return redirect('/guru')
      ->with('success','guru data deleted successfully');
    }

    public function cetakguru()
    {
      $guru = guru::select('*')
                ->get();
    
      $pdf = PDF::loadView('koor.guru.cetakguru', ['guru' => $guru]);
      return $pdf->stream('Laporan-Data-guru.pdf');
    }
}
