<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MangclController extends Controller
{
  
    public function index()
    {
        $clients = User::all();
      return view ('admin.index')->with('clients', $clients);
    }

    
    public function create()
    {
        return view('admin.create');
    }

   
    public function store(Request $request)
    {
        $input = $request->all();
        User::create($input);
        return redirect('admin')->with('flash_message', 'client Addedd!');  
    }

    
    public function show($id)
    {
        $client = User::find($id);
        return view('admin.show')->with('clients', $client);
    }

    
    public function edit($id)
    {
        $client = User::find($id);
        return view('admin.edit')->with('clients', $client);
    }

  
    public function update(Request $request, $id)
    {
        $client = User::find($id);
        $input = $request->all();
        $client->update($input);
        return redirect('admin')->with('flash_message', ' mise à jour est effectué avec succés');  
    }

   
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('admin')->with('flash_message', 'est effaceé');  
    }

}