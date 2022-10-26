<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Salary;
use App\Models\Driver;
use DB;
use Carbon\Carbon;



class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $subtractedTime = Carbon::now()->subSeconds(1);
        $timeNow = Carbon::now();
        $alldata = Salary::all(); 
        $salarydata = DB::table('salaries')->leftJoin('drivers', 'salaries.driver_id', '=', 'drivers.id')->get();
        return view('admin.salary.viewsalary', compact('salarydata','timeNow','alldata'));
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
        $itemWithDriverId = Driver::findOrFail($id);
        $itemWithSalaryId = Salary::findOrFail($id);
        // print_r($itemWithId);
        return view('admin.salary.edit', compact('itemWithDriverId','itemWithSalaryId'));
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
        $itemWithDriverId = Driver::findOrFail($id); 
        $itemWithSalaryId = Salary::findOrFail($id);
    
            $itemWithDriverId-> update([
                'name'=> $request->name,
                'phone'=> $request->phone,
                'email'=> $request->email,
                'address'=> $request->address,
            ]);
            
            $itemWithSalaryId-> update([
            'salary'=> $request->salary,
            ]);

            return redirect()->route('admin.salary.index');
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
