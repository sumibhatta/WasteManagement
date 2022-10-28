<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request as Irequest;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Payment;
use DB;



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
        $allPaymentData = Payment::all();
        return view('admin.payment.index',compact('alldata','allPaymentData'));
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
        $data = DB::table('customers')->where('id', $id)->get();
        $response_as_array = json_decode($data, true);

        
        if( $response_as_array[0]['garbagetype'] == 'Household'){
            $billAmount = 100;
    
        }
        else if( $response_as_array[0]['garbagetype'] == 'Institutional'){
            $billAmount = 200;
    
        }
        else if( $response_as_array[0]['garbagetype'] == 'Bio-Medical'){
            $billAmount = 300;
    
        }
        else if( $response_as_array[0]['garbagetype'] == 'Industry/Factory'){
            $billAmount = 400;
    
        }
        else if( $response_as_array[0]['garbagetype'] == 'Agriculture/Foresty'){
            $billAmount = 500;
    
        }
        else if( $response_as_array[0]['garbagetype'] == 'Others'){
            $billAmount = 500;
    
        }

    DB::table('payments')->insert(['customers_id' => $id, 'month'=>$request->month,'year' => $request->year, 'amount'=> $billAmount, 'paymentstatus'=> 'unpaid']);
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
