@extends('layouts.overview.landlord')

@section('content')
<div class="maintenance-container global-mw">
    <div class="maintenance-title text-center mt-5">
        <h2>Request Maintenance</h2>
    </div>
    <div class="works-wrapper row mt-5 align-items-center">
        <div class="half-bleed-image left col-6">
            <img src="{{asset('storage/img/maintenance/maintenance.jpg')}}" alt="">
        </div>
        <div class="how-it-works col-6">
            <div class="description-title text-center ">
                <h3>How it Works?</h3>
            </div>
            <div class="description-info row mt-5">
                <div class="description-categ col-6">
                        <p>Select category for maintenance type</p>
                </div>
                <div class="description-example col-6">
                        <p>e.g: Smoke Detector</p>
                </div>
            </div>
            <div class="description-info row ">
                <div class="description-categ col-6">
                        <p>Type on the scenario about what happened</p>
                </div>
                <div class="description-example col-6">
                        <p>e.g: Smoke detector beeps softly on and off</p>
                </div>
            </div>
        </div>
    </div>
    <div class="full-bleed-description">
        <h2 class="text-center mt-5">Our Goals</h2>
        <p class="goal-text text-center">Our goal is to ensure your property stays in great shape. As a result we encourage you to request a maintenance when  appropriate to prevent larger issues and to preserve the value of the property.</p>
    </div>
    <div class="works-wrapper row mt-5 align-items-center flex-row-reverse">
        <div class="half-bleed-image right col-6">
            <img src="{{asset('storage/img/maintenance/maintenance-fast.jpg')}}" alt="">
        </div>
        <div class="how-it-works goals col-6">
            <div class="description-title text-center ">
                <h3>Get Maintenance Help Fast</h3>
                <div class="description-info  mt-4  ">
                <div class="description-categ goals ">
                        <span><i class="fas fa-tools"></i></span>
                        <span>Create and Send Maintenance Requests</span>
                    
                </div>
                <div class="description-categ goals mt-4">
                    <span><i class="far fa-comment-alt"></i></span>
                    <span>Clear Communication from your landlord</span>
                </div>
            </div>
            </div>
           
        </div>
    </div>
    <div class="maintenance-forms mt-5">
        <div class="form-title text-center ">
            <h2>Log you request here</h2>
        </div>
        {!! Form::open(['action' => 'MaintenanceController@store', 'method' => 'POST','id' => 'maintenance-forms']) !!}
        <div class="form-request row justify-content-center mt-5 align-items-center">
                <div class="request-info col-4">
                    <p>Scenario</p>
                </div>
                <div class="form-categ col-3">
                    <select class="form-select"  aria-label="multiple select example" name="maintenance_type"> 
                        <option selected>Maintenance Type</option>
                        <option value="Door Lock">Door Lock</option>
                        <option value="Sewer">Sewer</option>
                        <option value="Stove Burner">Stove Burner</option>
                        <option value="Smoke Detector">Smoke Detector</option>
                        <option value="Heater">Heater</option>
                        <option value="Dishwasher">Dishwasher</option>
                        <option value="Washer">Washer</option>
                        <option value="Dryer">Dryer</option>
                        <option value="Faucet">Faucet</option>
                        <option value="Toilet">Toilet</option>
                        <option value="Sink">Sink</option>
                        <option value="Refrigerator">Refrigerator</option>
                        <option value="Water">Water</option>
                        <option value="Gas line">Gas line</option>
                    </select>
                </div>
        </div>
        <div class="form-area mt-3 text-center">
            <textarea name="scenario" ></textarea>
        </div>
        <div class="form-button d-flex justify-content-end mt-3">
                <div class="button-wrapper">
                    {{Form::submit('SUBMIT',['class' => 'btn-primary border-0 padding']) }}
                </div>
        </div>
        {!! Form::close() !!}
    </div> 
    

    
</div>



@endsection