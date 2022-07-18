<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
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
Route::get("/about",[WebController::class,"aboutUs"]);

//prodcut and category
Route::get('/list-category', function () {
    return view('category/list-category');
});
Route::get('/add-category', function () {
    return view('category/add-category');
});
Route::get('/edit-category', function () {
    return view('category/edit-category');
});
Route::get('/list-product', function () {
    return view('product/list-product');
});
Route::get('/add-product', function () {
    return view('product/add-product');
});
Route::get('/edit-product', function () {
    return view('product/edit-product');
});
//student
//Route::get('/list-student', function () {
//    return view('student/list-student');
//});
Route::get("student/list",[\App\Http\Controllers\StudentController::class,"all"]);
Route::get('/add-student', function () {
    return view('student/add-student');
});
Route::get('/edit-student', function () {
    return view('student/edit-student');
});
//class
//Route::get('/list-class', function () {
//    return view('class/list-class');
//});
Route::get("/class/list",[\App\Http\Controllers\ClassesController::class,"all"]);
Route::get('/add-class', function () {
    return view('class/add-class');
});
Route::get('/edit-class', function () {
    return view('class/edit-class');
});
//subject
Route::get('/list-subject', function () {
    return view('subject/list-subject');
});
Route::get('/add-subject', function () {
    return view('subject/add-subject');
});
Route::get('/edit-subject', function () {
    return view('subject/edit-subject');
});
//score
Route::get('/list-score', function () {
    return view('score/list-score');
});
Route::get('/add-score', function () {
    return view('score/add-score');
});
Route::get('/edit-score', function () {
    return view('score/edit-score');
});
