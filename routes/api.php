<?php
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {   
    return $request->user();
})->middleware('auth:sanctum');

Route::get('students', [StudentController::class, 'index']);
Route::post('students', [StudentController::class, 'store']);
Route::get('students/{id}', [StudentController::class, 'new']);
Route::get('students/{id}/edit', [StudentController::class, 'newedit']);
Route::put('students/{id}/edit', [StudentController::class, 'update']);
Route::delete('students/{id}/delete', [StudentController::class, 'destroy']);