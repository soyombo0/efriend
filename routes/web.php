<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EfriendController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

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
    $router->get('/', [GameController::class, 'index'])->name('games.index');
});

Route::prefix('efriends')->group(function (Router $router) {
    $router->get('/', [EfriendController::class, 'index']);
    $router->get('/{user}', [EfriendController::class, 'show']);
});

Route::middleware('auth')->group(function (Router $router) {
    $router->get('user', [UserController::class, 'create'])->name('profile');
    $router->put('/user', [UserController::class, 'update'])->name('user.update');
    $router->post('/user/pic', [UserController::class, 'storePic'])->name('user.pic.store');


    $router->get('/payment', [PaymentController::class, 'create'])->name('payment.create');
    $router->post('/payment', [PaymentController::class, 'pay'])->name('payment.pay');
});

