<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
        $users = User::select('id','name','role')->where('id','<>',auth()->user()->id)->orderBy('name')->get();
        $data=[
            'users'=>$users
        ];
        return view('admin.user.index',$data);
    }
}
