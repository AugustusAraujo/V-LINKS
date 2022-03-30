<?php

namespace App\Http\Controllers;

use \App\Models\Users;
use Illuminate\Contracts\Encryption\Encrypter;
use Illuminate\Encryption\Encrypter as EncryptionEncrypter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class UsersController extends Controller
{
    /**
     * The user login function
     * @param Request $request
     * @return string
     */ 
    public function Login(Request $request)
    {
        $this->validate(
            $request,
            [
                'username' => 'required',
                'password' => 'required'
            ]
        );
        $users = new Users();
        $results = $users->where("username", $request->get("username"))->where('password', $request->get("password"))->first();
        if (empty($results)) {
            return response(json_encode([
                "status" => "Invalid user."
            ]), 400);
        }
        return response()->json(["token" => $results["token"]]);
    }
}
