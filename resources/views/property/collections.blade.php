@extends('layouts.overview.landlord')

@section('content')
<div class="search-content-wrapper row justify-content-between align-items-center">
    <div class="collection-title col-8">
        <h2>List of Property</h2>
    </div>
    <div class="collection-search col-4">
        
     
    <div class="search-btn-wrapper btn-group">
                    <div class="filter-wrapper col-6">
                             
                    </div>
                    <div class="search-wrapper col-12">
                    {!! Form::open(['action' => 'PropertyController@search', 'method' => 'GET','collection_id' => 'collection_forms']) !!}
                        <span>
                        <input type="text" name="search-collection" id="search-data" placeholder="  Enter Barangay">
                        </span>
                        
                        <span>
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </span>
                    {!! Form::close() !!}
                    </div>
                </div>
       
       
    </div>
</div>
<div class="collection-container row">

</div>



@endsection