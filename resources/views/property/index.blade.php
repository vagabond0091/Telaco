@extends('layouts.dashboard.app')

@section('content')
 
 <div class="main-wrapper">
    <h6 class="mt-3">Manage Properties</h6>
 
        <div class="property-container d-flex  mt-4" id="btn-wrapper">
         
            <div class="form-group mb-4">
                <a href="/property/create" class="btn-primary dropdown-style" >Add Property</a>
<!--                
                <ul class="card dropdown  " id="dropdown">
                    <div class="dropdown-container">
                        <li class="sub-dropdown"><input type="checkbox" class="checkbox" id="check">Condo2</li>
                        <div class="wrapper_dropdown">
                                    <ul class="droplist">

                                        <li class="brand_label">
                                            <a href="#" title="Flats">Flats<span class="button"></span></a>

                                        </li>

                                        <li class="brand_label">
                                            <a href="#" title="Heels">Heels<span class="button"></span></a>

                                        </li>

                                        <li class="brand_label">
                                            <a href="#" title="Boots &amp; Booties">Boots &amp; Booties<span class="button"></span></a>

                                        </li>

                                        <li class="brand_label">
                                            <a href="#" title="Sandals">Sandals<span class="button"></span></a>

                                        </li>

                                        <li class="brand_label">
                                            <a href="#" title="A2">A2<span class="button"></span></a>

                                        </li>

                                        <li class="brand_label">
                                            <a href="#" title="A2 Sandals">A2 Sandals<span class="button"></span></a>

                                        </li>

                                        <li class="brand_label">
                                            <a href="#" title="Boots &amp; Booties">Boots &amp; Booties<span class="button"></span></a>

                                        </li>


                                    </ul>
                        </div>
                    </div>
                    <div class="dropdown-container">
                        <li class="sub-dropdown"><input type="checkbox" class="checkbox" id="check">Condo2</li>
                        <div class="wrapper_dropdown">
                                    <ul class="droplist">

                                        <li class="brand_label">
                                            <a href="#" title="Flats">Flats<span class="button"></span></a>

                                        </li>

                                        <li class="brand_label">
                                            <a href="#" title="Heels">Heels<span class="button"></span></a>

                                        </li>

                                        <li class="brand_label">
                                            <a href="#" title="Boots &amp; Booties">Boots &amp; Booties<span class="button"></span></a>

                                        </li>

                                        <li class="brand_label">
                                            <a href="#" title="Sandals">Sandals<span class="button"></span></a>

                                        </li>

                                        <li class="brand_label">
                                            <a href="#" title="A2">A2<span class="button"></span></a>

                                        </li>

                                        <li class="brand_label">
                                            <a href="#" title="A2 Sandals">A2 Sandals<span class="button"></span></a>

                                        </li>

                                        <li class="brand_label">
                                            <a href="#" title="Boots &amp; Booties">Boots &amp; Booties<span class="button"></span></a>

                                        </li>


                                    </ul>
                        </div>
                    </div>
                    <div class="dropdown-container">
                        <li class="sub-dropdown">Hotel</li>
                        <div class="wrapper_dropdown">
                                    <ul class="droplist">

                                        <li class="brand_label">
                                            <a href="#" title="Flats">5star<span class="button"></span></a>

                                        </li>

                                        <li class="brand_label">
                                            <a href="#" title="Heels">Heels<span class="button"></span></a>

                                        </li>

                                        <li class="brand_label">
                                            <a href="#" title="Boots &amp; Booties">Boots &amp; Booties<span class="button"></span></a>

                                        </li>

                                        <li class="brand_label">
                                            <a href="#" title="Sandals">Sandals<span class="button"></span></a>

                                        </li>

                                        <li class="brand_label">
                                            <a href="#" title="A2">A2<span class="button"></span></a>

                                        </li>

                                        <li class="brand_label">
                                            <a href="#" title="A2 Sandals">A2 Sandals<span class="button"></span></a>

                                        </li>

                                        <li class="brand_label">
                                            <a href="#" title="Boots &amp; Booties">Boots &amp; Booties<span class="button"></span></a>

                                        </li>


                                    </ul>
                        </div>
                    </div>
                    
                       
                <div class="dropdown-container">
                    <li class="sub-dropdown">Condo</li>
                    <div class="wrapper_dropdown">
                                <ul class="droplist">

                                    <li class="brand_label">
                                        <a href="#" title="Flats">Flats<span class="button"></span></a>

                                    </li>

                                    <li class="brand_label">
                                        <a href="#" title="Heels">Heels<span class="button"></span></a>

                                    </li>

                                    <li class="brand_label">
                                        <a href="#" title="Boots &amp; Booties">Boots &amp; Booties<span class="button"></span></a>

                                    </li>

                                    <li class="brand_label">
                                        <a href="#" title="Sandals">Sandals<span class="button"></span></a>

                                    </li>

                                    <li class="brand_label">
                                        <a href="#" title="A2">A2<span class="button"></span></a>

                                    </li>

                                    <li class="brand_label">
                                        <a href="#" title="A2 Sandals">A2 Sandals<span class="button"></span></a>

                                    </li>

                                    <li class="brand_label">
                                        <a href="#" title="Boots &amp; Booties">Boots &amp; Booties<span class="button"></span></a>

                                    </li>


                                </ul>
                    </div>
                    </div>
                    
                    </ul>
                </div>  -->
            <!-- <div class="form-group sub-type"> -->
                <!-- <label for="select" class="col-4 col-form-label">Select</label> 
                <select class="form-select"  aria-label="multiple select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                </select> -->
            </div>
           
                
        
        </div>
    @if($properties->count() != 0)
    @foreach($properties as $property) 
       <div class="property-info row mt-4">
               
                <div class="card col-4 image">
                    <img src="{{  asset('storage/img/virtual-showroom/'.$property->showroom_img)}}" alt="property-image">
                </div>
                <div class="col-5">
                   <div class="property-info-wrapper">
                        <span class="col-3">Title:</span>
                        <span  class="col-9"><a href="/property/{{$property->id}}">{{$property->title}}</a></span>
                   </div>
                   <div class="property-info-wrapper">
                        <span class="col-3" >Location:</span>
                        <span class="col-9">{{$property->address}}&nbsp;{{$property->city}}</span>
                   </div>
                   <div class="property-info-wrapper">
                        <span  class="col-3">SKU:</span>
                        <span  class="col-9">1 Room inside family owned</span>
                   </div>
                   <div class="property-info-wrapper">
                        <span class="col-3">Price:</span>
                        <span  class="col-9">{{$property->price}}</span>
                   </div>
                   <div class="property-info-wrapper">
                        <span class="col-3" >Created at</span>
                        <span  class="col-9">{{$property->created_at}}</span>
                   </div>
                   <div class="property-info-wrapper">
                        <span class="col-3" >Updated at</span>
                        <span  class="col-9">{{$property->updated_at}}</span>
                   </div>
                   <div class="property-info-wrapper mt-3">
                        <div class="views col-12"> 
                                <span>
                                    {!! Form::open(['action' => ['UserController@landlordInquiry',$property->id], 'method' => 'POST','class'=> 'pull-right d-inline-block']) !!}
                                        <input type="hidden" name="property-data" value="{{$property->id}}">
                                     
                                        <button class="btn-secondary border-0 padding "> View Inquiry
                                        </button> 
                                    {{Form::hidden('_method','PUT') }} 
                                    {!! Form::close() !!} 
                                </span>   
                                
                        </div>
                    </div>
                 
                </div>
                <div class="col-3">
                    <div class="property-status-wrapper text-center">
                      
                        <span><b>Status</b></span>
                        @if($property->status == 0)
                        <span>Vaccant</span>
                        @else
                            <span>Rented</span>
                        @endif
                        </div>
                   
                    <div class="btn-group d-flex justify-content-center">
                        <a href="/property/{{$property->property_id}}/edit" class=" btn-secondary btn-style"><i class="far fa-edit fa-lg"></i></a>
                     
                        {!! Form::open(['action' => ['PropertyController@destroy', $property->property_id], 'method' => 'POST','class'=> 'pull-right']) !!}
                        {{Form::hidden('_method', 'DELETE') }}
                         <button type="submit" class="btn-danger btn-style"><i class="far fa-trash-alt fa-lg"></i></button>

                        {!! Form::close() !!}
                    </div>
                    <div class="btn-rented  d-flex justify-content-center mt-3 ">
                        {!! Form::open(['action' => ['AjaxController@rentedUpdate', $property->property_id], 'method' => 'POST','class'=> 'pull-right']) !!}
                        {{Form::hidden('_method','PUT') }}
                        @if($property->status == false)
                            <button class="btn-secondary border-0 padding">Mark as rented</button> 
                        @endif
                        {!! Form::close() !!} 
                    </div>    
                  
                </div>
        </div>  
        @endforeach 
    @else
    
        <div class="property-info row-mt-4">
            <h2>No Property yet !</h2>
        </div>
    @endif
    </div>
      
 </div> 
@endsection
