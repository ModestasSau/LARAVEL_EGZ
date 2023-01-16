<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\PrekesController;
use App\Http\Controllers\KategorijosController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

// Neregistruotų vartotojų route
Route::get('/', [HomeController::class, 'gauti_latest']);
Route::get('/prekes', [HomeController::class, 'index'])->name('prekes');
Route::get('/prekes/rodyti/{preke}', [HomeController::class, 'rodyti_prekes_info'])->name('prekes-info');
Route::get('/prekes/{id}', [HomeController::class, 'prekes_pagal_kategorija']);
Route::get('/kontaktai', function () {return view('kontaktai');})->name('kontaktai');
Route::get('/paieska', [HomeController::class, 'ieskoti'])->name('search');


// Admin grupė, /admin/../..    reikalinga admin prieiga
Route::prefix('/admin')->group(function () {
    Route::middleware('authadmin')->group(function () {

        // Admin pradinis puslapis
        Route::get('/', function () {return view('adm.index');})->name('index');

        // Admin vartotojo valdymo routes
        Route::get('/vartotojai', [UserController::class, 'index'])->name('user-index');
        Route::get('/vartotojai/kurti', [UserController::class, 'create'])->name('user-create');
        Route::post('/vartotojai/store/', [UserController::class, 'store'])->name('user-store');
        Route::get('/vartotojai/redaguoti/{user}', [UserController::class, 'edit'])->name('user-edit');
        Route::put('/vartotojai/redaguoti/{user}', [UserController::class, 'update'])->name('user-update');
        Route::delete('/vartotojai/{user}', [UserController::class, 'destroy'])->name('user-destroy');

        // Admin asmenino profilio redagavimas.
        Route::get('/profilis', [AdminProfileController::class, 'edit'])->name('profile.admEdit');
        Route::patch('/profilis', [AdminProfileController::class, 'update'])->name('profile.admUpdate');
        Route::delete('/profilis', [AdminProfileController::class, 'destroy'])->name('profile.admDestroy');

        // Admin prekių valdymo routes
        Route::get('/prekes', [PrekesController::class, 'index'])->name('prekes-index');
        Route::get('/prekes/kurti', [PrekesController::class, 'create'])->name('prekes-create');
        Route::post('/prekes/store/', [PrekesController::class, 'store'])->name('prekes-store');
        Route::get('/prekes/rodyti/{preke}', [PrekesController::class, 'show'])->name('prekes-show');
        Route::get('/prekes/redaguoti/{preke}', [PrekesController::class, 'edit'])->name('prekes-edit');
        Route::put('/prekes/redaguoti/{preke}', [PrekesController::class, 'update'])->name('prekes-update');
        Route::delete('/prekes/{preke}', [PrekesController::class, 'destroy'])->name('prekes-destroy');

        // Admin kategorijų valdymo routes
        Route::get('/kategorijos', [KategorijosController::class, 'index'])->name('kategorijos-index');
        Route::get('/kategorijos/kurti', [KategorijosController::class, 'create'])->name('kategorijos-create');
        Route::post('/kategorijos/store/', [KategorijosController::class, 'store'])->name('kategorijos-store');
        Route::get('/kategorijos/show/{kategorija}', [KategorijosController::class, 'show'])->name('kategorijos-show');
        Route::get('/kategorijos/redaguoti/{kategorija}', [KategorijosController::class, 'edit'])->name('kategorijos-edit');
        Route::put('/kategorijos/redaguoti/{kategorija}', [KategorijosController::class, 'update'])->name('kategorijos-update');
        Route::delete('/kategorijos/{kategorija}', [KategorijosController::class, 'destroy'])->name('kategorijos-destroy');
    });
});

// Registruotų vartotojų, kurie patvirtinę savo el. pašto adresą route.
Route::middleware('auth', 'verified')->group(function () {

    

    // profilio redagavimas
    Route::get('/profilis', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profilis', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profilis', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // krepšelis
    Route::get('/krepselis', [CartController::class, 'index'])->name('krepselis');
    route::get('/krepselis/trinti/{id}', [CartController::class, 'ismestiPreke'])->name('trintiPreke');
    Route::post('/krepselis/prideti-preke', [CartController::class, 'prideti_i_krepseli'])->name("prideti-i-krepseli");
    route::get('/krepselis/{id}/{k}', [CartController::class, 'keistiKieki']);

    // pdf generavimas
    Route::get('/krepselis/pdf', [PDFController::class, 'index'])->name('pdf');
});

require __DIR__ . '/auth.php';
