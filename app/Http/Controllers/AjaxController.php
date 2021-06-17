<?php

namespace App\Http\Controllers;
use App\Models\PropertySubType;
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

  

}
