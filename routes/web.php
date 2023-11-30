<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::prefix('')->group(function () {

    Route::get('/login',[AuthController::class,'getLogin'])->name('login');
    Route::post('/login',[AuthController::class,'login'])->name('login');
    Route::post('/logout',[AuthController::class,'logout'])->name('logout');

    Route::group(['middleware' => ['auth:sanctum','role:admin']], static function () {
   Route::resource('product', ProductController::class);
   Route::resource('user', UserController::class);
   Route::get('/',[DashboardController::class,'getDashboard'])->name('dashboard');
  

});

});

   



// Route::get('/', function () {
//     return view('dashboard');
// });
