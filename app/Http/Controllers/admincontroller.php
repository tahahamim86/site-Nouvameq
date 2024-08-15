<?php

namespace App\Http\Controllers;

use App\Models\Achat;
use App\Models\achat1;
use App\Models\achat2;
use App\Models\achat3;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session as FacadesSession;

class admincontroller extends Controller
{
    public function login1(){
        return view('loginadmin');
     }
     public function registration1(){
        return view('registeradmin');
     }
     public function registeradmin(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:12'
        ]);
        $admin= new Admin();
        $admin->name=$request->name;
        $admin->email=$request->email;
        $admin->password=Hash::make($request->password);
        $res=$admin->save($request->all());
        if($res){
    return back()->with('success','votre compte est enregistré avec succés');
        }else{
    return back()->with('fail','faux');
        }
     }
    
     public function loginadmin(Request $request){
        $request->validate([
           'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);
    $admin=Admin::where('email','=',$request->email)->first();
    if($admin){
    if(Hash::check($request->password,$admin->password)){
    $request->session()->put('loginadmin', $admin->id);
    return view('admin.index');
    }
    else{
        return back()->with('fail','password est faux');
    }
    }
    else{
        return back()->with('fail','cette email nest pas enregistré dans la base de donnée');
    }
     }
     public function dashboard(){
        $data=array() ;
            if(FacadesSession::has('loginadmin')){
                $data=Admin::where('id','=',FacadesSession::get('loginadmin'))->first();
            }  
            return view('admin.layout',compact('data'));
         }
     public function logout1(){
        if(FacadesSession::has('loginadmin')){
            FacadesSession::pull('loginadmin');
            return redirect('login1');
        }
       
     }


}

