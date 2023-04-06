<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ProfesseurController;
use App\Http\Controllers\OrganismeController;
use App\Http\Controllers\SoutenirController;
use App\Models\Etudiant;
use App\Models\Organisme;
use App\Models\Professeur;
use App\Models\Soutenir;
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



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/', function () {
        $etudiantsCount = Etudiant::count();
        $professeursCount = Professeur::count();
        $soutenirsCount = Soutenir::count();
        $organismesCount = Organisme::count();

        return view('dashboard', compact('etudiantsCount', 'professeursCount', 'soutenirsCount', 'organismesCount'));
    })->name('dashboard');

    Route::get('/dashboard', function () {
        $etudiantsCount = Etudiant::count();
        $profsCount = Professeur::count();
        $soutenancesCount = Soutenir::count();
        $organismesCount = Organisme::count();

    return view('dashboard', compact('etudiantsCount', 'profsCount', 'soutenancesCount', 'organismesCount'));
        return view('dashboard');
    });

    Route::get('/recherche-etudiant', [EtudiantController::class, 'recherche'])->name('etudiant.recherche');
    Route::get('/etudiant/pdf', [EtudiantController::class, 'getPdf'])->name('etudiant.pdf');

    // Route::resource('dashboard', DashboardController::class);
    Route::resource('etudiant', EtudiantController::class);
    Route::resource('professeur', ProfesseurController::class);
    Route::resource('organisme', OrganismeController::class);
    Route::resource('soutenir', SoutenirController::class);

});


// Route::get('/addstudent', function () {
//     return view('student/addStudent');
// })->name('student');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
// Route::get('/policy', function () {
//     return view('policy');
// })->name('policy');

// Route::get('/student', function () {
//     return view('student/studentIndex');
// })->name('student');
// Route::get('/addstudent', function () {
//     return view('student/addStudent');
// })->name('student');

// Route::get('/professeur', function () {
//     return view('professeur/professeurIndex');
// })->name('professeur');
