<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClasseController;
use App\Http\Controllers\CursusController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ResultatController;

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
    return view('welcome');
})->name('welcome');

// MENU ORGANISATION
Route::prefix('menu/')->name('menu.')->group(function () {
    // DROPDOWN GOUVERNANCE
    Route::prefix('gouvernance')->name('gouvernance.')->group(function () {

        Route::get('/mot_du_doyen', function () {
            return view('menu.gouvernance.directeur');
        })->name('mot_du_doyen');

        Route::get('/historique', function () {
            return view('menu.gouvernance.historique');
        })->name('historique');

        Route::get('/administration', function () {
            return view('menu.gouvernance.administration');
        })->name('administration');
    });

    // DROPDOWN FORMATION
    Route::prefix('formation')->name('formation.')->group(function () {
        Route::get('/licence', function () {
            return view('menu.formation.licence_initial');
        })->name('licence.init');


        Route::get('/licence/un', function () {
            return view('menu.formation.licence_un');
        })->name('licence.un');


        Route::get('/licence/deux', function () {
            return view('menu.formation.licence_deux');
        })->name('licence.deux');


        Route::get('/master/init', function () {
            return view('menu.formation.master_inintial');
        })->name('master.init');

        Route::get('/master/un', function () {
            return view('menu.formation.master_un');
        })->name('master.un');

        Route::get('/master/deux', function () {
            return view('menu.formation.master_deux');
        })->name('master.deux');

        Route::get('/master/trois', function () {
            return view('menu.formation.master_trois');
        })->name('master.trois');


        Route::get('/master/quatre', function () {
            return view('menu.formation.master_quatre');
        })->name('master.quatre');


        Route::get('/master/cinq', function () {
            return view('menu.formation.master_cinq');
        })->name('master.cinq');
    });

    // RECHERHCE
    Route::prefix('recherche')->name('recherche.')->group(function () {
        Route::get('/laboratoire', function () {
            return view('menu.recherche.laboratoire');
        })->name('laboratoire');

        Route::get('/these', function () {
            return view('menu.recherche.theses');
        })->name('theses');
    });

    // VIE_ESTUDIANTINE
    Route::prefix('vie_estudiantine')->name('vie_estudiantine.')->group(function () {

        Route::get('/cristal', function () {
            return view('menu.vie_estudiantine.cristal');
        })->name('cristal');

        // OBTENIR UN RESULTAT
        Route::get('/resultat/init', [ResultatController::class, 'init'])->name('resultat.init');
        Route::post('/resultat/get', [ResultatController::class, 'get'])->name('resultat.get');

        // CURSUS ETUDIANT
        Route::get('/cursus/init', [CursusController::class, 'init'])->name('cursus.init');
        Route::post('/cursus/get', [CursusController::class, 'get'])->name('cursus.get');

        // VOIR LES DETAILS D'UN RESULTAT
        Route::post('/details', [CursusController::class, 'details'])->name('details');
    });

    // ACTUALITES
    Route::prefix('actualites')->name('actualites.')->group(function () {
        Route::get('/', function () {
            return view('menu.actualites.actualite');
        })->name('actualites');

        Route::get('/evenement', function () {
            return view('menu.actualites.evenement');
        })->name('evenements');
    });
});
