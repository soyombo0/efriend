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

    public function index(Request $request)
    {
        if ($request->has('game')) {
            $efriends = User::where('is_efriend', true)
                ->whereHas('games', function($query) use ($request) {
                    $query->where('name', $request->game);
                })
                ->with('games')
                ->get();
        } elseif ($request->has('name')) {
            $efriends = User::where('is_efriend', true)
                ->where('name', 'like', '%' . $request->name . '%')
                ->with('games')
                ->get();
        } else {
            $efriends = User::where('is_efriend', true)->with('games')->get();
        }

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

    public function store(Request $request, User $user, Game $game)
    {
        $user->is_efriend = true;
        $user->price = $request->price;
        $this->addGame($request, $user, $game);
        $user->save();

        return response()->json([
            'user' => $user,
            'message' => 'successfully became efriend'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return inertia('Profile/Efriend', [
            'user' => $user
        ]);
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
