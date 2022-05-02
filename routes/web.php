<?php

use App\Http\Controllers\BbsController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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

Route::get('/dashboard', function () {
    return view('dashboard')->with('user', Auth::user());
})->middleware(['auth'])->name('dashboard');

Route::get('/users', function () {
    return view('users')->with('users', User::all());
})->middleware(['auth', 'roleChecker:admin, null'])->name('users');

Route::prefix('/news')->group(function () {
    Route::get('/', ['as' => 'news.index', BbsController::class, 'index']);
    Route::get('/{bb}', ['as' => 'news.item', BbsController::class, 'detail']);
    Route::get('/listings', ['as' => 'news.listings', BbsController::class, 'index']);
    Route::get('/listing/{bb}', ['as' => 'news.listing', BbsController::class, 'listing']);
});

require __DIR__.'/auth.php';
