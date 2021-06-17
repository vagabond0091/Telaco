@extends('layouts.dashboard.app')

@section('content')
 
 <div class="back-button">
    <a href="#"><i class="material-icons btnSize">navigate_before</i></a>
   
 </div>
 <div class="main-wrapper">
    <h6 class="mt-3">What type of property do you want to offer?</h6>

    <!-- Forms will be here -->
    <div class="property-container d-flex  mt-4" id="btn-wrapper">
         
         <div class="form-group mb-4">
         {!! Form::open(['action' => 'PropertyController@create', 'method' => 'GET']) !!}  
            {{Form::label('property_type','Property Type',['class' =>'col-4 col-form-label'])}} 
            <select name="property_type" id="selected-data" class="form-select col-4">
            <option selected disabled>Select Property</option>
            @foreach($props as $prop )
                  
                  <option value={{$prop->id}}>{{$prop->id == old($prop->id) ? 'selected' : $prop->property_type}}</option>
            @endforeach
            </select>
        
         {!! Form::close() !!}
            
         </div> 
         <div class="form-group sub-type">
        
         
         {{Form::label('property_type','SubProperty Type',['class' =>'col-4 col-form-label'])}} 
         <select name="sub_property" id="datas" class="form-select min-w">
            <option selected disabled>Select Sub Property</option>
            @foreach($subprops as $subprop )
                  
                  <option value={{$subprop->property_type_id}}>{{$subprop->property_subtype}}</option>
            @endforeach
         </select>
        
         
         </div>   
            
       
   </div>
   <div class="mb-3 col-10">
      <label for="exampleFormControlInput1" class="form-label">Title</label>
      <input type="email" class="form-control  rounded-input"  >
   </div>
   <div class="mb-3 col-10">
   <label for="exampleFormControlTextarea1" class="form-label">Description</label>
   <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
   </div>
   
   <div class="addtl-info mt-5"> 
         <h5>Add Key Information</h5>
         <p>Please provide further key information such as the price, number of rooms. <br><span> Remember, more precise the information - more qualified leads</span></p>
   </div>
   <div class="row mt-4">
      <div class="col-2">
         <label for="" class="mb-3">Bedrooms *</label>
         <input type="text" class="form-control" >
      </div>
      <div class="col-2">
         <label for="" class="mb-3">Baths</label>
         <input type="text" class="form-control" >
      </div>
      <div class="col-2">
      <label for="" class="mb-3">Floor Area</label>
      <input type="text " class="form-control" >
    </div>
    <div class="col-4">
      <label for="" class="mb-3">Block and Lot/Unit/Floor Number</label>
      <input type="text" class="form-control" >
    </div>
    <div class="col-4 mt-5">
         <label for="" class="mb-3">Subdivision Name</label>
         <input type="text" class="form-control" >
    </div>
   </div>
   <div class="row mt-5">
      <div class="col-2">
         <label for="" class="mb-3">Rooms (total)</label>
         <input type="text" class="form-control" >
      </div>
      <div class="col-2">
         <label for="" class="mb-3">Car Spaces</label>
         <input type="text" class="form-control" >
      </div>
      <div class="col-2">
         <label for="" class="mb-3">Total Floors</label>
         <input type="text " class="form-control" >
      </div>
    <div class="col-4">
      <label for="" class="mb-3">Sqm Range</label>
      <input type="text" class="form-control" >
    </div>
   </div>
   <div class="row mt-5">
      <div class="col-4">
         <label for="" class="mb-3">Price</label>
         <input type="text" class="form-control" >
      </div>
     
   </div>
   <div class="addtl-info mt-5"> 
         <h5>Upload Photos for Virtual Showroom</h5>
         <p>Users looking for property ignore properties without photos. We'll make your property standout. <span class="d-block">via Virtual Showroom by uploading photos!</span></p>
         <div class="form-group ">
          
            <input type="file" class="form-control   rounded-input-file w-25" id="exampleFormControlFile1">
         </div>
   </div>
   <div class="addtl-info mt-5"> 
         <h5>Upload Photos for Virtual Showroom</h5>
         <p>Users looking for property ignore properties without photos. We'll make your property standout. <span class="d-block">via Virtual Showroom by uploading photos!</span></p>
         <div class="mb-3 col-10">
            <label for="exampleFormControlInput1" class="form-label">Province</label>
            <input type="email" class="form-control  "  >
         </div>
         <div class="mb-3 col-10">
            <label for="exampleFormControlInput1" class="form-label">City</label>
            <input type="email" class="form-control  "  >
         </div>
         <div class="mb-3 col-10">
            <label for="exampleFormControlInput1" class="form-label">Barangay</label>
            <input type="email" class="form-control  "  >
         </div>
         <div class="mb-3 col-10">
            <label for="exampleFormControlInput1" class="form-label">Address</label>
            <input type="email" class="form-control  "  >
         </div>
   </div>
   <div class="row mt-5">
         <div class="col-4">
            <label for="" class="mb-3">Latitude</label>
            <input type="text " class="form-control" >
         </div>
         <div class="col-4">
            <label for="" class="mb-3">Longtitude</label>
            <input type="text" class="form-control" >
         </div>
   </div>
   <div class="addtl-info mt-5 col-10"> 
         <h5>Tell users more about your property</h5>
         <p>Why is your property so great? Tell us more about your property so that property seekers can <span class="d-block">learn even more about your offer</span></p>
         <div class="features-subtitle">
            <p><b>Indoor Features</b></p>
         </div>
         <div class="form-check form-check-inline">
            
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1">Alarm System</label>
         </div>
         <div class="form-check form-check-inline ml-2">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">Built-in wardrobes</label>
         </div>
         <div class="form-check form-check-inline ml-2">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">Gym</label>
         </div>
         <div class="form-check form-check-inline ml-2">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">Floorboards</label>
         </div>
         <div class="form-check form-check-inline ml-2 ">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">BroadBand internet availabe</label>
         </div>
         <div class="form-check form-check-inline ml-2 mt-3">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">Air conditioning</label>
         </div>
         <div class="form-check form-check-inline ml-2">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">Entertainment</label>
         </div>
         <div class="form-check form-check-inline ml-2">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">Lounge</label>
         </div>
         <div class="form-check form-check-inline ml-2">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">Study Room</label>
         </div>
         <div class="form-check form-check-inline ml-2">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">Wifi</label>
         </div>
         <div class="features-subtitle mt-3">
            <p><b>Outdoor Features</b></p>
         </div>
         <div class="form-check form-check-inline">
            
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1">Swimming Pool</label>
         </div>
         <div class="form-check form-check-inline ml-2">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">Tennis court</label>
         </div>
         <div class="form-check form-check-inline ml-2">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">Balcony</label>
         </div>
         <div class="form-check form-check-inline ml-2">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">Fully fenced</label>
         </div>
         <div class="form-check form-check-inline ml-2">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">Basketball Court</label>
         </div>
         <div class="form-check form-check-inline ml-2">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">Jogging Path</label>
         </div>
         <div class="form-check form-check-inline ml-2">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">Parks</label>
         </div>
        
        
   </div>
   <div class="addtl-info mt-5 col-10"> 
         <h5>Please review your contact details</h5>
         <p>Make sure your details are updated so our users can easily contact you at the right channel</p>
       
         <div class="col-md-9 ">
           <div class="card  mb-4 ">
                  <div class="card-body ">
                   <div class="w-100 d-flex align-items-center">
                           <div class="profile-image-wrapper d-inline-block ">
                              <img src="" alt="profile picture">
                           </div>
                           <div class="info-use  d-inline-block">
                              <h6>Name of user</h6>
                              <p class="email">google@gmail.com</p>
                           </div>     
                    </div>
                    <div class="mobile-number mt-4">
                    <p>Mobile Phone:</p>
                    <div class="form-check form-check-inline ml-2">
                       
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">09674323831</label>
                     </div>
                    </div>
                  </div>
                </div>
                <div class="btn-group mt-3">
                  <a href="#" class="btn btn-primary">Publish Property</a>
                  <a href="#" class="btn btn-secondary">Cancel</a>
                </div>
                
        </div>
   </div>
      
 </div> 
@endsection
