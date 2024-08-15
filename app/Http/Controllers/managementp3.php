<?php

namespace App\Http\Controllers;

use App\Models\achat3;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class managementp3 extends Controller
{
    public function index()
    {

        $achats3=achat3::all();
       
                return view('admin.ond4',compact('achats3'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createp4');
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
        achat3::create($input);
        return redirect('prod');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {     $achats3= achat3::find($id);
        
        return view('admin.produit2',compact('achats3'));
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $achats3 = achat3::find($id);
        return view('admin.editp2')->with('achats2', $achats3);
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
        $achats3 = achat3::find($id);
        $input = $request->all();
        $achats3->update($input);
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
       
        achat3::destroy($id);
    
         return redirect('prod3')->with('flash_message','le produit est effacé');  
    }
}
