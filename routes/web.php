<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HebrewsController;
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

Route::get('/', [HebrewsController::class, 'index']);
Route::get('/chapter/{chapter_number}', [HebrewsController::class, "readByChapter"]);
Route::get('/all-chapters', [HebrewsController::class, 'readAllChapters']);