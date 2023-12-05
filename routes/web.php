<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Box;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|   auuuughhhhh
*/

Route::get("/hello", "WelcomeController@berisalam");

Route::get('/', function () {
    return view('welcome');
});

Route::get('/percobaan', [Box::class, 'coba']);
Route::get('/coba', [Box::class, 'index']);

Route::get("/form",[formController::class,'index']);
Route::post("/form",[formController::class,'action'])->name('form.action');