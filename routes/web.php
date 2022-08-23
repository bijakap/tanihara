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
Route::get('login', [ViewController::class, 'loginView'])->name('login');
Route::post('login', [FirebaseController::class, 'login']);
Route::post('loginByProvider', [FirebaseController::class, 'getLoginData']);
Route::get('register', [ViewController::class, 'registerView']);
Route::post('register', [FirebaseController::class, 'signUp']);

route::middleware(['fireauth'])->group(function() {
  Route::get('home', [ViewController::class, 'viewHome']);
  Route::get('measure', [ViewController::class, 'viewMeasure']);
  Route::get('history', [ViewController::class, 'viewHistory']);
  Route::get('calculator', [ViewController::class, 'viewCalculator']);
  Route::get('notification', [ViewController::class, 'viewNotification']);
  Route::get('profile', [ViewController::class, 'viewProfile']);
  Route::get('profile/edit', [ViewController::class, 'viewEditProfile']);
});

// cant access link if not login
Route::get('/auth', [ViewController::class, 'viewHome']
  // Only authenticated users may access this route...

)->middleware('fireauth');


// test flush session
Route::get('/logout', [FirebaseController::class, 'flushsession']);
