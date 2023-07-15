<?php

namespace App\Http\Controllers;
use PDF;
use App\Models\User;
use App\Models\kelas;
use App\Models\Walas;
use App\Models\LogActivity;
use Illuminate\Http\Request;


class walasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $walas = walas::whereHas('user', function ($query) {
            $query->where('role', 'walas');
        })->get();
        
        return view('koor.walas.tablewalas',compact('walas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $walas= Walas::all();
        $kelas = kelas::all();
        return view('koor.walas.formwalas',compact('walas','kelas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name',
            'user_id', 
            'kelas_id', 
            'email',  
            'password',  
        ]);

        $user = User::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'role'=>'walas',
            'password'=>$request->input('password'),
        ]);
        $walas = walas::create([
            'name'=>$request->input('name'),
            'user_id'=>$user->id,
            'kelas_id'=>$request->input('kelas_id'),
            // 'kelas_id'=>$user->id,

        ]);

        LogActivity::create([
            'Activity' => auth()->user()->name. ' telah mengubah data walas'
]);

        

        return redirect('/walas')
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
        $walas= Walas::findOrFail($id);
        $user = User::findOrFail($id);
        $kelas = kelas::all();
        return view('koor.walas.edittablewalas', compact('walas','user','kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name',
            'user_id', 
            'kelas_id', 
            'email',  
            'password', 
        ]);

        LogActivity::create([
            'Activity' => auth()->user()->name. ' telah mengubah data user walas'
]);

        $walas = Walas::findOrFail($id);
        $user = User::findOrFail($id);
        $kelas = kelas::findOrFail($id);
        $input = $request->all();
        $walas->update($input);
        $user->update($input);
        $kelas->update($input);

        return redirect('/walas')
        ->with('toast_success','walas data edit successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $walas = Walas::findOrFail($id);
        $user = User::findOrFail($id);
      $walas->delete();
      $user->delete();

      return redirect('/walas')
      ->with('success','walas data deleted successfully');
    }

    public function cetakwalas()
    {
      $walas = Walas::select('*')
                ->get();
    
      $pdf = PDF::loadView('koor.walas.cetakwalas', ['walas' => $walas]);
      return $pdf->stream('Laporan-Data-walas.pdf');
    }
}
