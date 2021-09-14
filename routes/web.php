<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function(){
    return view('front.index');
});
Route::get('/infrared-technology', function(){
    return view('front.infrared-technology');
});
Route::get('/benefites-of-infrared-yoga', function(){
    return view('front.benefites-of-infrared-yoga');
});
Route::get('/faq', function(){
    return view('front.faq');
});
Route::get('/teachers-training', function(){
    return view('front.teachers-training');
});
Route::get('/franchise', function(){
    return view('front.franchise');
});
Route::get('/about', function(){
    return view('front.about');
});
Route::get('/schedule', function(){
    return view('front.schedule');
});

Route::get('/registration', [AuthController::class, 'registration']);

Route::post('/register', [AuthController::class, 'register'])->name('register');

// Route::get('/login', [AuthController::class, 'login']);

Route::post('/login', [AuthController::class, 'loggedin'])->name('loggedin');

Route::get('/logout', [AuthController::class, 'logout']);

// Route::group(['middleware' => ['auth:sanctrum']], function(){
	
// });