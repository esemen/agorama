<?php

use App\Http\Controllers\AgoramaController;
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
})->name('index');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('order', function () {
    return redirect('https://www.just-eat.co.uk/restaurants-agorama-willesden/menu');
})->name('order');

Route::get('menu', [AgoramaController::class, 'menu'])->name('menu');

Route::get('menu/dinein', function () {
    return view('menu-dinein');
})->name('menu-dinein');

Route::get('menu/takeaway', function () {
    return view('menu-takeaway');
})->name('menu-takeaway');

Route::get('event/benan-jan28', function () {
    return view('event-benan');
})->name('event-benan');
