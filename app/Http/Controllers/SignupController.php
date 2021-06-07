<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
// use Symfony\Component\HttpFoundation\Request;

class SignupController extends Controller{
    public function signup(Request $request){
        $User = User::create([ // putting data from inputs in an object
            'name' => request('name'),
            'email' => request('email'),
            'password' => request('password'),
        ]);            
        
        if($User){
            return back() -> with('msg1', 'You registered successfully');
        }
        else{
            return abort(403);
        }

    }


    public function login(Request $request){
        $isAdmin = false; 
        // get users data from db
        $logedUserPassword = $request->input('logPassword');
        $logedUserEmail = $request->input('logEmail');
        // if admin open btn create
        $user = User::where('email', $logedUserEmail) -> where('password', $logedUserPassword)->first();
        if($user->role == 'admin'){
            $isAdmin = true;
            return back() -> with('isAdmin', $isAdmin); 
        }
        else{
            $isAdmin = false;
            return back() -> with('isAdmin', $isAdmin);
        }
    }

}
