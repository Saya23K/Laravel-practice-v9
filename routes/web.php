<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ProfileController; 


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


Route::controller(NewsController::class)->prefix('admin')->group(function() {

    Route::get('/news/create', 'add');

});

Route::controller(ProfileController::class)->prefix('admin')->group(function() {

    Route::get('/profile/create', 'add');
    Route::get('/profile/edit', 'edit');

});