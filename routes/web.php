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
        ['title' => 'Písmo', 'rightlink' => '/' . $date . '/zamyslenie',
            'content' => \App\Models\Upgrade::all()->where('date', $date)->first()->pismo,
            'challenge' => \App\Models\Challenge::all()->where('start', '<=', date('Y-m-d'))->where('end', '>=', date('Y-m-d'))->first()
        ]);
})->name('pismo');

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
        ['title' => 'Zamyslenie', 'leftlink' => '/' . $date . '/pismo', 'rightlink' => '/' . $date . '/do-zivota', 'content' => \App\Models\Upgrade::all()->where('date', $date)->first()->zamyslenie,
            'challenge' => \App\Models\Challenge::all()->where('start', '<=', date('Y-m-d'))->where('end', '>=', date('Y-m-d'))->first()
        ]);
})->name('zamyslenie');

Route::get('/{date}/do-zivota', function ($date) {
    if (\App\Models\Upgrade::all()->where('date', $date)->first() == null) {
        if ($date == date('Y-m-d')) {
            return Inertia::render('404', ['date' => true]);
        }
        else {
            return Inertia::render('404', ['date' => false]);
        }
    }
    return Inertia::render('Home',
        ['title' => 'Do života', 'leftlink' => '/' . $date . '/zamyslenie', 'rightlink' => '/' . $date . '/modlitba', 'content' => \App\Models\Upgrade::all()->where('date', $date)->first()->dozivota,
            'challenge' => \App\Models\Challenge::all()->where('start', '<=', date('Y-m-d'))->where('end', '>=', date('Y-m-d'))->first()]);
})->name('do-zivota');

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
        ['title' => 'Modlitba', 'leftlink' => '/' . $date . '/do-zivota', 'content' => \App\Models\Upgrade::all()->where('date', $date)->first()->modlitba,
            'challenge' => \App\Models\Challenge::all()->where('start', '<=', date('Y-m-d'))->where('end', '>=', date('Y-m-d'))->first()]);
})->name('modlitba');
