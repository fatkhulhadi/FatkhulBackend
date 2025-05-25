<?php
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\AgamaController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\StatuspegawaiController;
use App\Http\Controllers\JenispegawaiController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\JeniskelaminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/halo', function () {
    return view('welcome');
});
Route::get('/fatkhul', function () {
    return view('haloo');
});
Route::get('/fatkhul', function () {
    return view('haloo');
});
Route::get('/fatkhul', function () {
    return view('haloo');
});

// Route::get('/book', [BookController::class,'index']);
// Route::get('/page', [PageController::class,'index']);
// Route::get('/master',[MasterController::class,'index']);
// Route::get('/kontak',[KontakController::class,'index']);
// Route::get('/home',[HomeController::class,'home']);

// //CRUD AGAMA
// Route::get('/form', [AgamaController::class, 'create'])->name('agama.create');
// Route::get('/table', [AgamaController::class, 'index'])->name('agama.index');
// Route::post('/table', [AgamaController::class, 'store'])->name('agama.store');
// Route::get('/agama{id}', [AgamaController::class, 'edit'])->name('agama.edit');
// Route::put('/table/{id}', [AgamaController::class, 'update'])->name('agama.update');
// Route::delete('/table/{id}', [AgamaController::class, 'destroy'])->name('agama.destroy');

//CRUD PEGAWAI
// Route::get('/form-pegawai', [PegawaiController::class, 'create'])->name('pegawai.create');
// Route::get('/table-pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');
// Route::post('/table-pegawai', [PegawaiController::class, 'store'])->name('pegawai.store');
// Route::get('/pegawai{id}', [PegawaiController::class, 'edit'])->name('pegawai.edit');
// Route::put('/table-pegawai/{id}', [PegawaiController::class, 'update'])->name('pegawai.update');
// Route::delete('/table-pegawai/{id}', [PegawaiController::class, 'destroy'])->name('pegawai.destroy');

// //CRUD STATUS PEGAWAI
// Route::get('/form-statuspegawai', [StatuspegawaiController::class, 'create'])->name('statuspegawai.create');
// Route::get('/table-statuspegawai', [StatuspegawaiController::class, 'index'])->name('statuspegawai.index');
// Route::post('/table-statuspegawai', [StatuspegawaiController::class, 'store'])->name('statuspegawai.store');
// Route::get('/statuspegawai{id}', [StatuspegawaiController::class, 'edit'])->name('statuspegawai.edit');
// Route::put('/table-statuspegawai/{id}', [StatuspegawaiController::class, 'update'])->name('statuspegawai.update');
// Route::delete('/table-statuspegawai/{id}', [StatuspegawaiController::class, 'destroy'])->name('statuspegawai.destroy');

// //CRUD JENIS PEGAWAI
// Route::get('/form-jenispegawai', [JenispegawaiController::class, 'create'])->name('jenispegawai.create');
// Route::get('/table-jenispegawai', [JenispegawaiController::class, 'index'])->name('jenispegawai.index');
// Route::post('/table-jenispegawai', [JenispegawaiController::class, 'store'])->name('jenispegawai.store');
// Route::get('/jenispegawai{id}', [JenispegawaiController::class, 'edit'])->name('jenispegawai.edit');
// Route::put('/table-jenispegawai/{id}', [JenispegawaiController::class, 'update'])->name('jenispegawai.update');
// Route::delete('/table-jenispegawai/{id}', [JenispegawaiController::class, 'destroy'])->name('jenispegawai.destroy');

// //CRUD PENDIDIKAN PEGAWAI
// Route::get('/form-pendidikan', [PendidikanController::class, 'create'])->name('pendidikan.create');
// Route::get('/table-pendidikan', [PendidikanController::class, 'index'])->name('pendidikan.index');
// Route::post('/table-pendidikan', [PendidikanController::class, 'store'])->name('pendidikan.store');
// Route::get('/pendidikan{id}', [PendidikanController::class, 'edit'])->name('pendidikan.edit');
// Route::put('/table-pendidikan/{id}', [PendidikanController::class, 'update'])->name('pendidikan.update');
// Route::delete('/table-pendidikan/{id}', [PendidikanController::class, 'destroy'])->name('pendidikan.destroy');

// //CRUD  JENIS KELAMINPEGAWAI
// Route::get('/form-jeniskelamin', [JeniskelaminController::class, 'create'])->name('jeniskelamin.create');
// Route::get('/table-jeniskelamin', [JeniskelaminController::class, 'index'])->name('jeniskelamin.index');
// Route::post('/table-jeniskelamin', [JeniskelaminController::class, 'store'])->name('jeniskelamin.store');
// Route::get('/jeniskelamin{id}', [JeniskelaminController::class, 'edit'])->name('jeniskelamin.edit');
// Route::put('/table-jeniskelamin/{id}', [JeniskelaminController::class, 'update'])->name('jeniskelamin.update');
// Route::delete('/table-jeniskelamin/{id}', [JeniskelaminController::class, 'destroy'])->name('jeniskelamin.destroy');

//Login

Route::get('/login', [AuthController::class, 'index'])->name('apps2023.login'); 
Route::post('/logout', [AuthController::class, 'logout'])->name('logout'); 
Route::get('/register', [AuthController::class, 'create'])->name('apps2023.createregister');
Route::post('/adduser', [AuthController::class, 'store']); 
Route::post('/proseslogin', [AuthController::class, 'authuser']);

//Grouping

Route::middleware(['auth'])->group(function () {
   //CRUD  JENIS KELAMINPEGAWAI
Route::get('/form-jeniskelamin', [JeniskelaminController::class, 'create'])->name('jeniskelamin.create');
Route::get('/table-jeniskelamin', [JeniskelaminController::class, 'index'])->name('jeniskelamin.index');
Route::post('/table-jeniskelamin', [JeniskelaminController::class, 'store'])->name('jeniskelamin.store');
Route::get('/jeniskelamin{id}', [JeniskelaminController::class, 'edit'])->name('jeniskelamin.edit');
Route::put('/table-jeniskelamin/{id}', [JeniskelaminController::class, 'update'])->name('jeniskelamin.update');
Route::delete('/table-jeniskelamin/{id}', [JeniskelaminController::class, 'destroy'])->name('jeniskelamin.destroy');
  //Agama
Route::get('/form', [AgamaController::class, 'create'])->name('agama.create');
Route::get('/table', [AgamaController::class, 'index'])->name('agama.index');
Route::post('/table', [AgamaController::class, 'store'])->name('agama.store');
Route::get('/agama{id}', [AgamaController::class, 'edit'])->name('agama.edit');
Route::put('/table/{id}', [AgamaController::class, 'update'])->name('agama.update');
Route::delete('/table/{id}', [AgamaController::class, 'destroy'])->name('agama.destroy');
   //Pegawai
Route::get('/form-pegawai', [PegawaiController::class, 'create'])->name('pegawai.create');
Route::get('/table-pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');
Route::post('/table-pegawai', [PegawaiController::class, 'store'])->name('pegawai.store');
Route::get('/pegawai{id}', [PegawaiController::class, 'edit'])->name('pegawai.edit');
Route::put('/table-pegawai/{id}', [PegawaiController::class, 'update'])->name('pegawai.update');
Route::delete('/table-pegawai/{id}', [PegawaiController::class, 'destroy'])->name('pegawai.destroy');

//CRUD STATUS PEGAWAI
Route::get('/form-statuspegawai', [StatuspegawaiController::class, 'create'])->name('statuspegawai.create');
Route::get('/table-statuspegawai', [StatuspegawaiController::class, 'index'])->name('statuspegawai.index');
Route::post('/table-statuspegawai', [StatuspegawaiController::class, 'store'])->name('statuspegawai.store');
Route::get('/statuspegawai{id}', [StatuspegawaiController::class, 'edit'])->name('statuspegawai.edit');
Route::put('/table-statuspegawai/{id}', [StatuspegawaiController::class, 'update'])->name('statuspegawai.update');
Route::delete('/table-statuspegawai/{id}', [StatuspegawaiController::class, 'destroy'])->name('statuspegawai.destroy');

//CRUD JENIS PEGAWAI
Route::get('/form-jenispegawai', [JenispegawaiController::class, 'create'])->name('jenispegawai.create');
Route::get('/table-jenispegawai', [JenispegawaiController::class, 'index'])->name('jenispegawai.index');
Route::post('/table-jenispegawai', [JenispegawaiController::class, 'store'])->name('jenispegawai.store');
Route::get('/jenispegawai{id}', [JenispegawaiController::class, 'edit'])->name('jenispegawai.edit');
Route::put('/table-jenispegawai/{id}', [JenispegawaiController::class, 'update'])->name('jenispegawai.update');
Route::delete('/table-jenispegawai/{id}', [JenispegawaiController::class, 'destroy'])->name('jenispegawai.destroy');

//CRUD PENDIDIKAN PEGAWAI
Route::get('/form-pendidikan', [PendidikanController::class, 'create'])->name('pendidikan.create');
Route::get('/table-pendidikan', [PendidikanController::class, 'index'])->name('pendidikan.index');
Route::post('/table-pendidikan', [PendidikanController::class, 'store'])->name('pendidikan.store');
Route::get('/pendidikan{id}', [PendidikanController::class, 'edit'])->name('pendidikan.edit');
Route::put('/table-pendidikan/{id}', [PendidikanController::class, 'update'])->name('pendidikan.update');
Route::delete('/table-pendidikan/{id}', [PendidikanController::class, 'destroy'])->name('pendidikan.destroy');

//Home
Route::get('/book', [BookController::class,'index']);
Route::get('/page', [PageController::class,'index']);
Route::get('/master',[MasterController::class,'index']);
Route::get('/kontak',[KontakController::class,'index']);
Route::get('/home',[HomeController::class,'home']);

});