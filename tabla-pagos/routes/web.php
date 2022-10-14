<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\query_dashboard_payment;
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

Route::get('/', [query_dashboard_payment::class, 'index'])->name ('query.index');

Route::get('/dashboard', function () {
    return view('dashboard');
});
