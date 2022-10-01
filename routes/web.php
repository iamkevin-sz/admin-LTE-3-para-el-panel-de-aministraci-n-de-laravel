<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;//estamos poniendo en una sola fila los controladores ya que estan en una misma carpeta
use App\Http\Controllers\Admin\profileController;
use App\Http\Controllers\Admin\UserController;

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

Route::get('/admin/login', [AuthController::class, 'getLogin'])->name('getLogin');
Route::post('/admin/login', [AuthController::class, 'postLogin'])->name('postLogin');


Route::group(['middleware' => ['admin_auth']],function (){

    Route::get('/admin/dashboard', [profileController::class, 'dashboard'])->name('dashboard');
    Route::get('/admin/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/admin/logout', [profileController::class, 'logout'])->name('logout');

});




