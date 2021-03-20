<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardUsersController;
use App\Http\Livewire\IncreaseCalc;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

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

Route::middleware(['view-counter'])->group(function () {

    Route::get('/', function () {
        return view('welcome');
    });
    
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        // Route::post('/dashboard', [IncreaseCalc::class]);
        Route::get('/dashboard/users', [DashboardUsersController::class, 'index'])->name('dashboard.users');
        Route::get('/user', function () {
            return view('user.user-index');
        });
    });

    Route::prefix('admin')->group(function () {
        Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('admin.login');
        Route::get('/register', [RegisteredUserController::class, 'create'])->name('admin.register');
        Route::post('/login', [AuthenticatedSessionController::class, 'store']);
        Route::post('/register', [RegisteredUserController::class, 'store']);
    });
});
