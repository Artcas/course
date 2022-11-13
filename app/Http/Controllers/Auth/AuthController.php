<?php

namespace  App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\SignUpRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends  Controller
{
    public function signUp(SignUpRequest $request)
    {

    }

    public function signIn()
    {

    }
    //
    protected function guard()
    {
        return Auth::guard('customers');
    }
}
