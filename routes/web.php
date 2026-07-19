<?php

use App\Models\Kematian;
use App\Http\Controllers\Jemaat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\JemaatController;
use App\Http\Controllers\KematianController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RenunganController;
use App\Http\Controllers\PernikahanController;
use App\Models\Renungan;

// Jemaat Route
Route::get('/', function () {return view('dashboard');});
Route::get('/dashboard', function () {return view('dashboard');});
Route::get('/informasi', [EventController::class,'index']);
Route::get('/renungan', [RenunganController::class,'show']);
Route::get('/renungan/{renungan:id}',[RenunganController::class,'showDetail']);
Route::get('/diakonia', function () {return view('diakonia');});
Route::get('/pernikahan', function () {return view('pernikahan');});
Route::post('/pernikahan/submit',[PernikahanController::class,"insert"])->name("pernikahan.post");
Route::get('/kematian', function () {return view('kematian');});
Route::get('/pokokdoa', function () {return view('pokokdoa');});
Route::get('/konseling', function () {return view('konseling');});


Route::post('/kematian',[KematianController::class, "store"])->name('kematian.store');
//Admin Route 
Route::get('/login',[AuthController::class,'login'])->name("login");
Route::post('/login',[AuthController::class,"loginPost"])->name("login.post");

Route::middleware('auth')->group(function () {

    Route::post('logout',[AuthController::class,"logout"])->name("logout");

    Route::get('/home/admin',[AdminController::class,'home'])->name("admin.index");
    Route::get('/registrasi',[RegisterController::class,'register'])->name("registrasi");
    Route::post('/registrasi', [RegisterController::class,"regisPost"])->name('reg.post');
    // crud jemaat
    Route::get('/jemaat',[JemaatController::class,'show'])->name("show.data");
    Route::get('/jemaat/add',[JemaatController::class, 'index']);
    Route::post('/jemaat/add',[JemaatController::class,'store'])->name('jemaatAdd');
    Route::put('/jemaat/edit/{id}', [JemaatController::class, 'edit'])->name('jemaat.edit');
    Route::delete('/jemaat/delete/{id}', [JemaatController::class, 'destroy'])->name('jemaat.delete');
    Route::put('/jemaat/update/{id}', [JemaatController::class, 'update'])->name('jemaat.update');
    
    Route::get('/event/admin', [EventController::class, 'index']);
    Route::get('/admin/addevent',[EventController::class,'view']);
    // Route::get('/event/view/{pernikahan:id}', [PernikahanController::class, 'show']);
    
    Route::get('/pernikahan/admin', [PernikahanController::class, 'view'])->name('pernikahan.view');
    Route::get('/pernikahan/view/{pernikahan:id}', [PernikahanController::class, 'show']);

    Route::get('/kematian/show',[KematianController::class,'show']);
    Route::get('/admin/renungan', [RenunganController::class,'index'])->name('renungan.index');
    Route::post('/admin/renungan', [RenunganController::class,'store'])->name('renungan.add');

    Route::post("/admin/addevent", [EventController::class, 'store'])->name('event.add');
    Route::get('/admin/event',[EventController::class, 'show'])->name('event.show');    
    Route::put('/admin/event/edit/{id}', [EventController::class, 'edit'])->name('event.edit');
    Route::delete('/admin/event/delete/{id}', [EventController::class, 'destroy'])->name('event.delete');
    Route::put('/admin/event/update/{id}', [EventController::class, 'update'])->name('event.update');
    
    
});
Route::get('/event/admin', [EventController::class, 'view'])->name('event.view');
Route::middleware("auth")->group(function(){
    Route::view("/admin","admin.index")->name("index");
});