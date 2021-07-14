<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\Inquiry;
use App\Models\User;
use Auth;
use DB;
class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        
        $inquiry_id = $request->inquiry_id;
        $schedule = new Schedule;
        $schedule->start = $request->date;
        $schedule->title = $request->title;
        $schedule->save();
        $schedule_id = $schedule->id;
        $user_id = $request->user_id;
        $schedule = DB::table('inquiry_schedule')->insert([
            'schedule_id' => $schedule_id,
            'inquiry_id' => $inquiry_id,
            'user_id' => $user_id,
            'created_at' => date("Y-m-d"),
           
        ]);
        return response()->json([
            'success' => true,
            'message' => 'Save Successfully'
        ]);
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
        $schedule = Schedule::findOrfail($id);
        $schedule->delete();

        return response()->json(["success" => "adopter deleted successfully.",
        "data" => $schedule,"status" => 200]);
    }
    public function getCalendarPerInquiry(){
        $user_id = Auth::user()->id;
    //   $property = DB::table('inquiry_property')
    //   ->join('inquiries', 'inquiry_property.inquiry_id', '=', 'inquiries.id')
    //   ->join('users', 'inquiry_property.user_id', '=', 'users.id')
    //   ->join('properties', 'inquiry_property.property_id', '=', 'properties.id')->where('user_id','=',$user_id)->where('inquiry_id','=',$id)->get();
       
        // return view('inquiry.calendar')->with('inquiry_id',$id)->with('property',$property);
        return view('inquiry.calendar')->with('user_id',$user_id);
    }
   
}
