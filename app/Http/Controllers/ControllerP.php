<?php

namespace App\Http\Controllers;

use App\Models\Achat;
use App\Models\achat1;
use App\Models\achat2;
use App\Models\achat3;
use App\Models\climat;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ControllerP extends Controller
{  
    public function index(){
        $achats = Achat::all();
        $achats1=achat1::all();
        $achats2=achat2::all();
        $achats3=achat3::all();
 return view('pages.onduleur',compact('achats','achats1','achats2','achats3'));
             }
public function produit(Request $request){
  $achats=Achat::find($request->id);
 return view('pages.produits',compact('achats'));
                     }
 public function produit1(Request $request){                    
$achats1=achat1::find($request->id);
 return view('pages.produits1',compact('achats1'));
                              }
public function produit2(Request $request){
 $achats2=achat2::find($request->id);
 return view('pages.produits2',compact('achats2'));
                                     }
 public function produit3(Request $request){                               
 $achats3=achat3::find($request->id);                                                                     
return view('pages.produits3',compact('achats3'));    }
   public function index2(){                                
 $climats= climat::all();
   return view('pages.armoire_precision',compact('climats'));   }
   public function climat( Request $request){
    $climats=climat::find($request->id);
    return view('pages.pclimat',compact('climats'));
   }
}            
