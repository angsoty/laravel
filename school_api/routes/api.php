<?php

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/get_all_student' , [StudentController::class , 'index']);
Route::get('/getByIdstudent/{id}' , [StudentController::class , 'getOnestudent']);
Route::post('/add_student' , [StudentController::class , 'addStudent']);
Route::delete('/del_student/{id}' , [StudentController::class , 'delStudent']);
Route::put('/update_student/{id}' , [StudentController::class , 'updateStudent']);
