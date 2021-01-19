<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LaptopsController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\StudentController;
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
Route::get('info', function () {
    return view('index');
});

Route::GET('/search', [ReviewsController::class ,'store'])->name('searchy');
// Route::get('i', function () {
//     return view('main');
// });
// Route::post('x', function () {
//     return view('lap');
// });
//Route::get(url:'/', [StudentController::class,index]);
// Route::get('student', 'StudentController');
Route::resource('product', ProductController::class);
Route::resource('laptops', LaptopsController::class);
Route::resource('reviews', ReviewsController::class);
Route::GET('/searchh', [SearchController::class ,'index'])->name('searchyy');
Route::resource('student', StudentController::class);
// Route::get('list','ProductController@list');
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    // return view('dashboard');
// })->name('dashboard');
