@guest
<h3>asdasd</h3>

@else
    @if(Auth::user()->user_type == NULL)
    <div class="modal fade show" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Please Select User Type</h4>
          
          </div>
          <div class="modal-body text-center">
          {!! Form::open(['action' => ['UserController@updateUser', Auth::user()->id], 'method' => 'POST','class'=> 'pull-right']) !!}
          {{Form::hidden('_method','PUT') }}
          <input type="radio" id="customRadio1" name="user_type" class="custom-control-input" value="landlord">
          <label class="custom-control-label" for="customRadio1">Landlord</label>
            <span class="seperated">OR</span>
          <input type="radio" id="customRadio1" name="user_type" class="custom-control-input" value="tenant">
          <label class="custom-control-label" for="customRadio1">Tenant</label>
          </div>
          <div class="modal-footer">
        
            <!-- <button type="button" class="btn btn-primary">Save</button> -->
            {{Form::submit('Save',['class' => 'btn btn-primary border-0 padding']) }}
          {!! Form::close() !!} 
          </div>
        </div>
      </div>
    </div>
    @endif
@endguest