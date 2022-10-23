<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidatesPemiluController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('candidates_pemilu/store',[CandidatesPemiluController::class,'store'])->name('candidates_pemilu.store');
