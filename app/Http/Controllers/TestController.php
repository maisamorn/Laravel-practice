<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Exception ;



class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $test = User::all();
        return $test;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $password=$request->password;
        $test = new User();
        $test->name = $name;
        $test->email = $email;
        $test->password = $password;
        $test->save();
        return $test;
    }

    /**
     * Display the specified resource.
     */
    public function show(test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    /**
 * Update the specified resource in storage.
 */
public function update(Request $request, User $test)
{
    try {
        $user = $test;
        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->has('password')) {
            $user->password = $request->password;
        }

        $user->save();

        return $user;
    } catch (Exception $e) {
        return response()->json(['error' => 'An error occurred while updating the user.'], 500);
    }
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(test $test)
    {
        //
        $test->delete();
        return $test;
    }
}
