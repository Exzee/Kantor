<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SampleMasukController;
use App\Http\Controllers\SampleKeluarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use Doctrine\DBAL\Driver\Middleware;
use App\Http\Controllers\CetakController;

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

// Route::get('/welcome', function () {
//     return view('welcome', ['title' => 'Kantor-App']);
// });

// Route::get('home', function () {
//     return view('home');
// });

// Route::get('/dashboard', function () {
//     return view('layout.dashboard');
// });

// Route::get('/', function () {
//     return view('pages.auth.login');
// });


Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Auth::routes();
// Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
// Route::post('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
// Route::get('/register', function (){
//     return view('pages.auth.404');
// });
Route::group( ['middleware' => 'auth'], function(){

    
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);

    
    Route::resource('pegawai', PegawaiController::class);
    //Route get     => pegawai              => index
    //Route get     => pegawai/create       => create
    //Route post    => pegawai              => store
    //Route get     => pegawai/{id}         => show
    //Route put     => pegawai/{id}         => update
    //Route delete  => pegawai/{id}         => delete
    //Route get     => pegawai/{id}/edit    => edit

    //Route::get('/pegawai/{nik}', [PegawaiController::class, 'cetakpegawai']);

    Route::resource('samplemasuk', SampleMasukController::class);
    //Route get     => SampleMasuk              => index
    //Route get     => SampleMasuk/create       => create
    //Route post    => SampleMasuk              => store
    //Route get     => SampleMasuk/{id}         => show
    //Route put     => SampleMasuk/{id}         => update
    //Route delete  => SampleMasuk/{id}         => delete
    //Route get     => SampleMasuk/{id}/edit    => edit

    //Route::get('pegawai/cetakpegawai', [PegawaiController::class, 'cetakpegawai']);

    Route::resource('samplekeluar', SampleKeluarController::class);
    //Route get     => SampleKeluar              => index
    //Route get     => SampleKeluar/create       => create
    //Route post    => SampleKeluar              => store
    //Route get     => SampleKeluar/{id}         => show
    //Route put     => SampleKeluar/{id}         => update
    //Route delete  => SampleKeluar/{id}         => delete
    //Route get     => SampleKeluar/{id}/edit    => edit

    Route::get('/pegawai/{id}/cetak/{nik}', [App\Http\Controllers\CetakController::class, 'cetak_pegawai']);
    Route::get('/samplemasuk/{id}/cetak/{id_sample}', [App\Http\Controllers\CetakController::class, 'cetak_samplemasuk']);
    Route::get('/samplekeluar/{id}/cetak/{id_sample_keluar}', [App\Http\Controllers\CetakController::class, 'cetak_samplekeluar']);

    

});





//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
