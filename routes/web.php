<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\QuestionwordController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AnswerkeyController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuestionController;
use App\Models\Book;
use Dompdf\Dompdf;
use Dompdf\Options;


Route::get('/', function () {
    return view('homepage');
});
Route::get('/dashboard', function () {
    return view('dashboard'); 
})->middleware('auth')->name('dashboard');

Route::get('/user', [UsersController::class, "index"]);

Route::get('/homepage', [HomeController::class, "homepage"])->name('homepage')->middleware('auth');
Route::get('/category/list', [CategoryController::class, "index"])->name('category.list')->middleware('auth');
Route::post('/category/insert', [CategoryController::class, "store"])->middleware('auth');
Route::post('/category/edit', [CategoryController::class, "edit"])->name('category.edit')->middleware('auth');
Route::post('/category/update/{id}', [CategoryController::class, "update"])->name('category.update')->middleware('auth');
Route::delete('/category/delete/{id}', [CategoryController::class, "destroy"])->name('category.delete')->middleware('auth');

Route::get('/questionword/list', [QuestionwordController::class, "index"])->name('questionword.list')->middleware('auth');
Route::post('/questionword/insert', [QuestionwordController::class, "store"])->middleware('auth');
Route::post('/questionword/edit', [QuestionwordController::class, "edit"])->name('questionword.edit')->middleware('auth');
Route::post('/questionword/update/{id}', [QuestionwordController::class, "update"])->name('questionword.update')->middleware('auth');
Route::delete('/questionword/delete/{id}', [QuestionwordController::class, "destroy"])->name('questionword.delete')->middleware('auth');

Route::get('/answerkey/list', [AnswerkeyController::class, "index"])->name('answerkey.list')->middleware('auth');
Route::post('/answerkey/insert', [AnswerkeyController::class, "store"])->middleware('auth');
Route::post('/answerkey/edit', [AnswerkeyController::class, "edit"])->name('answerkey.edit');
Route::post('/answerkey/update/{id}', [AnswerkeyController::class, "update"])->name('answerkey.update')->middleware('auth');
Route::delete('/answerkey/delete/{id}', [AnswerkeyController::class, "destroy"])->name('answerkey.delete')->middleware('auth');

Route::get('/book/list', [BookController::class, "index"])->name('book.list')->middleware('auth');
Route::post('/book/insert', [BookController::class, "store"])->middleware('auth');
Route::post('/book/edit', [BookController::class, "edit"])->name('book.edit')->middleware('auth');
Route::post('/book/update/{id}', [BookController::class, "update"])->name('book.update')->middleware('auth');
Route::delete('/book/delete/{id}', [BookController::class, "destroy"])->name('book.delete')->middleware('auth');

Route::post('/question/set', [QuestionController::class, "setQuestion"])->name('question.set');


Route::post('/login', [AuthController::class, "login"])->name('login');
Route::get('/logout', [AuthController::class, "logout"])->name('logout');
