<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
{

    public function register(Request $request){
        dd($request);
        $name = $request -> input('name');
        $email = $request -> input('email');
        $password = $request -> input('password');
        $check_password = $request -> input('check_password');


        if($password != $check_password)
            return redirect()->back()->withErrors(["message","Пароли не совпадают!"]);



        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = bcrypt($password);
        $user->save();

        return redirect(route('profile'));
    }


    public function login(Request $request){
        $name = $request->input('name');
        $password = $request->input('password');
        if(Auth::attempt([
            "name" => $name,
            "password" => $password
        ]))
            return redirect(route('profile'));
    }


    public function logout(){
        if(Auth::check()){
            Auth::logout();
            redirect(route('index'));
        }else{
            redirect(route('index'));
        }
    }

}
