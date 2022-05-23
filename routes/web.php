<?php

use App\Http\Controllers\sembakoController;
use App\Models\sembako;
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
    return view('sembako.index');
})->name('utama');

Route::group(['middleware=>auth'], function (){
//Route untuk sembako
Route::get('data-sembako', [sembakoController::class, 'index']);
Route::get('add-sembako', [sembakoController::class, 'create']);
Route::post('simpan-sembako', [sembakoController::class, 'store']);
Route::delete('delete-sembako/{id}', [sembakoController::class, 'destroy'])->name('delete.sembako');
Route::get('edit-sembako/{id}', [sembakoController::class, 'edit'])->name('edit.sembako');
Route::patch('update-sembako/{sembako}', [sembakoController::class, 'update'])->name('update.sembako');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
