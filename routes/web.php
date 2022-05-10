<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('active/{user}/{token}', [\App\Http\Controllers\SendMailController::class, 'activeAccount'])
    ->name('active.account');
Route::get('success', [\App\Http\Controllers\UserController::class, 'index'])->name('success');
Route::get('', [\App\Http\Controllers\UserController::class, 'create'])->name('user.create');
Route::post('create-user', [\App\Http\Controllers\UserController::class, 'store'])->name('user.store');
Route::get('forget-password', [\App\Http\Controllers\SendMailController::class, 'forgetPassword'])->name('get.forget');
Route::post('forget-password', [\App\Http\Controllers\SendMailController::class, 'sendEmail'])->name('forget.password');
Route::get('new-password', [\App\Http\Controllers\SendMailController::class, 'createPassword'])->name('create.password');
Route::post('new-password', [\App\Http\Controllers\SendMailController::class, 'storePassword'])->name('store.password');
Route::get('send-mail', function () {
   $detail = ['title' => 'Hi', 'body' => 'test'];
   \Illuminate\Support\Facades\Mail::to('bachcongtu2904@gmail.com')->send(new \App\Mail\TestMail($detail));
   echo 'Email success';
});
