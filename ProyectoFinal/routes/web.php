<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DefaultController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CicleController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', function (){
    return view('default.home');
});

Route::get('/', [DefaultController::class, 'home'])->name('home');
//// USERS
Route::get('/user/list', [UserController::class, 'list'])->name('user_list');

Route::match(['get', 'post'], '/user/edit/{id}', [UserController::class, 'edit'])->name('user_edit');

Route::match(['get', 'post'], '/user/new', [UserController::class, 'new'])->name('user_new');

Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('user_delete');


//// CICLES
Route::get('/cicles/list', [CicleController::class, 'list'])->name('cicle_list');

Route::match(['get', 'post'], '/cicle/edit/{id}', [CicleController::class, 'edit'])->name('cicle_edit');

Route::match(['get', 'post'], '/cicle/new', [CicleController::class, 'new'])->name('cicle_new');

Route::get('/cicle/delete/{id}', [CicleController::class, 'delete'])->name('cicle_delete');
