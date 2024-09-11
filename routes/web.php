<?php

use App\Http\Controllers\User\UserController;
use Illuminate\Http\Request;
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
    return view('welcome');
});


Route::get('/user', [UserController::class, 'getUser']);

Route::get('/user/{id}', function (Request $request, string $id) {
    return 'User '.$id;
});

//可选参数
Route::get('/user/{name?}', function (?string $name = null) {
    return $name;
});

