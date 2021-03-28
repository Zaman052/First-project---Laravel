<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class users extends Controller
{
    function register()
    {
        return view('register');
    }
    
    function loginsubmit()
    {
        return view('loginsubmit');
    }

    function registersubmit()
    {
        return view('registersubmit');
    }
    

    function logon(Request $req)
    {
    
        
        user::select('name')->where(
            [
              ['email','=',$req->email],
            ['password','=',$req->password]
            ]
            );
            return view('/loginsubmit');
    }

    public function registers(Request $req) {
        
        $this->validate($req,[
            'name'=> 'required|max:150',
            'email'=>'required|email|unique:users',
            'phonenumber'=>'required|size:10|regex:/(04)[0-9]{8}/',
            'password'=>'required|string|min:6|confirmed|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',

        ]);

        $user = new user;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->phonenumber=$req->phonenumber;
        $user->password=$req->password;
        $result=$user->save();
        if($result){
            return view('/registersubmit');       
            
        }
}

}