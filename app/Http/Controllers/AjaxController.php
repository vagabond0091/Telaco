<?php

namespace App\Http\Controllers;
use App\Models\PropertySubType;
use App\Models\Property;
use App\Models\Inquiry;
use App\Models\User;
use Auth;
use DB;
use Illuminate\Http\Request;
// use Input;
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
    public function search(Request $request){
        $search =  $request->input('search-collection');
        // dd($search);
        $property = Property::with('Indoor','OtherInformation','Outdoor')->where('barangay','LIKE','%'.$search.'%')->get();

        return response()->json($property);
    }
   
    public function propertyCollection(){
        $properties = Property::with('Indoor','OtherInformation','Outdoor')->where('status',0)->get();
        return response()->json($properties);
    }
    public function getAllSchedule($id){
        // dd($id);
        $schedule_data = DB::table('inquiry_schedule')
    ->select(['title','start','schedule_id'])
    ->join('schedules', 'inquiry_schedule.schedule_id', '=', 'schedules.id')
    ->join('users', 'inquiry_schedule.user_id', '=', 'users.id')
    ->join('inquiries','inquiry_schedule.inquiry_id', '=', 'inquiries.id')->where('inquiry_schedule.user_id',$id)->get();
  
   return response()->json($schedule_data);
}
}
