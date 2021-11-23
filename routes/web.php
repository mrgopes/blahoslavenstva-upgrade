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
    return Redirect::route('pismo', [date('Y-m-d')]);
});

Route::get('/{date}', function ($date) {
    return Redirect::route('pismo', [$date]);
});

Route::get('/{date}/pismo', function ($date) {
    if (\App\Models\Upgrade::all()->where('date', $date)->first() == null) {
        if ($date == date('Y-m-d')) {
            return Inertia::render('404', ['date' => true]);
        }
        else {
            return Inertia::render('404', ['date' => false]);
        }
    }
    return Inertia::render('Home',
        ['title' => 'Pismo', 'rightlink' => '/' . $date . '/myslienka',
            'content' => \App\Models\Upgrade::all()->where('date', $date)->first()->pismo,
            'challenge' => \App\Models\Challenge::all()->where('start', '<=', date('Y-m-d'))->where('end', '>=', date('Y-m-d'))->first()
        ]);
})->name('pismo');

Route::get('/{date}/myslienka', function ($date) {
    if (\App\Models\Upgrade::all()->where('date', $date)->first() == null) {
        if ($date == date('Y-m-d')) {
            return Inertia::render('404', ['date' => true]);
        }
        else {
            return Inertia::render('404', ['date' => false]);
        }
    }
    return Inertia::render('Home',
        ['title' => 'Myšlienka', 'leftlink' => '/' . $date . '/pismo', 'rightlink' => '/' . $date . '/zamyslenie', 'content' => \App\Models\Upgrade::all()->where('date', $date)->first()->myslienka,
            'challenge' => \App\Models\Challenge::all()->where('start', '<=', date('Y-m-d'))->where('end', '>=', date('Y-m-d'))->first()
        ]);
})->name('myslienka');

Route::get('/{date}/zamyslenie', function ($date) {
    if (\App\Models\Upgrade::all()->where('date', $date)->first() == null) {
        if ($date == date('Y-m-d')) {
            return Inertia::render('404', ['date' => true]);
        }
        else {
            return Inertia::render('404', ['date' => false]);
        }
    }
    return Inertia::render('Home',
        ['title' => 'Zamyslenie', 'leftlink' => '/' . $date . '/myslienka', 'rightlink' => '/' . $date . '/modlitba', 'content' => \App\Models\Upgrade::all()->where('date', $date)->first()->zamyslenie,
            'challenge' => \App\Models\Challenge::all()->where('start', '<=', date('Y-m-d'))->where('end', '>=', date('Y-m-d'))->first()]);
})->name('zamyslenie');

Route::get('/{date}/modlitba', function ($date) {
    if (\App\Models\Upgrade::all()->where('date', $date)->first() == null) {
        if ($date == date('Y-m-d')) {
            return Inertia::render('404', ['date' => true]);
        }
        else {
            return Inertia::render('404', ['date' => false]);
        }
    }
    return Inertia::render('Home',
        ['title' => 'Modlitba', 'leftlink' => '/' . $date . '/zamyslenie', 'content' => \App\Models\Upgrade::all()->where('date', $date)->first()->modlitba,
            'challenge' => \App\Models\Challenge::all()->where('start', '<=', date('Y-m-d'))->where('end', '>=', date('Y-m-d'))->first()]);
})->name('modlitba');
