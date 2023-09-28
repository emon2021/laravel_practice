<?php

use App\Http\Controllers\custom_controller\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//__CUSTOM ROUTE__//
Route::get('/',function(){
    return view('home');
});

Route::get('/hashing',[HomeController::class,'hashing'])->name('hashing');
