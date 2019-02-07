<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Auth;

class AppController extends Controller
{
    public function getIndex()
    {
        return view('index');
    }
    
    public function getSignIn()
    {
        return view('user.signin');
    }
    
    public function postSignIn(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required|min:8'
        ]);   
        
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) 
        {
            if (Auth::user()->hasRole('user'))
            {
                return redirect()->route('user.profile');
            }
            else
            {
                return redirect()->route('admin.profile');    
            }
        }
        
        return redirect()->back();        
    }
    
    public function getSignUp()
    {
        return view('user.signup');
    }
    
    public function postSignUp(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4',
            'surname' => 'required|min:4',
            'address' => 'required',
            'email' => 'email|required|unique:users',
            'password' => 'required|min:8'
        ]);
        
        $user = new User([
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'address' => $request->input('address'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);
        
        $user->save();
        
        Auth::login($user);
        
        return redirect()->route('user.profile');
    }    
    
    public function getLogout()
    {
        Auth::logout();
        
        return redirect()->route('app.index');
    }
}
