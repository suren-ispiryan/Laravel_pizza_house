<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller{
    public function userData(Request $request){
        // $name = $request->input('name');
        // $surname = $request->input('surname');
        // $email = $request->input('email');

        $user = (object) [
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'email' => $request->input('email')
        ];
        return view('inserDataToDb')->with(compact('user'));
    }
}
