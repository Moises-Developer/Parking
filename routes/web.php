<?php

use Illuminate\Support\Facades\Route;
use App\Models\Parking;

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

Route::get('/dashboard/1', function () {
    return view('parking.index')->with('parks', Parking::all());
});

Route::get('/dashboard/2', function () {
    return view('parking.park2');
});

Route::get('/dashboard/3', function () {
    return view('parking.park3');
});

Route::get('/dashboard/statistics', function (){
    return view('estadisticas/index')->with('parks', Parking::all());
});
