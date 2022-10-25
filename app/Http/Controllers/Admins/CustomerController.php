<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alldata = Customer::all();
        $page_title = 'List of Customers';
        $page_name = 'admin.customer';
        return view('admin.customer.index', compact('alldata','page_title','page_name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_name = 'admin.customer';
        return view('admin.customer.create', compact('page_name'));
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
            'phone'=>'required|numeric|unique:customers,phone',
            'email'=>'required|unique:customers,email',
            'address'=>'required',
            'garbagetype'=>'required',
        ]);

        Customer:: create([
            'name'=> $request->name,
            'phone'=> $request->phone,
            'email'=> $request->email,
            'address'=> $request->address,
            'garbagetype'=> $request->garbagetype,

        ]);

        return redirect()->route('admin.customer.index');

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
        $page_name = 'admin.customer';
        $itemWithId = Customer::findOrFail($id); 
        return view('admin.customer.edit', compact('itemWithId','page_name'));
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
        $itemWithId = Customer::findOrFail($id); 

        if($request->email == $itemWithId->email || $request->phone == $itemWithId->phone){
            $request->validate([
                'name'=>'required|string',
                'phone'=>'required|numeric',
                'email'=>'required|email',
                'address'=>'required',
                'garbagetype'=>'required',
    
            ]);
        }
        else{
            $request->validate([
                'name'=>'required|string',
                'phone'=>'required|numeric|unique:customers,phone',
                'email'=>'required|unique:customers,email',
                'address'=>'required',
                'garbagetype'=>'required',
    
            ]);
        }
    
            $itemWithId-> update([
                'name'=> $request->name,
                'phone'=> $request->phone,
                'email'=> $request->email,
                'address'=> $request->address,
                'status'=> $request->status,
                'garbagetype'=>$request->garbagetype,

    
            ]);
    
            return redirect()->route('admin.customer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $itemWithId = Customer::findOrFail($id); 

        $itemWithId->delete();
        return back();
    }
}
