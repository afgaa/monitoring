<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeganganController;
use App\Http\Controllers\TekananController;
use App\Http\Controllers\ArusController;
use App\Http\Controllers\DayaController;
use App\Http\Controllers\PowerFaktorController;
use App\Http\Controllers\HarmonisaController;
use App\Http\Controllers\TemperaturController;
use App\Http\Controllers\TemperatureController;
use App\Http\Controllers\HArusController;
use App\Http\Controllers\HTeganganController;
use App\Http\Controllers\HariController;
use App\Http\Controllers\DMCRController;
use App\Http\Controllers\OtherController;



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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/tegangan', [TeganganController::class, 'tegangan'])->name('tegangan');
Route::get('/pressure', [TekananController::class, 'tekanan'])->name('tekanan');
Route::get('/harus', [HArusController::class, 'harus'])->name('harus');
Route::get('/htegangan', [HTeganganController::class, 'htegangan'])->name('htegangan');
Route::get('/dmcr', [DMCRController::class, 'dmcr'])->name('dmcr');
Route::get('/other', [OtherController::class, 'other'])->name('other');
Route::get('/arus', [ArusController::class, 'arus'])->name('arus');
Route::get('/daya', [DayaController::class, 'daya'])->name('daya');
Route::get('/powerfaktor', [PowerFaktorController::class, 'powerfaktor'])->name('powerfaktor');
Route::get('/harmonisa', [HarmonisaController::class, 'harmonisa'])->name('harmonisa');
Route::get('/temperatur', [TemperaturController::class, 'temperatur'])->name('temperatur');
Route::get('/temperature', [TemperatureController::class, 'temperature'])->name('temperature');
Route::get('/hari', [HariController::class, 'hari'])->name('hari');


Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
});

