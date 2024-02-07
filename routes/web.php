<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\HomeContoller;
use App\Http\Controllers\UserController;
use App\Models\Agenda;
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

Route::get('/', [HomeContoller::class, 'getHomeView']);

Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);

Route::get('/agenda', [AgendaController::class, 'showAgenda']);

Route::get('/create-agenda-item', [AgendaController::class, 'showCreateAgendaItem']);
Route::post('/create-agenda-items', [AgendaController::class, 'createAgendaItem']);

Route::delete('/delete-agenda-item/{job}', [AgendaController::class, 'deleteAgendaItem']);

Route::get('/edit-agenda-item/{job}', [AgendaController::class, 'showEditAgendaItem']);
Route::put('/edit-item/{job}', [AgendaController::class, 'editJob']);
