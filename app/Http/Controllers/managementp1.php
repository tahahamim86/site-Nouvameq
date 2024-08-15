<?php

namespace App\Http\Controllers;

use App\Models\achat1;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class managementp1 extends Controller
{
    public function index()
    {

        $achats1=achat1::all();
       
                return view('admin.ond2',compact('achats1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createp2');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        achat1::create($input);
        return redirect('prod');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {     $achats1= achat1::find($id);
        
        return view('admin.produit1',compact('achats1'));
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $achats1 = achat1::find($id);
        return view('admin.editp1')->with('achats1', $achats1);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $achats = achat1                                                               ::find($id);
        $input = $request->all();
        $achats->update($input);
        return redirect('prod1')->with('flash_message', 'Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        achat1::destroy($id);
    
         return redirect('prod1')->with('flash_message','le produit est effacé');  
    }
}
