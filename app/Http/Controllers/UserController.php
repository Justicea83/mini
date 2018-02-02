<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Image;
class UserController extends Controller
{
    //
    public function ViewProfile(){
    	$id = Auth::user()->id;
    	
    	return view('user.profile');

    }

    public function home(){
    	$user = Auth::user()->name;
    	$username = Auth::user()->username;
    	return view('user.home',['user'=>$user,'username'=>$username]);
    }

    public function logout(){
    	Auth::logout();
    	return redirect()->route('login');
    }

    public function editprofile(){
    	return view('user.editProfile');
    }
    public function edit(Request $request){
    	$this->validate($request,[
    		'description'=>'max:1000',
    		'profileImage'=>'image',
    		'profileCover'=>'image'
    	]);
    	//dd($request); it works please
    	$user = Auth::user();
    	if($request->has('name')){
    		$user->name = $request['name'];
         }
         if($request->has('username')){
    		$user->username = $request['username'];
         }
         if($request->has('country')){
    		$user->country = $request['country'];
         }
         if($request->has('description')){
    		$user->description = $request['description'];
         }
         if($request->hasFile('profileImage')){
         	$image = $request['profileImage'];
         	$filename = time().'.'.$image->getClientOriginalExtension();
         	$location = public_path('SystemImages/'.$filename);
         	Image::make($image)->resize(400,400)->save($location);
    		$user->profileImage = $filename;
         }
         if($request->hasFile('profileCover')){
         	$image = $request['profileCover'];
         	$filename = time().'.'.$image->getClientOriginalExtension();
         	$location = public_path('SystemImages/'.$filename);
         	Image::make($image)->resize(851,315)->save($location);
    		$user->profileCover = $filename;
    		

         }
         $user->save();
         return redirect()->route('user.profile'); 
}

//settings
public function settings(){
	$user = Auth::user()->name;
    $username = Auth::user()->username;
	return view('user.settings',['user'=>$user,'username'=>$username]);
}

public function submitUserAccountSettings(Request $request){
	$this->validate($request,[
		'username'=>'max:50',
		'email'=>'email',
	]);
	$user = Auth::user();
	$user->name = $request['username'];
	$user->email = $request['email'];
	$user->save();
	return redirect()->route('home');
}
public function submitUserPasswordSettings(Request $request){
	$this->validate($request,[
		'current'=>'min:4',
		'password'=>'min:4|confirmed',
		'password_confirmation'=>'min:4'
	]);
	$user = Auth::user();
	$message = 'There was an error';
	if($user->password == $request['current']){
		$user->password = $request['password'];
	    $user->save();
	    $message = 'Saved successfully';
	}
	dd($message);
}
}
