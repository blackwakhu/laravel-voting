<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\ChoicesController;

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
    return view('index');
});


// routes for questions
Route::get("/questions", 
           [QuestionsController::class, 'index'])
    ->name('questions.index');

Route::get('/questions/create', 
           [QuestionsController::class, 'create'])
    ->name('questions.create');

Route::post('/questions/store', 
            [QuestionsController::class, 'store'])
    ->name('questions.store');


// routes for choices
Route::get("/choices", 
           [ChoicesController::class, 'index'])
    ->name('choices.index');

Route::get("/choices/create/{quest}", 
           [ChoicesController::class, 'create'])
    ->name('choices.create');

Route::post("choices/store/{quest}", 
           [ChoicesController::class, 'store'])
    ->name('choices.store');
