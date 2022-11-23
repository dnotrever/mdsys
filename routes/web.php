<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\UserController;
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
    return redirect('login');
});

Route::middleware('auth', 'verified')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    });

    Route::get('/patient/insert', function () {
        return view('patient.insert');
    });

    Route::get('/patient/search', function () {
        return view('patient.search');
    });

    Route::post('/patient/insert', [PatientController::class, 'store']);

    Route::get('/patient/{id}', [PatientController::class, 'show']);

    Route::put('/patient/update/{id}', [PatientController::class, 'update']);

    Route::get('/patient/search', [PatientController::class, 'search']);
    
});

require __DIR__.'/auth.php';
