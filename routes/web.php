<?php

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

#membuat route untuk admin
// Route::get('admin', function() {
//     return 'Hi Admin';
// })->middleware('role:admin');

// #membuat route untuk user
// Route::get('user', function() {
//     return 'Hi User';
// })->middleware('role:user');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
