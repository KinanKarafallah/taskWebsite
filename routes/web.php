<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MarkAsReadController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => 'auth'], function () {

    // profile routes
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/', [TaskController::class, 'index'])->name('home');
    Route::get('/home', [TaskController::class, 'index'])->name('home');

    //tasks routes
    Route::get('/create', [TaskController::class, 'create'])->name('task.create');
    Route::post('/create', [TaskController::class, 'store'])->name('task.store');
    Route::get('/task/{task}/edit', [TaskController::class, 'edit']);
    Route::put('/task/{product}', [TaskController::class, 'update']);
    Route::delete('/task/{product}/delete', [TaskController::class, 'destroy']);

    Route::get('/assigned', [TaskController::class, 'assignedTask'])->name('task.assigned');

    //notifications
    Route::view('/notifications', 'users.notifications')->name('notification');
    Route::get('ReadNotification/{id}',MarkAsReadController::class)->name('ReadNotification');

});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'SignupView'])->name('register');
    Route::post('/users', [AuthController::class, 'store'])->name('register.perform');
    Route::get('/login', [AuthController::class, 'loginView'])->name('login');
	Route::post('/login', [AuthController::class, 'login'])->name('login.perform');
    Route::get('/redirect', [AuthController::class, 'redirectToProvider'])->name('redirect');
    Route::any('/callback', [AuthController::class, 'handleProviderCallback'])->name('callback');
    

    // reset password
    Route::get('/forgot-password', [PasswordResetController::class,'index'])->name('password.request');
    Route::post('/forgot-password', [PasswordResetController::class,'sendEmailNotification'])->name('password.email');
    Route::get('/reset-password/{token}', [PasswordResetController::class,'resetPasswordToken'])->name('password.reset');
    Route::post('/reset-password', [PasswordResetController::class,'resetPassword'])->name('password.update');
    
    
    
});