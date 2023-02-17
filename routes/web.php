<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JobController;


Route::get('/', function () {
    return view('login');
});

Route::get('/logout', function(){
    Session::forget('user');
    return redirect('/');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/userprofile', function () {
    return view('userprofile');
});

Route::get('/employeeslist', function () {
    return view('employeeslist');
});

Route::get('/employeesview', function () {
    return view('employeesview');
});

Route::get('/employeesedit', function () {
    return view('employeesedit');
});

Route::get('/employeesadd', function () {
    return view('employeesadd');
});

Route::get('/calendar', function () {
    return view('calendar');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::post('/login', [UserController::class, 'login']);
Route::post('/signup', [UserController::class, 'signup']);
Route::get('/userprofile', [UserController::class, 'userprofile']);
Route::post('/userprofile', [UserController::class, 'edituser']);
Route::get('/employeeslist', [UserController::class, 'search']);
Route::get('/employeesview', [UserController::class, 'employeeprofile']);
Route::get('/employeesedit', [UserController::class, 'getemployee']);
Route::post('/employeesedit', [UserController::class, 'editemployee']);
Route::post('/employeesadd', [UserController::class, 'insertform', 'employeeslist']);
Route::get('/employeesdelete', [UserController::class, 'deleteemployee']);





// get dapatkan data dari database
// post submit data ke database

