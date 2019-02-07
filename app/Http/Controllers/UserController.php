<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function getProfile()
    {
        return view('user.profile');
    }
    
    public function getAdmin()
    {
        return view('user.admin');
    }
}
