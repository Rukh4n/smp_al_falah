<?php

use App\Http\Controllers\BanerController;
use App\Models\Means;
use App\Models\Teacher;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\MeansController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/  

Route::get('/', function () {
    return view('welcome');
});

// Route NEws
Route::get('/newss', [NewsController::class, 'index']);
Route::get('/newss/page', [NewsController::class, 'paginated']);
Route::get('/news/{id}', [NewsController::class, 'show']);
// Route Facility
Route::get('/facility', [FacilityController::class, 'index']);
// Router Sarana
Route::get('/means', [MeansController::class, 'index']);
// Router Teachers
Route::get('/teachers', [TeacherController::class, 'index']);
// Router Baner
Route::get('/baners', [BanerController::class, 'index']);

