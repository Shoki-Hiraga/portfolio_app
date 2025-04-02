<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PythonController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\OutboundLinkController;

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
    return view('main.index');
});

Route::get('/', [PythonController::class, 'index']);

Route::get('/paltek', function () {
    return view('main.index_paltek');
})->name('mp_paltek');

Route::get('/yourmystar', function () {
    return view('main.index_yourmystar');
})->name('mp_yourmystar');

Route::get('/idealump', function () {
    return view('main.index_idealump');
})->name('mp_idealump');

Route::get('/current', function () {
    return view('main.index_current');
})->name('mp_current');

Route::get('/about', function () {
    return view('main.about');
})->name('mp_about');

Route::get('/form', [FormController::class, 'showForm'])->name('form');
Route::post('/form', [FormController::class, 'submitForm']);
Route::get('/out/{key}', [OutboundLinkController::class, 'redirect'])->name('outbound.redirect');
