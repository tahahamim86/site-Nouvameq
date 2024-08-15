<?php

namespace App\Http\Controllers;

use App\Models\climat;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class managementclimat extends Controller
{
    public function index()
    {

        $climat=climat::all();
       
                return view('admin.climat',compact('climat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createclimat');
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
        climat::create($input);
        return redirect('pclimat');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {     $climat= climat::find($id);
        
        return view('admin.pclimat',compact('climat'));
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $climat = climat::find($id);
        return view('admin.editclimat')->with('climat', $climat);
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
        $achats = climat                                                               ::find($id);
        $input = $request->all();
        $achats->update($input);
        return redirect('pclimat')->with('flash_message', 'Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        climat::destroy($id);
    
         return redirect('pclimat')->with('flash_message','le produit est effacé');  
    }
}
