<?php

namespace App\Http\Controllers;
use App\Models\kelas;
use App\Models\siswa;
use App\Models\User;
use PDF;
use Illuminate\Http\Request;
use App\Models\LogActivity;

class siswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = siswa::whereHas('user', function ($query) {
            $query->where('role', 'siswa');
        })->get();

        // $siswa = siswa::withTrashed()->get();

        return view('koor.siswa.tablesiswa',compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $siswa= siswa::all();
        $kelas = kelas::all();
        
        return view('koor.siswa.formkoor',compact('kelas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nipd',
            'user_id',
            'kelas_id',
            'nama_siswa',
            'ttl',  
            'email',  
            'password',  
            'jenis_kelamin',
        ]);

        $user = User::create([
            'name'=>$request->input('nama_siswa'),
            'email'=>$request->input('email'),
            'role'=>'siswa',
            'password'=>$request->input('password'),
        ]);
        $siswa = siswa::create([
            'nipd'=>$request->input('nipd'),
            'nama_siswa'=>$request->input('nama_siswa'),
            'ttl'=>$request->input('ttl'),
            'jenis_kelamin'=>$request->input('jenis_kelamin'),
            'user_id'=>$user->id,
            'kelas_id'=>$request->input('kelas_id'),    
            // 'kelas_id'=>$siswa->id,
        ]);
        LogActivity::create([
            'Activity' => auth()->user()->name. ' telah mengubah data user siswa'
]);


      

        

        return redirect('/siswa')
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
        $siswa= siswa::findOrFail($id);
        $user = User::findOrFail($id);
        $kelas = kelas::all();
        return view('koor.siswa.edittablesis', compact('siswa','user','kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nipd',
            'user_id',
            'kelas_id',
            'nama_siswa',
            'ttl',  
            'email',  
            'password',  
            'jenis_kelamin',
        ]);


        $siswa = siswa::findOrFail($id);
        $user = User::findOrFail($id);
        $kelas = kelas::findOrFail($id);
        $input = $request->all();
        $siswa->update($input);
        $user->update($input);
        $kelas->update($input);

        
        LogActivity::create([
            'Activity' => auth()->user()->name. ' telah mengubah data user siswa'
]);

        return redirect('/siswa')
        ->with('toast_success','Siswa data edit successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $siswa = siswa::findOrFail($id);
        $user = User::findOrFail($id);
        // $kelas = kelas::findOrFail($id);
      $siswa->delete();
      $user->delete();

      LogActivity::create([
        'Activity' => auth()->user()->name. ' telah menghapus data user siswa'
]);
    //   $kelas->delete();

      return redirect('/siswa')
      ->with('success','siswa data deleted successfully');
    }

    public function cetaksiswa()
    {
      $siswa = siswa::select('*')
                ->get();
    
      $pdf = PDF::loadView('koor.siswa.cetaksiswa', ['siswa' => $siswa]);
      return $pdf->download('Laporan-Data-siswa.pdf');
    }
}
