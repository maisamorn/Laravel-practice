<?php

namespace App\Http\Controllers;

use App\Models\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $auth= Auth::all();
        return $auth;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $auth = new Auth();
        $auth->name = $name;
        $auth->email = $email;
        $auth->save();
        return $auth;
    }

    /**
     * Display the specified resource.
     */
    public function show(Auth $auth)
    {
        //
        return $auth;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Auth $auth)
    {
        $name = $request->name;
        $email = $request->email;
        $auth = Auth::find($id);
        $auth->name = $name;
        $auth->email = $email;
        $auth->save();
        return $auth;
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Auth $auth)
    {
        
        $auth->delete();
        return $auth;

    
    }
}
