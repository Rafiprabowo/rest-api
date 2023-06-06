<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Resources\LoginResource;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ApiAuthController extends Controller
{
    //
    public function login(Request $request)
    {
        Validator::validate($request->all(), [
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::where('username', $request->username)->first();

        if ($user) {
            if ($user->password == $request->password) {
                $token = $user->createToken('token')->accessToken;
                return new LoginResource([
                    "message" => "login success",
                    "user" => $user,
                    "token" => $token
                ], 200);
            }else{
                return response([
                    'message' => 'username atau password salah'
                ], 401);
            }
        }
    }
}
