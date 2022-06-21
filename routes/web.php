<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;

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

Route::get('/home', function () {
    return view('home'); 
});

Route::get('/create', function () {
    return view('create'); 
});

Route::get('/collection', [BookController::class, 'showAll']);

Route::post('/collection/{id}', [BookController::class, 'update']);
 
Route::post('/collection', [BookController::class, 'create']);

// Route::get('/books/{id}', [BookController::class, 'details']);

// Route::delete('/books/{id}', [BookController::class, 'delete']);

Route::delete('/collection/{id}', [BookController::class, 'delete']);

Route::post('/update/{id}', [BookController::class, 'update']);

Route::get('/bookDetails/{id}', [BookController::class, 'details']);

// Route::post('/collection', [BookController::class, 'feedback']);





