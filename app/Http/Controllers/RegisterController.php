<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class RegisterController extends Controller
{
    public function register(Request $request){
    	$this->validate($request,[
    		'name'=>'required',
    		'email'=>'required|email|unique:users',
    		'password'=>'required|min:4|confirmed',
    		'password_confirmation'=>'required',
    	]);
    	$user = new User;
    	$user->name = $request['name'];
    	$user->email = $request['email'];
    	$user->password = bcrypt($request['password']);
    	$user->username = 'default';
    	$user->save();
        Auth::login($user);
        return  redirect()->route('user.chooseUserName');

    }
    public function getUser(){
        $user = Auth::user()->id;
        return view('user.chooseUserName',['user'=>$user]);
    }
    //update method
    public function update(Request $request,$id){
       $this->validate($request,[
            'username'=>'required|unique:users|max:40',  
        ]);
      
       $user = User::find($id);
       $user->username = $request['username'];
       $user->save();
       //Auth::login($user);
       return redirect()->route('home');
    }
    //login method
    public function login(Request $request){
    	$this->validate($request,[
    		
    		'email'=>'required|email',
    		'password'=>'required|min:4',
    		
    	]);
    	$remember = $request['remember'];
    	if(Auth::attempt(['email'=>$request['email'],'password'=>$request['password']],$remember)){
    		return redirect()->route('home');
    	}
    	return redirect()->back();

    }
}
