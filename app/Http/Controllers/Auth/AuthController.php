<?php

namespace  App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ConfirmOtp;
use App\Http\Requests\Auth\SignUpRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends  Controller
{
    public function signUp(SignUpRequest $request)
    {
        $data               = $request->only('name', 'email', 'phone', 'password');
        $data['is_active']  = false;
        $customer           = \App\Models\Customer::create($data);

        $this->guard()->login($customer);

        return redirect()->route('dashboard');
    }

    public function signIn()
    {

    }

    public function confirmOtp(ConfirmOtp  $request)
    {
        $user = $this->guard()->user();

        if($user->otp_code != $request->get('otp-code'))
           return redirect()->back()->withErrors(['otp-code' => 'Otp Code not match to our data']);

        $user->is_verified = true;
        $user->save();

        return  redirect()->route('dashboard');

    }
    //
    protected function guard()
    {
        return Auth::guard('customers');
    }
}
