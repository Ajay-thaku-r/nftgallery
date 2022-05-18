<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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
    if(session()->has('LoginData')){
        return redirect('/dashboard');
    }
    return view('login');
});
Route::post('/register',[AuthController::class,'doRegister']);
Route::post('/login',[AuthController::class,'doLogin']);
Route::get('/dashboard',function(){
    if(session()->has('LoginData')){
        return view('pages/dashboard');
    }
    return redirect('/');
});
Route::get('/logout',function(){
    if(session()->has('LoginData')){
        session()->pull('LoginData',null);
    }
    return redirect('dashboard');
});