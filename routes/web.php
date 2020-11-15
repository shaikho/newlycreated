<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\RecruitController;
use App\Http\Controllers\RepresentitiveController;

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
    return redirect('recruits');
});

//recruits routes

Route::get('/recruits', [RecruitController::class, 'index']);
Route::get('/addrecruits', [RecruitController::class, 'addrecruits']);
Route::post('/performaddrecruit', [RecruitController::class, 'performaddrecruit']);
Route::get('/deleterecruit/{id}', [RecruitController::class, 'deleterecruit']);

//representitives routes

Route::get('/representitives',[RepresentitiveController::class,'index']);
Route::get('/addrepresentitive', [RepresentitiveController::class,'addrepresentitve']);
Route::post('/performaddrepresentitve',[RepresentitiveController::class,'performaddrepresentitve']);
Route::get('/deleterepresentitive/{id}',[RepresentitiveController::class,'delete']);
