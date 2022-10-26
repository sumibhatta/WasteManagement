<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;


class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alldata = Customer::all();
        return view('admin.payment.index',compact('alldata'));
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $itemWithId = Customer::findOrFail($id); 
        return view('admin.payment.edit', compact('itemWithId'));
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
                'garbagetype'=>'required',
    
            ]);
        }
        else{
            $request->validate([
                'name'=>'required|string',
                'garbagetype'=>'required',
    
            ]);
        }
    
            $itemWithId-> update([
                'name'=> $request->name,
                'garbagetype'=>$request->garbagetype,

    
            ]);
    
            return redirect()->route('admin.payment.index');
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
