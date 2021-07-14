@extends('layouts.overview.landlord')

@section('content')
<div class="inquiries-container global-mw">
    <div class="inquiry-title">
        <h2>Inquired Properties</h2>
        <p>Here you can see the status of each properties you've inquired</p>
    </div>
    <div class="inquiry-wrapper d-flex mt-4">
      <input type="hidden" value="{{$user_id}}" id="user_id">
    </div>
   

</div>



</div>
<div class="modal fade schedule" id="calendarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Schedule to Visit </h5>
        <h1 id="title"></h1>
        <a href="#" class="close">
                <span aria-hidden="true">&times;</span>
                </a>
      
      </div>
      <div class="modal-body">
      <section class="calendar-wrapper">
        <div class="calendar-container">
            <div id="calendar" ></div>

           
        </div>
        <div class="schedule-forms mt-3 text-align-right">
        <div id="errorMessage" class=""></div>
          <form id="scheduleVisit">
            @csrf
            <div class="modal-footer">
            <input type="hidden" class="form-control" id="date" name="date">
            <input type="hidden" class="form-control" id="property-title" name="title"  >
            <input type="hidden" class="form-control" id="inquiry" name="inquiry_id"  >
            <button type="submit" class="btn-primary border-0 padding">Save</button>
            </div>
          </form>
            </div>
    </section>
     
    </div>
  </div>
</div>



@endsection