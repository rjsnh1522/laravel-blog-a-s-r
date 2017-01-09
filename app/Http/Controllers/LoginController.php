<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function getLogin(){



        return view('auth.login');
    }




    public function postLogin(){

        $user=Input::get('email');
        $pass=Input::get('password');


        $data=[
          'email'=>$user,
          'password'=>$pass
        ];

        $rule=[
            'email'=>'required',
            'password'=>'required'
        ];


        $validator=Validator::make($data,$rule);

        if($validator->fails()){

            return redirect()->back();
        }
        else{

            if(Auth::attempt($data)){

                $checkStatus=User::select('*')->where('email',$user)->first();
                Session::put('email',$checkStatus->email);

                return redirect()->route('post.index');

            }
            else{
                return redirect()->back();
            }

            return redirect()->back();
        }

    }


    public function getLogout(){
        Auth::logout();
        Session::flush('email');


        return redirect('/login');
    }
}
