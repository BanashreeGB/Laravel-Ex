<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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
    return view('welcome');
});


// Resource Route for article.
Route::resource('articles', ArticleController::class);

// Route for get articles for yajra post request.
Route::get('get-articles', [ArticleController::class, 'getArticles'])->name('get-articles');

// $router->get('index', 'ArticleController@index');


Route::get('index', [ArticleController::class, 'index'])->name('index');