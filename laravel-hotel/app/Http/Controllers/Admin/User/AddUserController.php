<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AddUserController extends Controller
{
    function create(){
        return view('admin.user.add');
    }

    function store(Request $request){
        $rules=[
            'type_id'=>'required|min:1|max:30',
            'identification'=>'required|numeric|unique:people|digits_between:6,20',
            'first_name'=>'required|max:50',
            'last_name'=>'required|max:50',
            'email'=>'required|email|unique:users,email',
            'email'=>'unique:people,email',
            'phone_number'=>'required|numeric|digits_between:7,15',
            'gender'=>'required|min:1|max:15'
        ];

        $messages=[
            'type_id.required'=>'The type of ID is required.',
            'type_id.min'=>'The type of ID requires at least 1 character.',
            'type_id.max'=>'The type of ID allows a maximum of 30 characters.',
            'identification.required'=>'The Identification is required.',
            'identification.numeric'=>'Identification only allows numeric characters.',
            'identification.unique'=>'There is already a person registered with this identification number.',
            'identification.digits_between'=>'The identifier only allows between 6 and 20 characters.',
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
            'gender.require'=>'The gender in required.',
            'gender.min'=>'The gender requires at least 1 character.',
            'gender.max'=>'The gender allows a maximum of 15 characters.'
        ];

        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()()):
            return back()->withErrors($validator)->with('message','Errors found.')->with('typealert','danger');
        else:
        endif;
    }
}
