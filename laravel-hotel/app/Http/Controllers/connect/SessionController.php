<?php

namespace App\Http\Controllers\connect;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SessionController extends Controller
{
    function index(){
        return view('connect.login');
    }

    function store(Request $request){
        $rules=[
            'user'=>'required',
            'password'=>'required|min:8'
        ];

        $message=[
            'user.required'=>'User or Email is required.',
            'password.required'=>'Password is required.',
            'password.min'=>'Password must contain at least 8 characters.'
        ];

        $validator = Validator::make($request->all(),$rules,$message);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Errors found.')->with('typealert','danger');
        else:
            if(Auth::attempt(['name'=>$request->user, 'password'=>$request->password],true)):
                return redirect()->route('home');
            else:
                return back()->with('message','Incorrect username or password.')->with('typealert','danger');
            endif;
        endif;
    }

    public function destroy(){
        Auth::logout();
        return redirect()->route('home');
    }

}
