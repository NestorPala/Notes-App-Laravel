<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotesController;

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

Route::name("notes.")->prefix('notes')->controller(NotesController::class)->group(function() {
    Route::get('', 'index')->name('index');
    Route::post('create', 'create')->name('create');
    Route::patch('edit/{id}', 'edit')->name('edit');
    Route::delete('delete/{id}', 'delete')->name('delete');
    Route::patch("archive/{id}", "archive")->name("archive");
    Route::patch("unarchive/{id}", "unarchive")->name("unarchive");
    Route::get("archived", "archived")->name("archived");
});