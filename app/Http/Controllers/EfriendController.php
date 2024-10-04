<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Game;
use App\Http\Services\EfriendService;

class EfriendController extends Controller
{
    // protected function __construct(
    //     protected EfriendService $service
    // ){}

    public function index()
    {
        $efriends = User::where('is_efriend', true)->with('games')->get();

        return inertia('Efriends/Efriends', [
            'efriends' => $efriends
        ]);
    }

    public function addGame(Request $request, User $user, Game $game)
    {
        $user->games()->attach($game);


        return response()->json([
            'user' => $user,
            'message' => 'successfully attached'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
