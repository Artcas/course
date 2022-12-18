<?php

namespace  App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ConfirmOtp;
use App\Http\Requests\Auth\SignInRequest;
use App\Http\Requests\Auth\SignUpRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends  Controller
{
    public function signUp(SignUpRequest $request): \Illuminate\Http\RedirectResponse
    {
        $data               = $request->only('name', 'email', 'phone', 'password');
        $data['is_active']  = false;
        $customer           = \App\Models\Customer::create([
            'first_name' => $request->get('name'),
            'email'      => $request->get('email'),
            'is_active'  => false,
            'password'   => $request->get('password'),
        ]);

        $this->guard()->login($customer);

        return redirect()->route('dashboard');
    }

    public function signIn(SignInRequest $request): \Illuminate\Http\RedirectResponse
    {
       $customer =  $this->guard()->attempt(['email' => $request->get('email'), 'password' => $request->get('password')]);

       if(!$customer)
           return redirect()->back()->withErrors(['message' => 'Credentials are wrong']);

        return redirect()->route('dashboard');
    }

    public function confirmOtp(ConfirmOtp  $request): \Illuminate\Http\RedirectResponse
    {
        $user = $this->guard()->user();

        if($user->otp_code != $request->get('otp-code'))
           return redirect()->back()->withErrors(['otp-code' => 'Otp Code not match to our data']);

        $user->is_verified = true;
        $user->save();

        return  redirect()->route('dashboard');

    }

    public function logout(): \Illuminate\Http\RedirectResponse
    {
        $this->guard()->logout();

        return redirect()->route('home');
    }
    //
    protected function guard()
    {
        return Auth::guard('customers');
    }
}
