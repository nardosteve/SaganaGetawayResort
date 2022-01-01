<?php

use App\Http\Controllers\CustomerDataController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardEmployeeController;
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
})->name('mainpage');

Route::resource('/customer-data', CustomerDataController::class)->only('store');

Route::get('/employees', [DashboardEmployeeController::class, 'index'])->name('dasboard.employees');

Route::get('/dashboards', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboards');



require __DIR__ . '/auth.php';
