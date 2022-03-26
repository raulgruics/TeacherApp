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


// Welcome page ==============================
Route::get('/', [StudentController::class, 'welcome' ]);



//Creating project page========================================
Route::controller(StudentController::class)->group(function () {
    Route::get('/createProject', 'showProject');
    Route::post('/createProject', 'createProject');
});

//Displaying and adding student page===================
Route::controller(StudentController::class)->group(function () {
    Route::get('/Students', 'show');
    Route::post('/Students', ' createProject');
    Route::delete('/Students','delete');
});




