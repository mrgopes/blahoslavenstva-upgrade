<?php

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Redirect::route('pismo');
});

Route::get('/pismo', function () {
    return Inertia::render('Home',
        ['title' => 'Pismo', 'rightlink' => '/myslienka', 'content' => \App\Models\Upgrade::all()->where('date', date('Y-m-d'))->first()->pismo]);
})->name('pismo');

Route::get('/myslienka', function () {
    return Inertia::render('Home',
        ['title' => 'Myšlienka', 'leftlink' => '/pismo', 'rightlink' => '/zamyslenie', 'content' => \App\Models\Upgrade::all()->where('date', date('Y-m-d'))->first()->myslienka]);
})->name('myslienka');

Route::get('/zamyslenie', function () {
    return Inertia::render('Home',
        ['title' => 'Zamyslenie', 'leftlink' => '/myslienka', 'rightlink' => 'modlitba', 'content' => \App\Models\Upgrade::all()->where('date', date('Y-m-d'))->first()->zamyslenie]);
})->name('zamyslenie');

Route::get('/modlitba', function () {
    return Inertia::render('Home',
        ['title' => 'Modlitba', 'leftlink' => 'zamyslenie', 'content' => \App\Models\Upgrade::all()->where('date', date('Y-m-d'))->first()->modlitba]);
})->name('modlitba');

Route::get('/test', function () {
    return Inertia::render('Test', ['test' => 'working']);
});
