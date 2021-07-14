<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Inquiry;
use Auth;
use DB;
use Redirect;
class UserController extends Controller
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
    public function create(Request $request )
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
    public function updateUser(Request $request){
        $user =  User::findOrFail(Auth::user()->id);
     
        $user->user_type = $request->user_type;
       
        $user->save();
        return redirect('/')->with('success','Updated Successfully');
    }
    public function userInquired($id){
        $inquiries = DB::table('inquiry_property')
        ->join('inquiries', 'inquiry_property.inquiry_id', '=', 'inquiries.id')
        ->join('users', 'inquiry_property.user_id', '=', 'users.id')
        ->join('properties', 'inquiry_property.property_id', '=', 'properties.id')
        ->where('user_id','=',$id)->paginate(6);
        // dd($inquiries);
        return response()->json($inquiries);
    }
    public function landlordInquiry(Request $request){
            
            $property_id = $request->input('property-data');
            $inquiries = DB::table('inquiry_property')
            // ->select('')
            ->join('users', 'inquiry_property.user_id', '=','users.id')
            ->join('properties', 'inquiry_property.property_id', '=', 'properties.id')
            ->join('inquiries','inquiry_property.inquiry_id', '=', 'inquiries.id')->where('property_id',$property_id)->get();
            
        return view('inquiry.update')->with('inquiries',$inquiries);
    }
    public function is_Accepted(Request $request, $id)
    {
        $property_id = $request->input('property_id');
        $inquiry = Inquiry::findOrFail($id);
        $inquiry->property_inquiry = 'Accepted';
        $inquiry->save();
        return redirect('/property')->with('success','Inquiry Accepted Successful');        
    }
  
}
