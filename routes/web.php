<?php

use App\Http\Controllers\Frontend\LandingPageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/', [LandingPageController::class, 'index'])->name('landing-page.index');
Route::post('/', [LandingPageController::class, 'store'])->name('landing-page.store');
Route::get('/ajax-select', [LandingPageController::class, 'ajaxSelect'])->name('landing-page.select');


require __DIR__ . '/backoffice.php';
