<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

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

Route::get('/', [StudentsController::class, 'index']);
Route::get('/students-add', [StudentsController::class, 'create']);
Route::post('/students-add', [StudentsController::class, 'store']);
Route::get('/students-view', [StudentsController::class, 'show']);
Route::get('/students-des/{id}', [StudentsController::class, 'destroy'])->name('students.des');
Route::get('/students-upd/{id}', [StudentsController::class, 'edit'])->name('students.upd');
Route::post('/students-update/{id}', [StudentsController::class, 'update']);
