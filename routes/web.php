<?php

use App\Http\Controllers\FirebaseController;
use App\Http\Controllers\ViewController;
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

Route::get('/', [ViewController::class, 'index']);
Route::get('login', [ViewController::class, 'loginView']);
Route::post('login', [FirebaseController::class, 'login']);
Route::get('register', [ViewController::class, 'registerView']);
Route::post('register', [FirebaseController::class, 'signUp']);

Route::get('test', function (){
  return view('auth/test');
});
