@extends('layouts.overview.landlord')

@section('content')
<div class="inquiries-container global-mw">
  <input type="hidden" name="user_id" value="{{$user_id}}" id="user_id">
<section class="calendar-wrapper">
        <div class="calendar-container">
            <div id="list-schedules"></div>
        </div>
</section>

</div>




@endsection