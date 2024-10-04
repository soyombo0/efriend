<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\EfriendController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResources([
    'games' => GameController::class,
]);

Route::get('/{user}/attach/{game}', [EfriendController::class, 'addGame']);
