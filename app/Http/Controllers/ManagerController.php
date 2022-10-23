<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Manager;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alldata = Manager::all();
        $page_name = 'manager';
        $page_title = 'List of Managers';
        return view('manager.index', compact('alldata','page_title','page_name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_name = 'manager';
        return view('manager.create', compact('page_name'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string',
            'phone'=>'required|numeric|unique:managers,phone',
            'email'=>'required|unique:managers,email',
            'address'=>'required',

        ]);

        Manager:: create([
            'name'=> $request->name,
            'phone'=> $request->phone,
            'email'=> $request->email,
            'address'=> $request->address,

        ]);

        return redirect()->route('manager.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page_name = 'manager';
        $itemWithId = Manager::findOrFail($id); 
        return view('manager.edit', compact('itemWithId','page_name'));
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
        $itemWithId = Manager::findOrFail($id); 

        if($request->email == $itemWithId->email || $request->phone == $itemWithId->phone){
            $request->validate([
                'name'=>'required|string',
                'phone'=>'required|numeric',
                'email'=>'required|email',
                'address'=>'required',
    
            ]);
        }
        else{
            $request->validate([
                'name'=>'required|string',
                'phone'=>'required|numeric|unique:managers,phone',
                'email'=>'required|unique:managers,email',
                'address'=>'required',
    
            ]);
        }
    
            $itemWithId-> update([
                'name'=> $request->name,
                'phone'=> $request->phone,
                'email'=> $request->email,
                'address'=> $request->address,
    
            ]);
    
            return redirect()->route('manager.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
