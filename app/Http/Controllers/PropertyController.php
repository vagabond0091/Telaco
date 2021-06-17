<?php

namespace App\Http\Controllers;
use App\Models\PropertySubType;
use App\Models\PropertyType;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('property.index');
    }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $property_type_id = $request->input('property_id');
        $props = PropertyType::all('property_type','id');
        // dd($props);
        $subprop = PropertySubType::all('property_subtype','property_type_id')->where('property_type_id',$property_type_id);
        // if()
        // $prop = $property_types[0]->id;
        // dd($prop);
        // dd($property_type_id);
       
        // dd($sub_properties);
  
        // dd($sub_properties);
        return view('property.create')->with('props',$props)->with('subprops',$subprop);
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
