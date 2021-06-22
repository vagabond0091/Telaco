<?php

namespace App\Http\Controllers;
use App\Models\PropertySubType;
use App\Models\PropertyType;
use App\Models\Property;
use App\Models\OtherInformation;
use App\Models\Outdoor;
use App\Models\Indoor;
use DB;
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
        $properties = Property::all();
        // dd($properties);
        // $props = PropertyType::pluck('property_type','id'); 
        return view('property.index')->with('properties',$properties);
    }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $indoor_features = Indoor::where('IndoorFeatures','!=','none')->pluck('IndoorFeatures','id');
        $outdoor_features = Outdoor::where('OutdoorFeatures','!=','none')->pluck('OutdoorFeatures','id');
        // dd($indoor_features);
        $props = PropertyType::pluck('property_type','id');        
        return view('property.create')->with('props',$props)->with('indoor_features',$indoor_features)->with('outdoor_features',$outdoor_features);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'province' => 'required',
            'latitude' => 'required',
            'longtitude' => 'required',
            'showroom_img' =>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'price' => 'required',
            'property_type' => 'required',
            'sub_property' => 'required',
            'bedrooms' => 'required',
            'baths' => 'required',
            'floorarea' => 'required',
            'lot_number' => 'required',
            'subdivision' => 'required',
            'total_room' => 'required',
            'car_space' => 'required',
            'total_floor' => 'required',
           
        ]);

        $property = new Property;
        $property->title = $request->input('title');
        $property->description = $request->input('description');
        $property->province = $request->input('province');
        $property->city = $request->input('city');
        $property->address = $request->input('address');
        $property->latitude = $request->input('latitude');
        $property->longtitude = $request->input('longtitude');
        $destination_path = 'public/img/virtual-showroom';
        $image = $request->file('showroom_img');
        $image_name = $image->getClientOriginalName();
        $path = $image->storeAs($destination_path,$image_name);
        $property->showroom_img = $image_name;
        $property->price = $request->input('price');
        $property->status = false;
        $property->property_type_id = $request->input('property_type');
        $property->property_subtype_id = $request->input('sub_property');
        $property->save();
        $property_id = $property->id;
        $other_info = new OtherInformation;
        $other_info->bedrooms = $request->input('bedrooms');
        $other_info->baths = $request->input('baths');
        $other_info->floorarea = $request->input('floorarea');
        $other_info->lot_number = $request->input('lot_number');
        $other_info->subdivision = $request->input('subdivision');
        $other_info->total_room = $request->input('total_room');
        $other_info->car_space = $request->input('car_space');
        $other_info->total_floor = $request->input('total_floor');
        $other_info->property_id = $property_id;
        $other_info->save();
        $indoor_features_data = $request->indoor_features;
        if($indoor_features_data == null){
            $indoor_id = 3;
                DB::table('indoor_property')->insert([
                    'indoor_id' => $indoor_id,
                    'property_id' => $property_id,
                    'created_at' => date("Y-m-d"),
                ]);
                $indoor =  IndoorFeatures::findOrfail($indoor_id);
                $indoor->save();
        }
        else{
            foreach ($indoor_features_data as $data) {
                    DB::table('indoor_property')->insert([
                    'indoor_id' => $data,
                    'property_id' => $property_id,
                    'created_at' => date("Y-m-d"),
                    ]);
              
            }
            $indoor =  Indoor::findOrfail($data);
            $indoor->save();

        }
        $outdoor_features_data = $request->outdoor_features;
        if($outdoor_features_data == null){
            $outdoor_id = 3;
                DB::table('outdoor_property')->insert([
                    'outdoor_id' => $outdoor_id,
                    'property_id' => $property_id,
                    'created_at' => date("Y-m-d"),
                ]);
                $outdoor =  Outdoor::findOrfail($outdoor_id);
                $outdoor->save();
        }
        else{
            foreach ($outdoor_features_data as $data) {
                    DB::table('outdoor_property')->insert([
                    'outdoor_id' => $data,
                    'property_id' => $property_id,
                    'created_at' => date("Y-m-d"),
                    ]);
              
            }
            $outdoor =  Outdoor::findOrfail($data);
            $outdoor->save();

        }


        return redirect('/property')->with('success','Property Created Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     return view('property.overview');   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $indoor_features = Indoor::where('IndoorFeatures','!=','none')->pluck('IndoorFeatures','id');
        // $outdoor_features = Outdoor::where('OutdoorFeatures','!=','none')->pluck('OutdoorFeatures','id');
        // dd($indoor_features);
        
        
        
       
        $props = PropertyType::pluck('property_type','id');  
        
      
        $other_info = Property::with('Indoor','OtherInformation','Outdoor')->find($id);
          // $outdoor_features_data = OutdoorFeatures::with('Property','outdoorfeature_property')->whereHas('OutdoorFeatures','!=','none')->pluck('OutdoorFeatures','id');
        // $outdoor_features_data = Properties::with('OutdoorFeatures')->get();
        // $other_info = OtherInformation::with('Property')->get()->with('indoor_features',$indoor_features);
        // // dd($other_info);
        // $datas = $other_info->Outdoor;
            // dd($datas);
           
            $outdoor_features = Outdoor::where('OutdoorFeatures','!=','none')->pluck('OutdoorFeatures','id');
            //     //   dd($datas);
            // $newCollection = $outdoor_features->merge($datas);
            // // dd($newCollection);
           
        return view('property.update')->with('props',$props)->with('other_info',$other_info)->with('outdoor_features',$outdoor_features )->with('indoor_features',$indoor_features );
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
        // $this->validate($request,[
        //     'title' => 'required',
        //     'description' => 'required',
        //     'showroom_img' =>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        //     'price' => 'required',
        //     'bedrooms' => 'required',
        //     'baths' => 'required',
        //     'floorarea' => 'required',
        //     'lot_number' => 'required',
        //     'subdivision' => 'required',
        //     'total_room' => 'required',
        //     'car_space' => 'required',
        //     'total_floor' => 'required',
           
        // ]);
        $property = Property::findOrFail($id);
      
        $property->title = $request->input('title');
        $property->description = $request->input('description');
        $destination_path = 'public/img/virtual-showroom';
        $image = $request->file('showroom_img');
        $image_name = $image->getClientOriginalName();
        $path = $image->storeAs($destination_path,$image_name);
        $property->showroom_img = $image_name;
        $property->status = $request->input('status');
        $property->price = $request->input('price');
        $other_info = OtherInformation::where('property_id',$id)->get();
        $other_info->bedrooms = $request->input('bedrooms');
        $other_info->baths = $request->input('baths');
        $other_info->floorarea = $request->input('floorarea');
        $other_info->lot_number = $request->input('lot_number');
        $other_info->subdivision = $request->input('subdivision');
        $other_info->total_room = $request->input('total_room');
        $other_info->car_space = $request->input('car_space');
        $other_info->total_floor = $request->input('total_floor');
        // $property->OtherInformation->property_id = $id;
        // dd($property);
        $property->save();
        $indoor_features_data = $request->indoor_features;
        if($indoor_features_data == null){
                $indoor_id = 3;
                DB::table('indoor_property')->updateOrInsert([
                    'property_id' => $id,
                    'indoor_id' => $indoor_id,
                    'updated_at' => date("Y-m-d"),
                ]);
                $indoor =  Indoor::findOrfail($data);
                $indoor->save();
            
        }
        else{
            foreach ($indoor_features_data as $data) {
                DB::table('indoor_property')->updateOrInsert([
                    'property_id' => $id,
                    'indoor_id' => $data,
                    'updated_at' => date("Y-m-d"),
                ]);
                
            }
            $indoor =  Indoor::findOrfail($data);
            $indoor->save();
        }
        $outdoor_features_data = $request->outdoor_features;
        if($outdoor_features_data == null){
            $outdoor_id = 3;
                DB::table('outdoor_property')->updateOrInsert([
                    'property_id' => $id,
                    'outdoor_id' => $outdoor_id,
                    'created_at' => date("Y-m-d"),
                ]);
                $outdoor =  Outdoor::findOrfail($outdoor_id);
                $outdoor->save();
        }
        else{
            foreach ($outdoor_features_data as $data) {
                    DB::table('outdoor_property')->updateOrInsert([
                    'property_id' => $id,
                    'outdoor_id' => $data,
                    'created_at' => date("Y-m-d"),
                    ]);
              
            }
            $outdoor =  Outdoor::findOrfail($data);
            $outdoor->save();

        }
       

        
        return redirect('/property')->with('success','Property Created Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $property = Property::findOrfail($id);
        $property->delete();
        return redirect('/property')->with('error','Property Deleted Successful');
    }
    
    // public function rentedUpdate(Request $request, $id){
    //     $data = Property::findOrfail($id);

    //     dd($data);


    //     return redirect('/property')->with('success','Property Updated Successfully !');
    // }
}
