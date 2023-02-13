<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\PostCommentsController;

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use Illuminate\Http\Request;

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

Route::get('/', [PostCommentsController::class, 'index']);
Route::get('/m', [SubscriberController::class, 'index']);

Route::get('/g', function(){
    return view('welcome');
});
/*************************************************************** */
Route::post('article',[ArticleController::class,'store']);
Route::get('article/{article}',[ArticleController::class,'show']);
Route::get('article/{article}/comments',[ArticleController::class, 'show_comments']);
Route::get('article/{article}/best-comment',[ArticleController::class, 'show_best_comment']);
Route::get('articles', [ArticleController::class, 'index']);
Route::delete('article/{article}',[ArticleController::class, 'destroy']);

Route::post('article/{article}/comment',[CommentController::class, 'store']);
Route::post('comment/{comment}/best-comment',[CommentController::class, 'best_comment']);
Route::get('comments',[CommentController::class, 'index']);
Route::get('comment/{comment}', [CommentController::class, 'show']);
Route::delete('comment/{comment}',[CommentController::class, 'destroy']);
