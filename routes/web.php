<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\guruController;
use App\Http\Controllers\userController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\siswaController;
use App\Http\Controllers\walasController;
use App\Http\Controllers\jadwalController;
use App\Http\Controllers\jadwalgController;
use App\Http\Controllers\jadwalwController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PetaKerawananController;
use App\Http\Controllers\PetaKerawananwController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/dbkoor', function () {
    return view('koor.dashboard');
});

Route::get('/dbguru', function () {
    return view('guru.dashboard');
});

Route::get('/dbsiswa', function () {
    return view('siswa.dashboard');
});

Route::get('/dbwalas', function () {
    return view('walas.dashboard');
});

Route::get('/editguru', [ProfileController::class,'showProfile'])->name('guru.edit');
Route::get('/editsiswa', [ProfileController::class,'showProfilesiswa'])->name('siswa.edit');
Route::get('/editkoor', [ProfileController::class,'showProfilekoor'])->name('koor.edit');
Route::get('/editwalas', [ProfileController::class,'showProfilewalas'])->name('walas.edit');

// Route::get('/tablekoor', function () {
//     return view('koor.tablekoor');
// });

Route::get('/tablesiswa', function () {
    return view('koor.tablesiswa');
});

Route::get('/tableguru', function () {
    return view('koor.tableguru');
});

// Route::get('/tablewalas', function () {
//     return view('koor.tablewalas');
// });

Route::get('/profilesiswa', function () {
    return view('siswa.profile');
});

Route::get('/profilewalas', function () {
    return view('walas.profile');
});

Route::get('/profilekoor', function () {
    return view('koor.profile');
});


Route::get('/profileguru', function () {
    return view('guru.profile');
});

// Route::get('/formisijadwal', function () {
//     return view('siswa.formisijadwal');
// });


Route::get('/tablekoor',[userController::class,'index']);
Route::delete('/user/destroy/{id}',[userController::class,'destroy']); 


// Route::get('/tablewalas',[walasController::class,'index']);


Route::get('/siswa',[siswaController::class,'index']);
Route::get('/add_siswa',[siswaController::class,'create']);
Route::post('/add',[siswaController::class,'store']);
Route::get('/siswa/edit/{id}',[siswaController::class,'edit']);
Route::put('/siswa/up/{id}',[siswaController::class,'update']);
Route::delete('/siswa/destroy/{id}',[siswaController::class,'destroy']); 

Route::get('/guru',[guruController::class,'index']);
Route::get('/add_guru',[guruController::class,'create']);
Route::post('/add_bkk',[guruController::class,'store']);
Route::get('/guru/edit/{id}',[guruController::class,'edit']);
Route::put('/guru/up/{id}',[guruController::class,'update']);
Route::delete('/guru/destroy/{id}',[guruController::class,'destroy']); 

Route::get('/walas',[walasController::class,'index']);
Route::get('/walas_form',[walasController::class,'create']);
Route::post('/add_walas',[walasController::class,'store']);
Route::get('/walas/edit/{id}',[walasController::class,'edit']);
Route::put('/walas/up/{id}',[walasController::class,'update']);
Route::delete('/walas/destroy/{id}',[walasController::class,'destroy']); 

Route::get('/kelas', [KelasController::class, 'index']);


// Route::get('/editguru', function () {
//     return view('guru.edit');
// });

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard',[DashboardController::class,'index']);
});

Route::get('user/cetak', [userController::class, 'cetakuser'])->name('cetakuser')->middleware('auth');

Route::get('siswa/cetak', [siswaController::class, 'cetaksiswa'])->name('cetaksiswa')->middleware('auth');

Route::get('guru/cetak', [guruController::class, 'cetakguru'])->name('cetakguru')->middleware('auth');

Route::get('walas/cetak', [walasController::class, 'cetakwalas'])->name('cetakwalas')->middleware('auth');

Route::get('peta/cetak', [PetaKerawananController::class, 'cetakpeta'])->name('cetakpeta')->middleware('auth');

Route::get('petaw/cetak', [PetaKerawananwController::class, 'cetakpetaw'])->name('cetakpetaw')->middleware('auth');






Route::get('/jadwal',[jadwalController::class,'index']);
Route::get('/add/jadwal',[jadwalController::class,'create']);
Route::post('/add_jadwal',[jadwalController::class,'store']);



Route::get('/jadwalguru',[jadwalgController::class,'index']);
Route::get('/jadwalguru/edit/{id}',[jadwalgController::class,'edit']);
Route::put('/jadwalguru/up/{id}', [jadwalgController::class,'update']);
Route::put('/jadwalguruu/{id}', [jadwalgController::class,'updateg']);

Route::get('/jadwalwalas',[jadwalwController::class,'index']);

Route::get('/petaguru',[PetaKerawananController::class,'index']);
Route::get('/add/peta',[PetaKerawananController::class,'create']);
Route::post('/add_peta',[PetaKerawananController::class,'store']);
Route::get('/petaguru/edit/{id}',[PetaKerawananController::class,'edit']);
Route::put('/petaguru/up/{id}', [PetaKerawananController::class,'update']);

Route::get('/petawalas',[PetaKerawananwController::class,'index']);
Route::get('/add/petaw',[PetaKerawananwController::class,'create']);
Route::post('/add_petaw',[PetaKerawananwController::class,'store']);
Route::get('/petawalas/edit/{id}',[PetaKerawananwController::class,'edit']);
Route::put('/petawalas/up/{id}', [PetaKerawananwController::class,'update']);




