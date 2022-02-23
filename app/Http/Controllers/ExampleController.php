<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function getUser(Request $request)
    {
        $user = Socialite::driver('facebook')->userFromToken($request->accessToken);

        return response()->json(['data' => $user, 'code' => 200]);
    }
    //
}
