@extends('layouts.overview.landlord')

@section('content')
<div class="breadcrumbs-wrapper mt-2">
        <span><a href="#">Home</a></span>&gt;<span>Metro Manila</span>&gt;<span>Muntinlupa</span>&gt;<span>Poblacion</span>
</div>
<div class="property-search-wrapper row">
        <div class="search-map col-5">
            <div id="search-map" class="test">

            </div>
        </div>
        <div class="property-search-info col-6 ">
                <div class="search-btn-wrapper btn-group">
                    <div class="filter-wrapper col-6">
                         <a href="#" class="btn-primary ">All Filter</a>    
                    </div>
                    <div class="search-wrapper col-12">
                        <span>
                        <input type="text" name="search" id="search-data" placeholder="   Enter Barangay">
                        </span>
                        
                        <span>
                            <button><i class="fas fa-search"></i></button>
                        </span>
                    </div>
                </div>
                <div class="search-info row mt-3">
                   
                        <!-- <div class="property-image-wrapper col-3">
                                <img src="#" alt="Image">
                        </div>
                        <div class="info col-4">
                            <h6>title</h6>
                            <p><b>16000</b></p>
                            <p>Address</p>
                            <button type="submit" class="btn-primary button-style">View Details</button>
                        </div>
                        <div class="ratings-wrapper col-3">
                                <p> ratings here</p>
                        </div> -->
                    </div>
                </div>
               
        </div>
       
</div>
@endsection