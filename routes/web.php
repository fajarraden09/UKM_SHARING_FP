<?php

use Illuminate\Support\Facades\Route;

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

// UTAMA 
Route::get('/', function () {
    return view('Utama', [
        "title" => "UKM SHAERING"
    ]);
});

Route::get('/roadmap', function () {
    return view('Utama', [
        "title" => "Dashboard Guru"
    ]);
});


// PRODI
Route::get('/prodi1', function () {
    return view('prodi.informatika', [
        "title" => "Dashboard Guru"
    ]);
});

Route::get('/prodi2', function () {
    return view('prodi.manajemen_informatika', [
        "title" => "Dashboard Guru"
    ]);
});

Route::get('/prodi3', function () {
    return view('prodi.sistem_informasi', [
        "title" => "Dashboard Guru"
    ]);
});

Route::get('/prodi4', function () {
    return view('prodi.teknik_informatika', [
        "title" => "Dashboard Guru"
    ]);
});


// UKM
Route::get('/ukm1', function () {
    return view('ukm.amcc', [
        "title" => "Dashboard Guru"
    ]);
});

Route::get('/ukm2', function () {
    return view('ukm.amo', [
        "title" => "Dashboard Guru"
    ]);
});

Route::get('/ukm3', function () {
    return view('ukm.mayapala', [
        "title" => "Dashboard Guru"
    ]);
});

Route::get('/ukm4', function () {
    return view('ukm.uki', [
        "title" => "Dashboard Guru"
    ]);
});
