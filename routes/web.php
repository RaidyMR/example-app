<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmsController;
use App\Http\Controllers\DataController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web rout  es for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    echo "Hello World 123";
});

Route::get('tentang', function () {

    $nama = ["Ujang", "Ucup", "Dimas"];
    $nim = ["105219004", "105219009", "105219013"];
    $nilai = [79, 84, 86];

    return view('about', compact('nama', 'nim', 'nilai'));
});

Route::get('/test', [DataController::class, 'show']);

// Route::get('/films', [FilmsController::class, 'index'])->name('films.index');
// Route::post('/films', [FilmsController::class, 'store'])->name('films.store');


Route::get('/tutorial', function () {

    $nama = ["A", "B", "C", "D", "E"];
    return view('tutorial', compact('nama'));
});
