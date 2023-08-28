<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/', \App\Http\Livewire\Home\Index::class);
    Route::get('/dashboard', \App\Http\Livewire\Dashboard\Index::class)->name('dashboard');
    Route::get('/projects/{slug}', \App\Http\Livewire\Project\Index::class)->name('project.index');
    Route::get('/project/create', \App\Http\Livewire\Project\Create::class)->name('project.create');
});
