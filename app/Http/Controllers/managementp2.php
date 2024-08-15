<?php

namespace App\Http\Controllers;

use App\Models\achat2;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class managementp2 extends Controller
{
    public function index()
    {

        $achats2=achat2::all();
       
                return view('admin.ond3',compact('achats2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createp3');
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
        achat2::create($input);
        return redirect('prod');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {     $achats2= achat2::find($id);
        
        return view('admin.produit2',compact('achats2'));
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $achats2 = achat2::find($id);
        return view('admin.editp2')->with('achats2', $achats2);
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
        $achats = achat2                                                               ::find($id);
        $input = $request->all();
        $achats->update($input);
        return redirect('prod2')->with('flash_message', 'Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        achat2::destroy($id);
    
         return redirect('prod2')->with('flash_message','le produit est effacé');  
    }
}
