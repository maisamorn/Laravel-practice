<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreUserRequest;
use App\Http\Resources\ShowUserResource;
use App\Http\Resources\UserResource;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users =User::all();
        return $users;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $name = $request->name;
        $email = $request->email;
        $password=$request->password;
        $users = new User();
        $users->name = $name;
        $users->email = $email;
        $users->password = $password;
        $users->save();
        return $users;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $users = User::find($id);
        return $users;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $name = $request->name;
        $email = $request->email;
        $password=$request->password;
        $users = User::find($id);
        $users->name = $name;
        $users->email = $email;
        $users->password = $password;
        $users->save();
        return $users;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $users = User::find($id);
        $users->delete();
        return $users;
     
    }
}
