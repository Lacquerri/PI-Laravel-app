<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::post('/', [StudentController::class, 'store'])->name('student.store');
Route::get('/students', [StudentController::class, 'read'])->name('student.read');
Route::get('/students/{student}/update', [StudentController::class, 'update'])->name('student.update');
Route::put('/students/{student}/dbupdate', [StudentController::class, 'dbupdate'])->name('student.dbupdate');
Route::delete('/students/{student}/delete', [StudentController::class, 'delete'])->name('student.delete');
