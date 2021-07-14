@extends('layouts.overview.landlord')

@section('content')



    <div class="breadcrumbs-wrapper mt-2">
        <span><a href="#">Home</a></span>&gt;<span>Metro Manila</span>&gt;<span>Muntinlupa</span>&gt;<span>Poblacion</span>
    </div>

    <div class="overview-container row justify-content-around mt-3 ">
            
         <div class="overview-info col-6 ">
            <div class="property-info-container ">
            
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
                <div class="property-inquiry mt-5">
                <h6>Inquire Property:</h6>
              
                    <div class="showroom-wrapper">
                        {!! Form::open(['action' => 'InquiryController@store', 'method' => 'POST','id' => 'inquiry_forms']) !!}
                        <input type="hidden" value="{{$property_id}}" id="data-id" name="data-id">
                            {{Form::submit('Inquiry',['class' => 'btn-success border-0 padding']) }}
                        {!! Form::close() !!}
                    </div>
                        
                        
                   
                </div>
             
            </div>
                
        </div>
        
        <div class="map-wrapper col-5 mt-4">
            <div id="overview_map">
                        
            </div>
        </div>    
        
    
 
     
    </div>

    
 
@endsection
