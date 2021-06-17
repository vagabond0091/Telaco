    @extends('layouts.dashboard.app')

@section('content')
 
 <div class="main-wrapper">
    <h6 class="mt-3">Manage Properties</h6>
 

        <!-- Forms will be here -->
        <div class="property-container d-flex  mt-4" id="btn-wrapper">
            
            <div class="form-group mb-4">
                <a href="#" class="btn-secondary dropdown-style" id="multiple-click-dropdown-options">Property Type</a>
               
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
                </div> 
            <div class="form-group sub-type">
                <label for="select" class="col-4 col-form-label">Select</label> 
                <select class="form-select"  aria-label="multiple select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                </select>
            </div>
           
                
        
        </div>
        <div class="property-info row mt-4">
                <div class=" card col-4">
                    <img src="" alt="asdasd">
                </div>
                <div class="col-5">
                   <div class="property-info-wrapper">
                        <span class="col-3">Title:</span>
                        <span  class="col-9">1 Room inside family owned</span>
                   </div>
                   <div class="property-info-wrapper">
                        <span class="col-3" >Location:</span>
                        <span class="col-9">1 Room inside family owned</span>
                   </div>
                   <div class="property-info-wrapper">
                        <span  class="col-3">SKU:</span>
                        <span  class="col-9">1 Room inside family owned</span>
                   </div>
                   <div class="property-info-wrapper">
                        <span class="col-3">Price:</span>
                        <span  class="col-9">1 Room inside family owned</span>
                   </div>
                   <div class="property-info-wrapper">
                        <span class="col-3" >Created at</span>
                        <span  class="col-9">1 Room inside family owned</span>
                   </div>
                   <div class="property-info-wrapper">
                        <span class="col-3" >Updated at</span>
                        <span  class="col-9">1 Room inside family owned</span>
                   </div>
                 
                </div>
                <div class="col-3">
                   <div class="property-status-wrapper text-center">
                       <span><b>Status</b></span>
                       <span>Pending</span>
                   </div>
                   <div class="property-views d-flex justify-content-center">
                       <div class="views col-4">
                            <p>0 Views</p>
                            <p >0 inquiry</p>
                       </div>
                   </div>
                   <div class="btn-group d-flex justify-content-center">
                       <a href="#" class=" btn-secondary btn-style"><i class="far fa-edit fa-lg"></i></a>
                       <a href="#" class=" btn-secondary btn-style"><i class="far fa-trash-alt fa-lg"></i></a>
                      
                   </div>
                   <div class="btn-rented  d-flex justify-content-center mt-3 ">
                        <button class="btn-secondary border-0 padding">Mark as rented</button>  
                   </div>
                  
                   
                </div>
            </div>   
    </div>
      
 </div> 
@endsection
