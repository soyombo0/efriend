<?php

namespace App\Http\Services;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Game;

class EfriendService
{
    public function addGame(Request $request, User $user, Game $game)
    {
        $user->attach($game);

        return $user;
    }
}
