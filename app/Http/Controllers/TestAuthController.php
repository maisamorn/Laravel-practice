<?php

namespace App\Http\Controllers;

use App\Models\TestAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\TestAuthRequest;
use App\Http\Resources\TestAuthResource;

class TestAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testAuth = TestAuthResource::collection(TestAuth::all());
        return response()->json(['data'=> $testAuth,'massage' => 'Request is successfully'], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $password= $request->password;
        $auth = new TestAuth();
        $auth->name = $name;
        $auth->email = $email;
        $auth->password = $password;
        $auth->save();
        return $auth;
    }

    /**
     * Display the specified resource.
     */
    public function show(TestAuth $testAuth)
    {
        return $auth;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TestAuthRequest $request, TestAuth $testAuth)
    {
        $name = $request->name;
        $email = $request->email;
        $testAuth->name = $name;
        $testAuth->email = $email;
        $testAuth->save();
        return new TestAuthResource($testAuth);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TestAuth $testAuth)
    {
        $testAuth->delete();
        return response()->json([
            'message' => 'TestAuth deleted successfully'
        ], 200);
    }
}
