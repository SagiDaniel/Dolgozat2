<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CharacterController;

Route::get('/', [CharacterController::class, 'index'])->name("characters.index");
Route::get('/characters/{id}', CharacterController::class, "show")->name("characters.show");
Route::get('/characters/create', [CharacterController::class, 'create'])->name("characters.create");
Route::post('/characters', [CharacterController::class, 'store'])->name("characters.store");
Route::DELETE('/characters/{id} ', [CharacterController::class, 'destroy'])->name("characters.destroy");