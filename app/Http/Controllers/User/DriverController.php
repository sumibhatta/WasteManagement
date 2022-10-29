<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Driver;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alldata = Driver::all();
        $page_name = 'driver';
        $page_title = 'List of Drivers';
        return view('users.driver.index', compact('alldata','page_title','page_name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_name = 'driver';
        return view('driver.create', compact('page_name'));
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
            'phone'=>'required|numeric|unique:drivers,phone',
            'email'=>'required|unique:drivers,email',
            'address'=>'required',

        ]);

        Driver:: create([
            'name'=> $request->name,
            'phone'=> $request->phone,
            'email'=> $request->email,
            'address'=> $request->address,

        ]);

        return redirect()->route('driver.index');
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
        $page_name = 'driver';
        $itemWithId = Driver::findOrFail($id); 
        return view('driver.edit', compact('itemWithId','page_name'));
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
        $itemWithId = Driver::findOrFail($id); 

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
                'phone'=>'required|numeric|unique:drivers,phone',
                'email'=>'required|unique:drivers,email',
                'address'=>'required',
    
            ]);
        }
    
            $itemWithId-> update([
                'name'=> $request->name,
                'phone'=> $request->phone,
                'email'=> $request->email,
                'address'=> $request->address,
    
            ]);
    
            return redirect()->route('driver.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $itemWithId = Driver::findOrFail($id); 

        $itemWithId->delete();
        return back();
    }
}
