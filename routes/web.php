<?php

use App\Http\Controllers\admin\SupportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\SiteController;

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

Route::get('supports', [SupportController::class, 'index'])->name('supports.index');


Route::get('/', function(){

    return view('welcome');

});
