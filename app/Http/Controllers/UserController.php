<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;
use App\Http\Requests\UserUpdateRequest;

class UserController extends Controller
{

    public function __construct(protected UserService $service)
    {
    }

    public function create()
    {
        return inertia('User/Page');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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

    public function update(UserUpdateRequest $request)
    {
        $data = $request->validated();
        $user = auth()->user();
        $user->update($data);
    }

    public function destroy(string $id)
    {
        //
    }
    public function storePic(Request $request)
    {
        $pic = $this->service->storePic($request);

        return inertia('User/Page', [
            "data" => $pic
        ]);
    }
}
