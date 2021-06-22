@extends('layouts.dashboard.app')

@section('content')
 
 <div class="back-button">
    <a href="#"><i class="material-icons btnSize">navigate_before</i></a>
   
 </div>
 <div class="main-wrapper">
    <h6 class="mt-3">What type of property do you want to offer?</h6>

    <!-- Forms will be here -->
    {!! Form::open(['action' => ['PropertyController@update',$other_info->id], 'method' => 'POST','enctype' =>'multipart/form-data']) !!}
    <div class="property-container d-flex  mt-4" id="btn-wrapper">
         

         <div class="form-group ml-5 mt-2">
         {{Form::label('property_type','Rented',['class' =>'col-4 col-form-label'])}} 
         <select name="status"  class="form-select min-w mt" >
            @if($other_info->status == 1)
            <option value="{{$other_info->status}}">Rented</option>
            <option value="0">Vaccant</option>
           @else
           <option value="{{$other_info->status}}">Vaccant</option>
           <option value="1">Rented</option>
           @endif
         </select>
         </div>
            
       
   </div>
   <div class="mb-3 col-10">
            {{Form::label('title','Title:',['class'=>'form-label'])}}
            {{Form::text('title',$other_info->title,['class' => 'form-control rounded-input', 'placeholder' => 'Ex.'])}}
   </div>
   <div class="mb-3 col-10">
   
      {{Form::label('description','Description:',['class'=>'form-label'])}}
      {{Form::textarea('description',$other_info->description,['class' => 'form-control ', 'rows' => '8'])}}
   </div>
   
   <div class="addtl-info mt-5"> 
         <h5>Add Key Information</h5>
         <p>Please provide further key information such as the price, number of rooms. <br><span> Remember, more precise the information - more qualified leads</span></p>
   </div>
   <div class="row mt-4">
      <div class="col-2">
         
         {{Form::label('bedrooms','Bedrooms',['class'=>'mb-3'])}}
         {{Form::text('bedrooms',$other_info->OtherInformation->bedrooms,['class' => 'form-control'])}}
      </div>
      <div class="col-2">
         {{Form::label('baths','Baths',['class'=>'mb-3'])}}
         {{Form::text('baths',$other_info->OtherInformation->baths,['class' => 'form-control'])}}
      </div>
      <div class="col-2">
   
         {{Form::label('floorarea','Floor Area',['class'=>'mb-3'])}}
         {{Form::text('floorarea',$other_info->OtherInformation->floorarea,['class' => 'form-control'])}}
    </div>
    <div class="col-4">
      {{Form::label('lot_number','Lot Number',['class'=>'mb-3'])}}
      {{Form::text('lot_number',$other_info->OtherInformation->lot_number,['class' => 'form-control'])}}
    </div>
    <div class="col-4 mt-5">
         {{Form::label('subdivision','Subdivision',['class'=>'mb-3'])}}
         {{Form::text('subdivision',$other_info->OtherInformation->subdivision,['class' => 'form-control'])}}
    </div>
   </div>
   <div class="row mt-5">
      <div class="col-2">
         {{Form::label('total_room','Rooms (total)',['class'=>'mb-3'])}}
         {{Form::text('total_room',$other_info->OtherInformation->total_room,['class' => 'form-control'])}}
      </div>
      <div class="col-2">
      {{Form::label('car_space','Car Spaces',['class'=>'mb-3'])}}
         {{Form::text('car_space',$other_info->OtherInformation->car_space,['class' => 'form-control'])}}
      </div>
      <div class="col-2">
      {{Form::label('total_floor','Total Floors',['class'=>'mb-3'])}}
         {{Form::text('total_floor',$other_info->OtherInformation->total_floor,['class' => 'form-control'])}}
      </div>
    
   </div>
   <div class="row mt-5">
      <div class="col-4">
      {{Form::label('price','Price',['class'=>'mb-3'])}}
         {{Form::text('price',$other_info->price,['class' => 'form-control'])}}
      </div>
     
   </div>
   <div class="addtl-info mt-5"> 
         <h5>Upload Photos for Virtual Showroom</h5>
         <p>Users looking for property ignore properties without photos. We'll make your property standout. <span class="d-block">via Virtual Showroom by uploading photos!</span></p>
         <div class="form-group ">
            {{Form::file('showroom_img',['id' => 'showroom_img','class' => 'form-control rounded-input-file w-25'])}}

         </div>
         <h5 class="mt-3">Your Virtual Showroom Image</h5>
         <div class=" card col-4 image mt-3">
                    
                    <img src="{{  asset('storage/img/virtual-showroom/'.$other_info->showroom_img)}}" alt="property-image">
        </div>
   </div>
  
  
   <div class="addtl-info mt-5 col-10"> 
         <h5>Tell users more about your property</h5>
         <p>Why is your property so great? Tell us more about your property so that property seekers can <span class="d-block">learn even more about your offer</span></p>
         <div class="features-subtitle">
            <p><b>Indoor Features</b></p>
            @foreach ($indoor_features as $id => $indoor_feature)
               <div class="form-check form-check-inline">
                  {!! Form::checkbox('indoor_features[]',$id,null,['class' => 'form-check-input','id' => 'data-id'])!!}
                  {!! Form::label('outdoor_feature',$indoor_feature,['class' => 'form-check-label'])!!}
               </div>
         @endforeach
        
        
       
         
        
         <div class="features-subtitle mt-3">
            <p><b>Outdoor Features</b></p>
          @foreach ($outdoor_features as $id => $outdoor_feature)
               <div class="form-check form-check-inline">
                  {!! Form::checkbox('outdoor_features[]',$id,null,['class' => 'form-check-input','id' => 'data-id'])!!}
                  {!! Form::label('outdoor_feature',$outdoor_feature,['class' => 'form-check-label'])!!}

               </div>
         @endforeach
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
                {{Form::hidden('_method','PUT') }}
                  {{Form::submit('Publish Property',['class' => 'btn-primary border-0 padding']) }}
                  <a href="/property" class="btn-secondary border-0 padding">Cancel</a>
                </div>
                
        </div>
   </div>
      
   {!! Form::close() !!}
 </div> 
 
@endsection
