<?php

namespace App\Http\Controllers;
use App\Models\PropertySubType;
use App\Models\Property;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $property_type_id = $request->get('property_id');
        $sub_properties = PropertySubType::all()->where('property_type_id',$property_type_id);

        return response()->json($sub_properties);
    }
    public function subproperty(Request $request){
        $property_type_id = $request->get('property_id');
        return view('property.create')->with('property_type_id',$property_type_id);
    }
    public function rentedUpdate(Request $request, $id){
        $rented_property = Property::findOrfail($id);

        $rented = true;
        $rented_property->status = $rented;
        $rented_property->save();

 
        return redirect('/property')->with('success','Property Updated Successfully !');
    }
    public function overview_api($id)
    {   
        $property = Property::with('Indoor','OtherInformation','Outdoor')->findOrfail($id);
        // dd($property);
        return response()->json($property);   
    }
    public function search(){
        $property = Property::with('Indoor','OtherInformation','Outdoor')->get();

        return response()->json($property);
    }

}
