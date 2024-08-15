<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Support\Facades\Session;
use Validator;
use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
 public function login(){
    return view('login');
 }
 public function registration(){
    return view('registration');
 }
 public function registerUser(Request $request){
    $request->validate([
        'name'=>'required',
        'prenom'=>'required',
        'date'=>'required',
        'phone'=>'required',
        'email'=>'required|email|unique:users',
        'password'=>'required|min:5|max:12'
    ]);
    $user= new User();
    $user->Nom=$request->name;
    $user->Prénom=$request->prenom;
    $user->date_naissance=$request->date;
    $user->numero_télèphone=$request->phone;
    $user->email=$request->email;
    $user->password=Hash::make($request->password);
    $res=$user->save($request->all());
    if($res){
return back()->with('success','you have registered successfully');
    }else{
return back()->with('fail','something wrong');
    }
 }

 public function loginUser(Request $request){
    $request->validate([
       'email'=>'required|email',
        'password'=>'required|min:5|max:12'
    ]);
$user=User::where('email','=',$request->email)->first();
if($user){
if(Hash::check($request->password,$user->password)){
$request->session()->put('loginId', $user->id);
return view('welcome');
}
else{
    return back()->with('fail','password not matched');
}
}
else{
    return back()->with('fail','This is email is not registred');
}
 }
 public function afficher_profile(){
   
$data=array();

    if(Session::has('loginId')){
        $data=User::where('id','=',Session::get('loginId'))->first();
    }  
    return view('profileclient',compact('data'));
 }
 public function index(){

    return view('editprofile');
 }
public function editprofile( Request $request){
    $data=array();
    if(Session::has('loginId')){
        $data=User::where('id','=',Session::get('loginId'))->first();
        $input=$request->all();
        $data->update($input);
        return view('profileclient',compact('data'));;
     
    }

        
}
 public function logout(){
    if(Session::has('loginId')){
        Session::pull('loginId');
        return redirect('login');
    }
 }

}
