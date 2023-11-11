<?php

namespace App\Http\Controllers;

use App\Http\Service\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        return UserService::getUsers();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return UserService::addName($request->fullname);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        return UserService::updateName($request->id,$request->fullname);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        return UserService::removeName($request->id);
    }
}
