<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student_list_test;
use App\Http\Controllers\Student_list_update;
use App\Http\Controllers\update_program;
use App\Http\Controllers\student_data;
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

Route::view('updateprogram', 'components.update_program');
Route::post('updateprogram', [update_program::class, 'addprogram']);
Route::get('updateprogram', [update_program::class, 'show']);
Route::get('updateprogram/{id}', [update_program::class, 'delete']);
Route::get('edit/{id}', [update_program::class, 'edit']);
Route::post('edit',[update_program::class,'update']);


Route::get('/student_list', [Student_list_test::class, 'show']);

Route::get('/student_list_upload', [Student_list_update::class, 'upload']);
Route::post('/import_user', [Student_list_update::class, 'import_user'])->name('import_user');


Route::get('/students_data' ,[student_data::class,'show']);
Route::post('/students_data',[student_data::class,'search']);