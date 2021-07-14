@extends('layouts.dashboard.app')

@section('content')
 
 <div class="main-wrapper">
    <h3 class="mt-3">Manage Inquiries</h3>
 
       
        @if($inquiries->count() != 0)
        <div class="property-info row mt-4">
            <div class="table-responsive-lg">
                <table class="table table-hover">
                    <thead class="bg-info">
                        <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Inquiry Date</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        @foreach($inquiries as $inquiry)
                        <tr>
                            <th scope="row">{{$inquiry->name}}</th>
                            <td>{{$inquiry->email}}</td>
                            @if($inquiry->contact == NULL)
                                <td>N/A</td>
                            @else
                            <td>{{$inquiry->contact}}</td>
                            @endif
                            <td>{{$inquiry->created_at}}</td>
                            <td class="btn-group inquiry">
                                <!-- <div class=""> -->
                                    <a href="/property/{{$inquiry->property_id}}/edit" class=" btn-secondary btn-style"><i class="far fa-edit fa-lg"></i></a>
                                
                                    {!! Form::open(['action' => ['UserController@inquiry_rejected', $inquiry->id], 'method' => 'POST','class'=> 'pull-right']) !!}
                                    {{Form::hidden('_method','PUT') }}
                                    <input type="hidden" name="property_id" value="{{$inquiry->property_id}}">
                                    <button type="submit" class="btn-danger btn-style"><i class="far fa-trash-alt fa-lg"></i></button>

                                    {!! Form::close() !!}
                                <!-- </div> -->
                            </td>
                        </tr>
                        @endforeach
                    
                    </tbody>
                </table>
            </div>
        </div>  
    
        @else
        <div class="property-info row-mt-4">
            <h5>No Property Inquired yet !</h5>
        </div>
        @endif
    </div>
      
 </div> 
@endsection
