<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todoListController;

Route::get('/', [todoListController::class , 'index']);


Route::post('/saveItemRoute',[todoListController::class , 'saveitem'])->name('saveItem');

Route::post('/markCompleteRoute/{id}',[todoListController::class , 'markComplete'])->name('markComplete');