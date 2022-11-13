<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{

    public function index()
    {
        $content = \App\Models\PageContent::first();

        return view('cms.pages.index')->with('content', $content);
    }

    public function signUp()
    {
        return view('cms.pages.signup');
    }

    public function signIn()
    {
        return view('cms.pages.signIn');
    }

    public function confirmOtp()
    {
        return view('cms.pages.confirmOtp');
    }

    public function dashboard()
    {
        return view('cms.pages.dashboard');
    }
}
