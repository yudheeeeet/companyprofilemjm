<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PortofolioController;

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

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/backup', function () {
//     return view('backup');
// });

Route::get('/', function () {
    // return view('home.index');
    $data = [
        'content' => 'home/home/index'
    ];
    return view('home.layouts.wrapper', $data);
})->name('home');

Route::get('/about', function () {
    $data = [
        'content' => 'home/about/index'
    ];
    return view('home.layouts.wrapper', $data);
})->name('about');

Route::get('/services', function () {
    $data = [
        'content' => 'home/services/index'
    ];
    return view('home.layouts.wrapper', $data);
})->name('services');

Route::get('/contacts', function () {
    $data = [
        'content' => 'home/contacts/index'
    ];
    return view('home.layouts.wrapper', $data);
})->name('contacts');

Route::get('/media', function () {
    $data = [
        'content' => 'home/media/index'
    ];
    return view('home.layouts.wrapper', $data);
})->name('media');

Route::get('/admin/admin', [AdminController::class, 'admin'])->name('admin');