<?php

namespace App\Http\Controllers\connect;

use App\Http\Controllers\Controller;
use App\Models\Person;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    function index(){
        return view('connect.register');
    }

    function store(Request $request){
        $rules=[
            'name'=>'required|unique:users,name|max:100',
            'first_name'=>'required|max:50',
            'last_name'=>'required|max:50',
            'email'=>'required|email|unique:users,email',
            'email'=>'unique:people,email',
            'phone_number'=>'required|numeric|digits_between:7,15',
            'password'=>'required|min:8',
            'password_confirmation'=>'required|same:password'
        ];

        $messages=[
            'name.required'=>'Username is required.',
            'name.unique'=>'The username is not available.',
            'name.max'=>'The username allows a maximum of 100 characters.',
            'first_name.required'=>'First name is required.',
            'first_name.max'=>'The first name allows a maximum of 50 characters.',
            'last_name.required'=>'Last name is required.',
            'last_name.max'=>'The last name allows a maximum of 100 characters.',
            'email.required'=>'Email is required.',
            'email.email'=>'Invalid email format.',
            'email.unique'=>'There is already a registered user with this email.',
            'phone_number.required'=>'Phone number is required.',
            'phone_number.numeric'=>'The telephone number only allows numbers.',
            'phone_number.digits_between'=>'The phone number only allows between 7 and 15 characters.',
            'password.required'=>'Password is required.',
            'password.min'=>'Password must contain at least 8 characters.',
            'password_confirmation.required'=>'Password confirmation required.',
            'password_confirmation'=>'Passwords do not match.'
        ];

        $validator = Validator::make($request->all(),$rules, $messages);
        #dd($request);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Errors found.')->with('typealert','danger');
        else:
            $new_person = new Person();
            $new_person->first_name=strtoupper(e($request->first_name));
            $new_person->last_name=strtoupper(e($request->last_name));
            $new_person->email=e($request->email);
            $new_person->phone_number=e($request->phone_number);
            if($new_person->save()):
                $person = Person::where('email',$new_person->email)->first();
                $new_user = new User();
                $new_user->role='PASSENGER';
                $new_user->name=e($request->name);
                $new_user->email=e($request->email);
                $new_user->password=Hash::make(e($request->password));
                $new_user->people_id=$person->id;
                if($new_user->save()):
                    return redirect()->route('login.index')->with('message','Successful registration, now you can start session.')->with('typealert','success');
                else:
                    return back()->with('message','Errors found at the time of registration.')->with('typealert','danger');
                endif;
            else:
                return back()->with('message','Errors found at the time of registration.')->with('typealert','danger');
            endif;
        endif;
    }
}
