@extends('layouts.dashboard.app')

@section('content')
 
 <div class="main-wrapper">
    <h3 class="mt-3">Manage Inquiries</h3>
 
       
        @if($inquiries->count() != 0)
        <div class="property-info row mt-4">
            <div class="table-responsive-lg">
                <table class="table">
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
                            @if($inquiry->property_inquiry != 'Removed')
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
                                    <div class="is_Accepted">
                                    {!! Form::open(['action' => ['UserController@is_Accepted', $inquiry->id], 'method' => 'POST','class'=> 'pull-right']) !!}
                                        {{Form::hidden('_method','PUT') }}
                                        <input type="hidden" name="property_id" value="{{$inquiry->property_id}}">
                                        <button type="submit" class="btn-success btn-style" >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                                        </svg></i></button>
                                    {!! Form::close() !!}
                                    </div>
                                    <div class="is_Removed">
                                    {!! Form::open(['action' => ['InquiryController@update', $inquiry->id], 'method' => 'POST','class'=> 'pull-right']) !!}
                                        {{Form::hidden('_method','PUT') }}
                                        <input type="hidden" name="property_id" value="{{$inquiry->property_id}}">
                                        <button type="submit" class="btn-danger btn-style" ><i class="far fa-trash-alt fa-lg"></i></button>

                                        {!! Form::close() !!}
                                    </div>
                                        
                                    <!-- </div> -->
                                </td>
                            </tr>
                            @else
                            
                            @endif
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
