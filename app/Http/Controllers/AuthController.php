<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function doRegister(Request $request){
        $request->validate([
            'f_name' => 'required',
            'l_name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:8|max:16|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/',
            'dob' => 'required',
            'gender' => 'required',
            ]
        );
        $request['password'] = Hash::make($request['password']);
        $user = User::create($request->all());
        return redirect()->back()->with('status','Account Created Successfully! Login Now');
    }
    function doLogin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:8|max:16|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/'
        ]);
        $loginDetails = $request->only('email','password');
        $doLogin = Auth::attempt($loginDetails);
        if($doLogin){
            $data = $request->input('email');
            $session = $request->session()->put('LoginData',$data);
            return redirect('dashboard');
        }else{
            return redirect()->back()->with('status','Invalid email or password');
        }
    }
}
