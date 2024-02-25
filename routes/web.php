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

Route::get('/', function () {
    $comics = config('comics');
    $icons = config('icons');
    $footerLinks = config('footerLinks');
    
   
    return view('Home', compact('comics','icons','footerLinks'));
});

Route::get('Characters', function () {

    $footerLinks = config('footerLinks');
    return view('subpages.Characters', compact('footerLinks'));
});


Route::get('Comics', function () {
    $footerLinks = config('footerLinks');
    return view('subpages.Comics', compact('footerLinks'));
});

Route::get('Movies', function () {
    $footerLinks = config('footerLinks');
    return view('subpages.Movies', compact('footerLinks'));
});

Route::get('Tv', function () {
    $footerLinks = config('footerLinks');
    return view('subpages.Tv', compact('footerLinks'));
});

Route::get('Games', function () {
    $footerLinks = config('footerLinks');
    return view('subpages.Games', compact('footerLinks'));
});

Route::get('Collectibles', function () {
    $footerLinks = config('footerLinks');
    return view('subpages.Collectibles', compact('footerLinks'));
});

Route::get('Videos', function () {
    $footerLinks = config('footerLinks');
    return view('subpages.Videos', compact('footerLinks'));
});

Route::get('Fans', function () {
    $footerLinks = config('footerLinks');
    return view('subpages.Fans', compact('footerLinks'));
});

Route::get('News', function () {
    $footerLinks = config('footerLinks');
    return view('subpages.News', compact('footerLinks'));
});

Route::get('Shop', function () {
    $footerLinks = config('footerLinks');
    return view('subpages.Shop', compact('footerLinks'));
});




// Route::get(PERCORSO CON CUI ARRIVARE ALLA PAGINA, FUNZIONE DI CALLBACK CHE MI CREA LA RISPOSTA DA DARE ALL UTENTE)
