<?php

use App\Http\Controllers\EfriendController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use Illuminate\Foundation\Application;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    $posts = Post::query();

    return \inertia('Welcome', [
        'posts' => $posts
    ]);
});

Route::prefix('games')->group(function (Router $router) {
    $router->get('/', [GameController::class, 'index']);
});

Route::prefix('efriends')->group(function (Router $router) {
    $router->get('/', [EfriendController::class, 'index']);
});

Route::prefix('profile')->group(function (Router $router) {
   $router->get('/', [ProfileController::class, 'edit']);
});



