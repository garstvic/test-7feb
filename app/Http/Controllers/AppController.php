<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AppController extends Controller
{
    public function getIndex()
    {
        return view('index', ['login' => 'signin']);
    }
    
    public function getSignIn()
    {
        return view('index', ['login' => 'signin']);
    }
    
    public function getSignUp()
    {
        return view('index', ['login' => 'signup']);
    }
}
