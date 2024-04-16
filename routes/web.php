<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddprojectController;
use App\Http\Controllers\ListprojectController;

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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'root']);
Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);
Route::post('/formsubmit', [App\Http\Controllers\HomeController::class, 'FormSubmit'])->name('FormSubmit');

Route::get('/list-project',[ListprojectController::class,'Liste_projet']);
Route::get('/add-project',[ListprojectController::class,'Ajouter_projet']);
Route::post('/add-project/traitement', [ListprojectController::class, 'Ajouter_projet_traitement'])->name('add-project.traitement');

Route::get('/update-project/{id}', [ListprojectController::class, 'update_project']);
Route::post('/update-project/{id}/traitement', [ListprojectController::class, 'update_projet_traitement'])->name('update-project.traitement');
Route::post('/update-project/traitement', [ListprojectController::class, 'update_projet_traitement'])->name('update.traitement');


