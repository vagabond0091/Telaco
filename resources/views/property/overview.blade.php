@extends('layouts.overview.landlord')

@section('content')



    <div class="breadcrumbs-wrapper mt-2">
        <span><a href="#">Home</a></span>&gt;<span>Metro Manila</span>&gt;<span>Muntinlupa</span>&gt;<span>Poblacion</span>
    </div>
    
    <div class="overview-container row justify-content-around mt-3 ">
    
         <div class="overview-info col-9 row">
            <div class="property-info-container col-7">
            
                <div class="property-info">
                    
                
                
                </div>
                <div class="property-features mt-5">
                

                </div>
                <div class="property-description mt-5">
                
                </div>
                <div class="property-landmark mt-5">
                <h6>Nearest Landmark:</h6>
                <div class="features-wrapper row col-7 justify-content-between align-items-center">
                        <div class="features col-6">
                            <span><i class="fas fa-bed"></i></span>
                            <span class="ml-5">1 Bedrooms</span>
                        </div>
                        <div class="features col-6">
                            <span><i class="fas fa-draw-polygon"></i></span>
                            <span class="ml-5">Floor area</span>
                        </div>
                        <div class="features col-6">
                            <span><i class="fas fa-draw-polygon"></i></span>
                            <span class="ml-5">Floor area</span>
                        </div>
                    </div>
                </div>
                <div class="property-virtual-showroom mt-5">
                <h6>Virtual Showroom:</h6>
              
                    <div class="showroom-wrapper">
                    <a href="#"class="btn-success border-0 padding">Enter </a>
                    </div>
                        
                        
                   
                </div>
            </div>
            
        </div>
        
        <div class="overview-inquire col-3">
            <div class="property-owner-info card align-items-center">
                <div class="info-wrapper">
                <div class="owner-info">
                        <div class="name-wrapper d-flex align-items-center">
                            <span><i class="fas fa-user-circle size"></i></span>
                            <span>Christina Canzon</span>
                        </div>

                        <div class="contact-details text-center">
                            <span><i class="fas fa-phone-alt"></i></span>
                            <span class="ml-5">Floor area</span>
                        </div>

                </div>
                <div class="tenant-info mt-4 ">
                    <h2>Are you interested?</h2>
                    <div class="tenant-forms">
                    {!! Form::open(['action' => 'InquiryController@store', 'method' => 'POST','id' => 'inquiry_forms']) !!}
                        {{Form::text('name','',['class' => 'form-control','placeholder'=>'Your name'])}}
                        {{Form::text('phone','',['class' => 'form-control','placeholder'=>'Phone'])}}
                        {{Form::text('email','',['class' => 'form-control','placeholder'=>'Email'])}}
                        <input type="hidden" value="{{$property_id}}" id="data-id" name="data-id">
                        {{Form::submit('Inquire',['class' => 'btn-danger border-0 padding']) }}
                    {!! Form::close() !!}
                    </div>
                </div>
                </div>

                <div class="overview-image">

                </div>
                <div class="overview-details">

                </div>
            </div>
           
        </div> 

    </div>

    <div class="map-wrapper mt-4">
        <div id="overview_map">
                    
        </div>
    </div>    
     
    </div>

    
 
@endsection
