<?php

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
Route::resource('answers', 'Answers\AnswersController');
Route::resource('exams', 'Exams\ExamsController');
Route::resource('doctoral', 'Forms\DoctoralController');
Route::resource('options', 'Options\OptionsController');
Route::resource('questions', 'Questions\QuestionsController');
Route::resource('master', 'Forms\MasterController');
Route::get('/export-forms/{id}', 'ExcelController@exportForms');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
