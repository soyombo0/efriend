<?php

use App\Http\Controllers\AuthController;
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

// Auth related routes
Route::get('/signup', [AuthController::class, 'register']);
Route::get('/signin', [AuthController::class, 'login']);
Route::post('/signin', [AuthController::class, 'sinin']);
Route::post('/signup', [AuthController::class, 'signup']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::prefix('games')->group(function (Router $router) {
    $router->get('/', [GameController::class, 'index']);
});

Route::prefix('efriends')->group(function (Router $router) {
    $router->get('/', [EfriendController::class, 'index']);
});

Route::middleware('auth')->group(function (Router $router) {
    $router->get('profile', [ProfileController::class, 'create'])->name('profile');
    $router->put('/user', [ProfileController::class, 'update'])->name('user.update');
    $router->post('/user/pic', [ProfileController::class, 'storePic'])->name('user.pic.store');
});

