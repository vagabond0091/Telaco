<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;
Use Redirect;
use Auth;
use DB;
class InquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        return view('inquiry.index')->with('user_id',$user_id);
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
        $property_id = $request->input('data-id');
        $inquiries = DB::table('inquiry_property')
        ->join('inquiries', 'inquiry_property.inquiry_id', '=', 'inquiries.id')
        ->join('users', 'inquiry_property.user_id', '=', 'users.id')
        ->join('properties', 'inquiry_property.property_id', '=', 'properties.id')
        ->where('user_id','=',Auth::user()->id)->where('property_id','=',$property_id)->exists();
        
       if($inquiries == false){
        $inquiry = new Inquiry;
        $inquiry->property_inquiry = 'Pending';
        $inquiry->save();
        $inquiry_id = $inquiry->id;
        // $property_id = $request->input('data-id');
        $user_id = Auth::user()->id;
        $status = 'Pending';
        $properties = DB::table('inquiry_property')->insert([
            'user_id' => $user_id,
            'property_id' => $property_id,
            'inquiry_id' => $inquiry_id,
            'created_at' => date("Y-m-d"),
           
        ]);
        return redirect('/property/'.$property_id)->with('success','Inquired Successfully');
       }
       else{
        return redirect('/property/'.$property_id)->with('error','Already Inquired in this property');
       }
        
        // ->join('users', 'property_user.user_id', '=', 'users.id')
        // ->join('properties', 'property_user.property_id', '=', 'properties.id')
        // ->where('user_id','=',$user_id)
      
        // dd($properties);
        // return redirect('/property/'.$property_id)->with('success','Inquired Successfully');
        // $properties->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('inquiry.calendar');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inquiry = Inquiry::find($id);
        return view('inquiry.update')->with('inquiry',$inquiry);
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
        $property_id = $request->input('property_id');
        $inquiry = Inquiry::findOrFail($id);
        $inquiry->property_inquiry = 'Removed';
        $inquiry->save();
        return redirect('/property')->with('error','Inquiry Deleted Successful');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inquiry = Inquiry::findOrfail($id);
        $inquiry->delete();
        return redirect('/inquiry')->with('error','Inquiry Deleted Succesfully');
    }
    
}
