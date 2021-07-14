<?php

namespace App\Http\Controllers;
use App\Models\Maintenance;
use App\Models\Property;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $property_id = 
        return view('maintenance.index');
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
        $user_id = Auth::user()->id;
        $maintenance = new Maintenance; 
        $maintenance->scenario = $request->input('scenario');
        $maintenance->maintenance_type = $request->input('maintenance_type');
        $maintenance->save();
        $maintenance_id = $maintenance->id;
        DB::table('maintenance_property')->insert([
            'maintenance_id' => $maintenance_id,
            'property_id' => $property_id,
            'user_id'=> $user_id,
            'created_at' => date("Y-m-d"),
            ]);
        $maintenance_property =  Maintenance::findOrfail($maintenance_id);
        $maintenance_property->save();
        return redirect('/maintenance')->with('success','Maintenance Request Sucessfully');
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
        //
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
        //
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
