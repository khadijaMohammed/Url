<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UrlsController;

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
Route::get('/', 'UrlsController@index')->name('index')->middleware(['auth']);
Route::get('/create/{id}', 'UrlsController@create')->name('create');
Route::post('/', [UrlsController::class, 'store'])->name('store');
Route::get('/{code}', [UrlsController::class, 'show'])->name('show');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

