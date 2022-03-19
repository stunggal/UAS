<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WishController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\DashboardController;
use App\Models\Recipe;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/wish', [WishController::class, 'index']);
Route::post('/wish', [WishController::class, 'store']);

Route::get('/recipe', [RecipeController::class, 'index']);
Route::get('/recipe/{slug}', [RecipeController::class, 'show']);

Route::get('/admin', [UserController::class, 'index']);
Route::post('/admin', [UserController::class, 'authenticate']);
Route::get('/logout', [UserController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dashboard/rdelete/{slug}', [WishController::class, 'destroy']);
Route::get('/dashboard/mdelete/{slug}', [RecipeController::class, 'destroy']);

Route::get('/postmenu', [DashboardController::class, 'postmenu']);
Route::post('/postmenu', [RecipeController::class, 'store']);

