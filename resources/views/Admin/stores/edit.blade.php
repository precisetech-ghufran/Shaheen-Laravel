@extends('admin.index')
@section('content')
<div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                <div class="row">
                    
                    <div class="col-6">
                    <h4>Store Details</h4>
                    </div>
                    <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">                                       
                            <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                            </svg></a></li>
                        <li class="breadcrumb-item">Store</li>
                        <li class="breadcrumb-item active">Store Details</li>
                    </ol>
                    </div>
                </div>
                </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row size-column"> 
                    <div class="col-xxl-12 box-col-12">
                        <div class="row">
                            <div class="col-xl-3 col-sm-6">
                              <div class="card o-hidden small-widget">
                                <div class="card-body total-project border-b-primary border-2">
                                  <span class="f-light f-w-500 f-14">
                                    Total Profit
                                  </span>
                                  <div class="project-details"> 
                                    <div class="project-counter"> 
                                      <h2 class="f-w-600">1,523</h2>
                                      <span class="f-12 f-w-400">(This month)</span>
                                    </div>
                                    <div class="product-sub bg-primary-light">
                                      <svg class="invoice-icon">
                                        <use href="../assets/svg/icon-sprite.svg#profit"></use>
                                      </svg>
                                    </div>
                                  </div>
                                  <ul class="bubbles">
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                              <div class="card o-hidden small-widget">
                                <div class="card-body total-Progress border-b-warning border-2">
                                  <span class="f-light f-w-500 f-14">Net Cost</span>
                                  <div class="project-details">
                                    <div class="project-counter">
                                      <h2 class="f-w-600">836</h2>
                                      <span class="f-12 f-w-400">(This month)</span>
                                    </div>
                                    <div class="product-sub bg-warning-light"> 
                                      <svg class="invoice-icon">
                                        <use href="../assets/svg/icon-sprite.svg#activity"></use>
                                      </svg>
                                    </div>
                                  </div>
                                  <ul class="bubbles">
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                              <div class="card o-hidden small-widget">
                                <div class="card-body total-Complete border-b-secondary border-2">
                                  <span class="f-light f-w-500 f-14">Total Oders_link</span>
                                  <div class="project-details">
                                    <div class="project-counter">
                                      <h2 class="f-w-600">475</h2><span class="f-12 f-w-400">(This month) </span>
                                    </div>
                                    <div class="product-sub bg-secondary-light"> 
                                      <svg class="invoice-icon">
                                        <use href="../assets/svg/icon-sprite.svg#people"></use>
                                      </svg>
                                    </div>
                                  </div>
                                  <ul class="bubbles"> 
                                    <li class="bubble"> </li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"> </li>
                                    <li class="bubble"></li>
                                    <li class="bubble"> </li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"> </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                              <div class="card o-hidden small-widget">
                                <div class="card-body total-upcoming">
                                  <span class="f-light f-w-500 f-14">Total Banks</span>
                                  <div class="project-details"> 
                                    <div class="project-counter">
                                      <h2 class="f-w-600">189</h2><span class="f-12 f-w-400">(This month) </span>
                                    </div>
                                    <div class="product-sub bg-light-light"> 
                                      <svg class="invoice-icon">
                                        <use href="../assets/svg/icon-sprite.svg#money-recive"></use>
                                      </svg>
                                    </div>
                                  </div>
                                  <ul class="bubbles"> 
                                    <li class="bubble"> </li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="col-12"> 
                                <div class="card overflow-x: auto; white-space: nowrap;"> 
                                    <!-- <div class="card-header d-block d-md-flex justify-content-between">
                                        <h5>FR000453ER3</h5>
                                        <div class="d-flex gap-2 mt-3 mt-md-0">
                                            <a class="btn btn-danger" href="add-store.html">
                                                Edit
                                            </a>
                                            <a class="btn btn-success" href="attachments.html">
                                                Add Attachments
                                            </a>
                                        </div>
                                    </div> -->
                                    <div class="card-body">
                                        <div class="row g-xl-5 g-3">
                                            <div >
                                                <ul class="nav nav-tabs border-tab mb-0" id="advance-option-tab" role="tablist">
                                                    <li class="nav-item" role="presentation"><a class="nav-link" id="edit-store-tab" data-bs-toggle="tab" href="#edit-store" role="tab" aria-controls="edit-store" aria-selected="true" tabindex="-1">Store Edit</a></li>
                                                    <li class="nav-item" role="presentation"><a class="nav-link" id="Basic_Information-tab" data-bs-toggle="tab" href="#Basic_Information" role="tab" aria-controls="Basic_Information" aria-selected="false" tabindex="-1">Basic Information</a></li>
                                                    <li class="nav-item" role="presentation"><a class="nav-link" id="Address_Information-tab" data-bs-toggle="tab" href="#Address_Information" role="tab" aria-controls="Address_Information" aria-selected="false" tabindex="-1">Address Information</a></li>
                                                    <li class="nav-item" role="presentation"><a class="nav-link" id="Social_Media_Information-tab" data-bs-toggle="tab" href="#Social_Media_Information" role="tab" aria-controls="Social_Media_Information" aria-selected="false" tabindex="-1">Social Media Information</a></li>
                                                    <li class="nav-item" role="presentation"><a class="nav-link" id="Unemployment_Insurance_employer_regitration-tab" data-bs-toggle="tab" href="#Unemployment_Insurance_employer_regitration" role="tab" aria-controls="Unemployment_Insurance_employer_regitration" aria-selected="false" tabindex="-1">Unemployment Insurance </a></li>
                                                    <li class="nav-item" role="presentation"><a class="nav-link" id="Employer_Identification_Number-tab" data-bs-toggle="tab" href="#Employer_Identification_Number" role="tab" aria-controls="Employer_Identification_Number" aria-selected="false" tabindex="-1">Employer Identification Number</a></li>
                                                    <li class="nav-item" role="presentation"><a class="nav-link" id="Oders_link-tab" data-bs-toggle="tab" href="#Oders_link" role="tab" aria-controls="Oders_link" aria-selected="false" tabindex="-1">Orders Links</a></li>
                                                    <li class="nav-item" role="presentation"><a class="nav-link" id="banking-tab" data-bs-toggle="tab" href="#banking" role="tab" aria-controls="banking" aria-selected="false" tabindex="-1">Banking</a></li>
                                                    <li class="nav-item" role="presentation"><a class="nav-link active" id="all-attachments-documents-tab" data-bs-toggle="tab" href="#all-attachments-documents" role="tab" aria-controls="all-attachments-documents" aria-selected="false">All Attachments</a></li>
                                                </ul>
                                                <div class="tab-content" id="advance-option-tabContent">
                                                   
                                                            
                                                       <div class="tab-pane fade" id="edit-store" role="tabpanel" aria-labelledby="edit-store-tab">
                                                        <div class="meta-body"> 
 <div class="card"> 
                    <div class="card-header d-block d-md-flex justify-content-between">
                      <h5>Edit Store {{$store->store_business_name}}</h5>
                      <div class="d-flex flex-wrap gap-2 mt-3 mt-md-0">
                   
                        <a class="btn btn-success" href="{{ route('stores.index') }}">
                            View Store
                        </a>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row g-xl-5 g-3">
                        <div class="col-sm-12">
                        <form action="{{ route('stores.update',$store->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <!-- Store Business Name -->
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="store_business_name">Store Business Name</label>
                    <input type="text" name="store_business_name" class="form-control @error('store_business_name') is-invalid @enderror" placeholder="Enter Store Business Name" value="{{ old('store_business_name',$store->store_business_name) }}">
                    @error('store_business_name')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <!-- Date -->
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" name="date" class="form-control @error('date') is-invalid @enderror" placeholder="Enter Date" value="{{ old('date',$store->date) }}">
                    @error('date')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <!-- Stored By -->
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="stored_by">Stored By</label>
                    <input type="text" name="stored_by" class="form-control @error('stored_by') is-invalid @enderror" placeholder="Enter Stored By" value="{{ old('stored_by',$store->stored_by) }}">
                    @error('stored_by')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

<br/>



        <div class="row">
             <div class="col-lg-4 ">
                <label for="stateid">State<span class="text-danger">*</span></label>
                <select name="stateid" id="stateid" class="form-control @error('stateid') is-invalid @enderror">
                    <option value="">Select State</option>
                    @foreach ($states as $state)
                        <option value="{{ $state->id }}" {{ $state->id == old('stateid', $store->stateid) ? 'selected' : '' }}>
                            {{ $state->name }}
                        </option>
                    @endforeach
                </select>
                @error('stateid')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

         
            <div class="col-lg-4 ">
                <label for="cityid">City<span class="text-danger">*</span></label>
            <select name="cityid" id="cityid" class="form-control @error('cityid') is-invalid @enderror">
                    <option value="">Select City</option>
                    @foreach ($cities as $city)
                        <option value="{{ $city->id }}" {{ $city->id == old('cityid', $store->cityid) ? 'selected' : '' }}>
                            {{ $city->name }}
                        </option>
                    @endforeach
                </select>
                @error('cityid')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


             <div class="col-lg-4 ">
                 <label for="country_id">Country</label>
                <select name="country_id" id="country_id" class="form-control select2 @error('country_id') is-invalid @enderror"   >
                    <option value="">Select Country</option>
                    @foreach($countries as $country)
                        <option value="{{ $country->id }}" {{ $store->country_id == $country->id ? 'selected' : '' }}>
                            {{ $country->country_name }}
                        </option>
                    @endforeach
                </select>
                @error('country_id')
                     <div class="invalid-feedback">{{ $message }}</div> 
                @enderror
            </div>
        </div>
<br/>


        <div class="row">
            <!-- Area Square Foot -->
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="area_square_foot">Area Square Foot</label>
                    <input type="number" name="area_square_foot" class="form-control @error('area_square_foot') is-invalid @enderror" placeholder="Enter Area Square Foot" value="{{ old('area_square_foot',$store->area_square_foot) }}">
                    @error('area_square_foot')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <!-- Site Address -->
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="site_address">Site Address</label>
                    <input type="text" name="site_address" class="form-control @error('site_address') is-invalid @enderror" placeholder="Enter Site Address" value="{{ old('site_address',$store->site_address) }}">
                    @error('site_address')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <!-- Zip Code -->
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="zip_code">Zip Code</label>
                    <input type="text" name="zip_code" class="form-control @error('zip_code') is-invalid @enderror" placeholder="Enter Zip Code" value="{{ old('zip_code',$store->zip_code) }}">
                    @error('zip_code')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
<br/>
        <div class="row">
            <!-- Lease Asking Rent -->
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="lease_asking_rent">Lease Asking Rent</label>
                    <input type="number" name="lease_asking_rent" class="form-control @error('lease_asking_rent') is-invalid @enderror" placeholder="Enter Lease Asking Rent" value="{{ old('lease_asking_rent',$store->lease_asking_rent) }}">
                    @error('lease_asking_rent')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <!-- Proposed NNN -->
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="proposed_nnn">Proposed NNN</label>
                    <input type="number" name="proposed_nnn" class="form-control @error('proposed_nnn') is-invalid @enderror" placeholder="Enter Proposed NNN" value="{{ old('proposed_nnn',$store->proposed_nnn) }}">
                    @error('proposed_nnn')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <!-- Site Condition -->
            <div class="col-lg-4">
              <div class="form-group">
        <label for="buy_and_lease">Buy or Lease</label>
        <div>
            <label>
                <input type="radio" name="buy_and_lease" value="buy" 
                    {{ $store->buy_and_lease == 'buy' ? 'checked' : '' }}> Buy
            </label>
            <label>
                <input type="radio" name="buy_and_lease" value="lease" 
                    {{ $store->buy_and_lease == 'lease' ? 'checked' : '' }}> Lease
            </label>
        </div>
        @error('buy_and_lease')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
            </div>
        </div>

        <br/>



<div class="row">

       <div class="col-lg-4">
         <div class="form-group">
            <label >Franchise </label>
              <select class="form-select" aria-label="Default select example" name="franchise_id">
                <option value="">Select Franchise</option>
                @foreach($franchise as $fran)
                                      <option value="{{$fran->id}}" {{$store->franchise_id == $fran->id ? 'selected' : '' }}>{{$fran->franchise_name}}</option>
                                      @endforeach
                                    </select>
                                </div>
            </div>

              <div class="col-lg-4">
                 <div class="form-group">
            <label >  
Site Rank </label>
              <select class="form-select" aria-label="Default select example" name="site_rank">
                <option value="">Select Site Rank</option>
             
                                       <option value="1" {{ $store->site_rank == 1 ? 'selected' : '' }}>1</option>
    <option value="2" {{$store->site_rank == 2 ? 'selected' : '' }}>2</option>
    <option value="3" {{ $store->site_rank == 3 ? 'selected' : '' }}>3</option>
    <option value="4" {{$store->site_rank == 4 ? 'selected' : '' }}>4</option>
    <option value="5" {{ $store->site_rank == 5 ? 'selected' : '' }}>5</option>
                                    
                                    </select>

                                </div>
            </div>




              <div class="col-lg-4">
                 <div class="form-group">
            <label >
Site Condition </label>
              <select class="form-select" aria-label="Default select example" name="site_condition">
                <option value="">Select Site Condition</option>
              
                              <option value="1" {{ $store->site_condition == 1 ? 'selected' : '' }}>Second Generation restaurant</option>
                                       <option value="2" {{ $store->site_condition== 2 ? 'selected' : '' }}>Empty building</option>
                                        <option value="3" {{ $store->site_condition == 3 ? 'selected' : '' }}>Land</option>

                                        </select> 
                    

            </div>
        </div>
</div>






<br/>



        <div class="row"> 


                <div class="col-lg-4">
                <div class="form-group">
                    <label for="proposed_nnn">Map Location Link</label>
                    <input type="text" name="map_location_link" class="form-control @error('map_location_link') is-invalid @enderror" placeholder="Enter Map Location Link" value="{{ $store->map_location_link }}">
                 
                    @error('map_location_link')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>

      <div class="col-lg-8">
                <div class="form-group">
                    <label for="proposed_nnn">Details</label>
                    <textarea type="text" name="details" class="form-control @error('proposed_nnn') is-invalid @enderror" placeholder="Enter Details " value="{{ $store->details }}">
                        {{ $store->details }}
                    </textarea>
                    @error('details')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>

         
        </div>

        <!-- Submit Button -->
        <div class="form-group mt-4">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
          </div>



                                                       
                                                 
                                                                 <div class="tab-pane fade" id="Social_Media_Information" role="tabpanel" aria-labelledby="Social_Media_Information-tab">
                                                        <div class="meta-body">
     <div class="card"> 
                    <div class="card-header d-block d-md-flex justify-content-between">
                      <h4>Store {{$store->store_business_name}}</h4>
                      <div class="d-flex flex-wrap gap-2 mt-3 mt-md-0">
                   
                        <a class="btn btn-success" href="{{route('franchises.create')}}">
Add Franchise
                        </a>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row g-xl-5 g-3">
                        <div class="col-sm-12">
                                           <form action="#" method="POST">
    @csrf
    @method('PUT')
    <div class="row"> 
        <!-- Facebook Link -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="facebook_link">Facebook Link</label>
                <input type="url" class="form-control @error('facebook_link') is-invalid @enderror" id="facebook_link" name="facebook_link" 
                    placeholder="Enter Facebook link" value="{{ old('facebook_link') }}">
                @error('facebook_link')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Tiktok Link -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="tiktok_link">Tiktok Link</label>
                <input type="url" class="form-control @error('tiktok_link') is-invalid @enderror" id="tiktok_link" name="tiktok_link" 
                    placeholder="Enter Tiktok link" value="{{ old('tiktok_link') }}">
                @error('tiktok_link')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Instagram Link -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="insta_link">Instagram Link</label>
                <input type="url" class="form-control @error('insta_link') is-invalid @enderror" id="insta_link" name="insta_link" 
                    placeholder="Enter Instagram link" value="{{ old('insta_link') }}">
                @error('insta_link')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
  
        <!-- Instagram Username -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="insta_username">Instagram Username</label>
                <input type="text" class="form-control @error('insta_username') is-invalid @enderror" id="insta_username" name="insta_username" 
                    placeholder="Enter Instagram username" value="{{ old('insta_username') }}">
                @error('insta_username')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Instagram Password -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="insta_password">Instagram Password</label>
                <input type="password" class="form-control @error('insta_password') is-invalid @enderror" id="insta_password" name="insta_password" 
                    placeholder="Enter Instagram password">
                @error('insta_password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Tiktok Username -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="tiktok_username">Tiktok Username</label>
                <input type="text" class="form-control @error('tiktok_username') is-invalid @enderror" id="tiktok_username" name="tiktok_username" 
                    placeholder="Enter Tiktok username" value="{{ old('tiktok_username') }}">
                @error('tiktok_username')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
 
        <!-- Tiktok Password -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="tiktok_password">Tiktok Password</label>
                <input type="password" class="form-control @error('tiktok_password') is-invalid @enderror" id="tiktok_password" name="tiktok_password" 
                    placeholder="Enter Tiktok password">
                @error('tiktok_password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

                               
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
                      <div class="tab-pane fade" id="Basic_Information" role="tabpanel" aria-labelledby="Basic_Information-tab">
                                                        <div class="meta-body">
     <div class="card"> 
                    <div class="card-header d-block d-md-flex justify-content-between">
                      <h4>Store {{$store->store_business_name}}</h4>
                      <div class="d-flex flex-wrap gap-2 mt-3 mt-md-0">
                   
                        <a class="btn btn-success" href="{{route('franchises.create')}}">
Add Franchise
                        </a>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row g-xl-5 g-3">
                        <div class="col-sm-12">
                                                      <form action="#" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
              <div class="col-lg-4 col-sm-12 mb-3">
         <div class="form-group">
            <label >Franchise </label>
              <select class="form-select" aria-label="Default select example" name="franchise_id">
                <option value="">Select Franchise</option>
                @foreach($franchise as $fran)
                                      <option value="{{$fran->id}}" {{$store->franchise_id == $fran->id ? 'selected' : '' }}>{{$fran->franchise_name}}</option>
                                      @endforeach
                                    </select>
                                </div>
            </div>




                 <div class="col-lg-4 col-sm-12 mb-3">
                 <div class="form-group">
                                    <label for="construction_contact_email">Official Email</label>
                                    <input type="email" id="construction_contact_email" name="construction_contact_email" class="form-control @error('construction_contact_email') is-invalid @enderror" value="">
                                    @error('construction_contact_email')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                </div>

            <div class="col-lg-4 col-sm-12 mb-3">
                <div class="form-group">
                    <label for="website">Website</label>
                    <input type="url" id="website" name="website" class="form-control @error('website') is-invalid @enderror" value="">
                    @error('website')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-4 col-sm-12 mb-3">
                <div class="form-group">
                    <label for="contact_person_name">Landline Phone No ---</label>
                    <input type="text" id="contact_person_name" name="contact_person_name" class="form-control @error('contact_person_name') is-invalid @enderror" value="">
                    @error('contact_person_name')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-4 col-sm-12 mb-3">
                <div class="form-group">
                    <label for="franchisor_contact_person">Whatsapp Number --</label>
                    <input type="text" id="franchisor_contact_person" name="franchisor_contact_person" class="form-control @error('franchisor_contact_person') is-invalid @enderror" value="">
                    @error('franchisor_contact_person')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            </div>

          


        

          

            <div class="col-lg-12 mb-3">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
                               
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
                                           
                                                  
                                                           
                                                               <div class="tab-pane fade" id="Address_Information" role="tabpanel" aria-labelledby="Address_Information-tab">
                                                        <div class="meta-body">
 <div class="card"> 
                    <div class="card-header d-block d-md-flex justify-content-between">
                      <h5>Edit Store {{$store->store_business_name}}</h5>
                      <div class="d-flex flex-wrap gap-2 mt-3 mt-md-0">
                   
                        <a class="btn btn-success" href="{{ route('stores.index') }}">
                            View Store
                        </a>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row g-xl-5 g-3">
                        <div class="col-sm-12">
                        <form action="{{ route('stores.update',$store->id) }}" method="POST">
        @csrf
        @method('PUT')
       

<div class="row">

       
            <div class="col-lg-4 ">
                 <label for="country_id">Country</label>
                <select name="country_id" id="country_id" class="form-control select2 @error('country_id') is-invalid @enderror"   >
                    <option value="">Select Country</option>
                    @foreach($countries as $country)
                        <option value="{{ $country->id }}" {{ $store->country_id == $country->id ? 'selected' : '' }}>
                            {{ $country->country_name }}
                        </option>
                    @endforeach
                </select>
                @error('country_id')
                     <div class="invalid-feedback">{{ $message }}</div> 
                @enderror
            </div>
             <div class="col-lg-4 ">
                <label for="stateid">State<span class="text-danger">*</span></label>
                <select name="stateid" id="stateid" class="form-control @error('stateid') is-invalid @enderror">
                    <option value="">Select State</option>
                    @foreach ($states as $state)
                        <option value="{{ $state->id }}" {{ $state->id == old('stateid', $store->stateid) ? 'selected' : '' }}>
                            {{ $state->name }}
                        </option>
                    @endforeach
                </select>
                @error('stateid')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

         
            <div class="col-lg-4 ">
                <label for="cityid">City<span class="text-danger">*</span></label>
            <select name="cityid" id="cityid" class="form-control @error('cityid') is-invalid @enderror">
                    <option value="">Select City</option>
                    @foreach ($cities as $city)
                        <option value="{{ $city->id }}" {{ $city->id == old('cityid', $store->cityid) ? 'selected' : '' }}>
                            {{ $city->name }}
                        </option>
                    @endforeach
                </select>
                @error('cityid')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


             
        <div class="col-lg-4">
                <div class="form-group">
                    <label for="zip_code">Zip Code</label>
                    <input type="text" name="zip_code" class="form-control @error('zip_code') is-invalid @enderror" placeholder="Enter Zip Code" value="{{ old('zip_code',$store->zip_code) }}">
                    @error('zip_code')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>
    <div class="col-lg-4">
                <div class="form-group">
                    <label for="proposed_nnn">Map Location Link</label>
                    <input type="text" name="map_location_link" class="form-control @error('map_location_link') is-invalid @enderror" placeholder="Enter Map Location Link" value="{{ $store->map_location_link }}">
                 
                    @error('map_location_link')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>

</div>
        
        <div class="form-group mt-4">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
          </div>

                                                
                                                
                                                             <div class="tab-pane fade" id="Social_Media_Information" role="tabpanel" aria-labelledby="Social_Media_Information-tab">
                                                        <div class="meta-body">
     <div class="card"> 
                    <div class="card-header d-block d-md-flex justify-content-between">
                      <h4>Store {{$store->store_business_name}}</h4>
                      <div class="d-flex flex-wrap gap-2 mt-3 mt-md-0">
                   
                        <a class="btn btn-success" href="{{route('franchises.create')}}">
Add Franchise
                        </a>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row g-xl-5 g-3">
                        <div class="col-sm-12">
                                           <form action="#" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <!-- Facebook Link -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="facebook_link">Facebook Link</label>
                <input type="url" class="form-control @error('facebook_link') is-invalid @enderror" id="facebook_link" name="facebook_link" 
                    placeholder="Enter Facebook link" value="{{ old('facebook_link') }}">
                @error('facebook_link')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Tiktok Link -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="tiktok_link">Tiktok Link</label>
                <input type="url" class="form-control @error('tiktok_link') is-invalid @enderror" id="tiktok_link" name="tiktok_link" 
                    placeholder="Enter Tiktok link" value="{{ old('tiktok_link') }}">
                @error('tiktok_link')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Instagram Link -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="insta_link">Instagram Link</label>
                <input type="url" class="form-control @error('insta_link') is-invalid @enderror" id="insta_link" name="insta_link" 
                    placeholder="Enter Instagram link" value="{{ old('insta_link') }}">
                @error('insta_link')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
  
        <!-- Instagram Username -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="insta_username">Instagram Username</label>
                <input type="text" class="form-control @error('insta_username') is-invalid @enderror" id="insta_username" name="insta_username" 
                    placeholder="Enter Instagram username" value="{{ old('insta_username') }}">
                @error('insta_username')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Instagram Password -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="insta_password">Instagram Password</label>
                <input type="password" class="form-control @error('insta_password') is-invalid @enderror" id="insta_password" name="insta_password" 
                    placeholder="Enter Instagram password">
                @error('insta_password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Tiktok Username -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="tiktok_username">Tiktok Username</label>
                <input type="text" class="form-control @error('tiktok_username') is-invalid @enderror" id="tiktok_username" name="tiktok_username" 
                    placeholder="Enter Tiktok username" value="{{ old('tiktok_username') }}">
                @error('tiktok_username')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
 
        <!-- Tiktok Password -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="tiktok_password">Tiktok Password</label>
                <input type="password" class="form-control @error('tiktok_password') is-invalid @enderror" id="tiktok_password" name="tiktok_password" 
                    placeholder="Enter Tiktok password">
                @error('tiktok_password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

                               
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
                                                            
                                                    
                                                    <div class="tab-pane fade" id="Unemployment_Insurance_employer_regitration" role="tabpanel" aria-labelledby="Unemployment_Insurance_employer_regitration-tab">
                                                        <div class="meta-body">
                                                            <div class="card-header card-no-border pb-0">
                                                                <div class="list-content d-flex justify-content-between"> 
                                                                    <h4>Permit and License</h4>
                                                                    <a class="btn btn-primary" href="add-store.html">
                                                                        Upload Permit &amp; License
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="card-body pt-0">
                                                                <div class="table-responsive custom-scrollbar deliveries-percentage">
                                                                    <table class="percentage-data w-100 mt-5">
                                                                        <tbody> 
                                                                            <tr>
                                                                                <td class="f-w-400 f-10 gap-2"><strong>Permit No: 1</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="f-w-400 f-10 gap-2"><strong>Permit No: 2</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="f-w-400 f-10 gap-2"><strong>Permit No: 3</strong></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="Employer_Identification_Number" role="tabpanel" aria-labelledby="Employer_Identification_Number-tab">
                                                        <div class="meta-body">
                                                       Employer Idetnifcatiom NUmber
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="Oders_link" role="tabpanel" aria-labelledby="Oders_link-tab">
                                                        <div class="meta-body">
                                                            <div class="list-product">
                                                            <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                                                                <div class="datatable-container">
                                                                    <table class="table datatable-table">
                                                                    <thead> 
                                                                        <tr> 
                                                                        <th>
                                                                            <div class="form-check"> 
                                                                            <input class="form-check-input checkbox-primary" type="checkbox">
                                                                            </div>
                                                                        </th>
                                                                        <th> <span class="f-light f-w-600">Date</span></th>
                                                                        <th> <span class="f-light f-w-600">Partner Name</span></th>
                                                                        <th> <span class="f-light f-w-600">Details</span></th>
                                                                        <th> <span class="f-light f-w-600">Equity Share</span></th>
                                                                        <th> <span class="f-light f-w-600">Profit Share</span></th>
                                                                        <th> <span class="f-light f-w-600">Options</span></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody> 
                                                                        <tr class="product-removes">
                                                                            <td>
                                                                                <div class="form-check"> 
                                                                                <input class="form-check-input checkbox-primary" type="checkbox">
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="product-names">
                                                                                <p class="f-light">06-10-2024</p>
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="product-names">
                                                                                    <p class="f-light">Shaheeh Group</p>
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="product-names">
                                                                                    <p class="f-light"></p>
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="product-names">
                                                                                    <p class="f-light">20%</p>
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="product-names">
                                                                                    <p class="f-light">10%</p>
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="btn-group">
                                                                                    <button class="btn btn-primary" type="button">Edit</button>
                                                                                </div>
                                                                            </td>
                                                                        </tr> 
                                                                        <tr class="product-removes">
                                                                            <td>
                                                                                <div class="form-check"> 
                                                                                <input class="form-check-input checkbox-primary" type="checkbox">
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="product-names">
                                                                                <p class="f-light">06-10-2024</p>
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="product-names">
                                                                                    <p class="f-light">Shaheeh Group</p>
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="product-names">
                                                                                    <p class="f-light"></p>
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="product-names">
                                                                                    <p class="f-light">20%</p>
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="product-names">
                                                                                    <p class="f-light">10%</p>
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="btn-group">
                                                                                    <button class="btn btn-primary" type="button">Edit</button>
                                                                                </div>
                                                                            </td>
                                                                        </tr> 
                                                                        <tr class="product-removes">
                                                                            <td>
                                                                                <div class="form-check"> 
                                                                                <input class="form-check-input checkbox-primary" type="checkbox">
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="product-names">
                                                                                <p class="f-light">06-10-2024</p>
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="product-names">
                                                                                    <p class="f-light">Shaheeh Group</p>
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="product-names">
                                                                                    <p class="f-light"></p>
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="product-names">
                                                                                    <p class="f-light">20%</p>
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="product-names">
                                                                                    <p class="f-light">10%</p>
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="btn-group">
                                                                                    <button class="btn btn-primary" type="button">Edit</button>
                                                                                </div>
                                                                            </td>
                                                                        </tr> 
                                                                    </tbody>
                                                                    </table>
                                                                </div>
                                                                </div>
                                                                <div class="datatable-bottom">
                                                                    <div class="datatable-info">Showing 1 to 3 of 3 entries</div>
                                                                    <nav class="datatable-pagination">
                                                                        <ul class="datatable-pagination-list">
                                                                            <li class="datatable-pagination-list-item datatable-hidden datatable-disabled">
                                                                                <a data-page="1" class="datatable-pagination-list-item-link">‹</a>
                                                                            </li>
                                                                            <li class="datatable-pagination-list-item datatable-active">
                                                                                <a data-page="1" class="datatable-pagination-list-item-link">1</a>
                                                                            </li>
                                                                            <li class="datatable-pagination-list-item">
                                                                                <a data-page="2" class="datatable-pagination-list-item-link">2</a>
                                                                            </li>
                                                                            <li class="datatable-pagination-list-item">
                                                                                <a data-page="2" class="datatable-pagination-list-item-link">›</a>
                                                                            </li>
                                                                        </ul>
                                                                    </nav>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="banking" role="tabpanel" aria-labelledby="banking-tab">
                                                        <div class="meta-body">
                                                            <div class="row">
                                                                <div class="col-sm-12 my-3">
                                                                    <div class="prooduct-details-box card-absolute">
                                                                        <div class="media">
                                                                            <div class="card-header bg-primary">
                                                                                <h5 class="txt-light">Bank Name: TD Bank CAMDEN CHARLEYS | <a href="#" class="text-white text-underline">Edit</a></h5>
                                                                            </div>
                                                                            <div class="card-body pt-0">
                                                                                <div class="table-responsive custom-scrollbar deliveries-percentage">
                                                                                    <table class="percentage-data w-100 mt-2">
                                                                                        <tbody> 
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Account Title</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Account Number</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>IBAN</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Routing</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Bank Address</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Company Address with Bank</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Company Phone with Bank</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>FED Tax ID/EIN with Bank</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>EIN Issue Date</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Contact Person</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Contact Phone</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Contact Email</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade active show" id="all-attachments-documents" role="tabpanel" aria-labelledby="all-attachments-documents-tab">
                                                        <div class="meta-body">
                                                            <div class="list-product">
                                                            <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                                                                <div class="datatable-container">
                                                                    <table class="table datatable-table">
                                                                    <thead> 
                                                                        <tr> 
                                                                        <th>
                                                                            <div class="form-check"> 
                                                                            <input class="form-check-input checkbox-primary" type="checkbox">
                                                                            </div>
                                                                        </th>
                                                                        <th> <span class="f-light f-w-600">Title</span></th>
                                                                        <th> <span class="f-light f-w-600">Date</span></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody> 
                                                                        <tr class="product-removes">
                                                                            <td>
                                                                                <div class="form-check"> 
                                                                                <input class="form-check-input checkbox-primary" type="checkbox">
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="product-names">
                                                                                    <p class="f-light">
                                                                                        <strong>
                                                                                            Document 1
                                                                                        </strong>
                                                                                    </p>
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="product-names">
                                                                                    <p class="f-light">
                                                                                        06-10-2024
                                                                                    </p>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="product-removes">
                                                                            <td>
                                                                                <div class="form-check"> 
                                                                                <input class="form-check-input checkbox-primary" type="checkbox">
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="product-names">
                                                                                    <p class="f-light">
                                                                                        <strong>
                                                                                            Document 1
                                                                                        </strong>
                                                                                    </p>
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="product-names">
                                                                                    <p class="f-light">
                                                                                        06-10-2024
                                                                                    </p>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="product-removes">
                                                                            <td>
                                                                                <div class="form-check"> 
                                                                                <input class="form-check-input checkbox-primary" type="checkbox">
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="product-names">
                                                                                    <p class="f-light">
                                                                                        <strong>
                                                                                            Document 1
                                                                                        </strong>
                                                                                    </p>
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="product-names">
                                                                                    <p class="f-light">
                                                                                        06-10-2024
                                                                                    </p>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                    </table>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="col-xxl-3 col-xl-4 box-col-4e sidebar-left-wrapper">
                                                <ul class="sidebar-left-icons nav nav-pills" id="add-product-pills-tab" role="tablist">
                                                <li class="nav-item"> <a class="nav-link active" id="detail-product-tab" data-bs-toggle="pill" href="#detail-product" role="tab" aria-controls="detail-product" aria-selected="false">
                                                    <div class="nav-rounded">
                                                        <div class="product-icons">
                                                        <svg class="stroke-icon">
                                                            <use href="../assets/svg/icon-sprite.svg#product-detail"></use>
                                                        </svg>
                                                        </div>
                                                    </div>
                                                    <div class="product-tab-content">
                                                        <h6>Add Product Details</h6>
                                                        <p>Add Product name & details</p>
                                                    </div></a></li>
                                                <li class="nav-item"> <a class="nav-link" id="gallery-product-tab" data-bs-toggle="pill" href="#gallery-product" role="tab" aria-controls="gallery-product" aria-selected="false">
                                                    <div class="nav-rounded">
                                                        <div class="product-icons">
                                                        <svg class="stroke-icon">
                                                            <use href="../assets/svg/icon-sprite.svg#product-gallery"></use>
                                                        </svg>
                                                        </div>
                                                    </div>
                                                    <div class="product-tab-content">
                                                        <h6>Product gallery</h6>
                                                        <p>thumbnail & Add Product Gallery</p>
                                                    </div></a></li>
                                                <li class="nav-item"> <a class="nav-link" id="category-product-tab" data-bs-toggle="pill" href="#category-product" role="tab" aria-controls="category-product" aria-selected="false">
                                                    <div class="nav-rounded">
                                                        <div class="product-icons">
                                                        <svg class="stroke-icon">
                                                            <use href="../assets/svg/icon-sprite.svg#product-category"></use>
                                                        </svg>
                                                        </div>
                                                    </div>
                                                    <div class="product-tab-content">
                                                        <h6>Product Categories</h6>
                                                        <p>Add Product category, Status and Tags</p>
                                                    </div></a></li>
                                                <li class="nav-item"><a class="nav-link" id="pricings-tab" data-bs-toggle="pill" href="#pricings" role="tab" aria-controls="pricings" aria-selected="false">
                                                    <div class="nav-rounded">
                                                        <div class="product-icons">
                                                        <svg class="stroke-icon">
                                                            <use href="../assets/svg/icon-sprite.svg#pricing"> </use>
                                                        </svg>
                                                        </div>
                                                    </div>
                                                    <div class="product-tab-content">
                                                        <h6>Selling prices</h6>
                                                        <p>Add Product basic price & Discount</p>
                                                    </div></a></li>
                                                <li class="nav-item"><a class="nav-link" id="advance-product-tab" data-bs-toggle="pill" href="#advance-product" role="tab" aria-controls="advance-product" aria-selected="false">
                                                    <div class="nav-rounded">
                                                        <div class="product-icons">
                                                        <svg class="stroke-icon">
                                                            <use href="../assets/svg/icon-sprite.svg#advance"> </use>
                                                        </svg>
                                                        </div>
                                                    </div>
                                                    <div class="product-tab-content">
                                                        <h6>Advance</h6>
                                                        <p>Add Meta details & Inventory details</p>
                                                    </div></a></li>
                                                </ul>
                                            </div>
                                            <div class="col-xxl-9 col-xl-8 box-col-8 position-relative">
                                                <div class="tab-content" id="add-product-pills-tabContent">
                                                <div class="tab-pane fade show active" id="detail-product" role="tabpanel" aria-labelledby="detail-product-tab">
                                                    <div class="sidebar-body">
                                                    <form class="row g-2">
                                                        <label class="form-label col-12 m-0" for="productTitle1">Product Title <span class="txt-danger"> *</span></label>
                                                        <div class="col-12 custom-input">
                                                        <input class="form-control is-invalid" id="productTitle1" type="text" required="">
                                                        <div class="valid-feedback">Looks good!</div>
                                                        <div class="invalid-feedback">A product name is required and recommended to be unique.</div>
                                                        </div>
                                                        <div class="col-12"> 
                                                        <div class="toolbar-box">
                                                            <div id="toolbar2"><span class="ql-formats">
                                                                <select class="ql-size"></select></span><span class="ql-formats">
                                                                <button class="ql-bold">Bold </button>
                                                                <button class="ql-italic">Italic </button>
                                                                <button class="ql-underline">underline</button>
                                                                <button class="ql-strike">Strike </button></span><span class="ql-formats">
                                                                <button class="ql-list" value="ordered">List </button>
                                                                <button class="ql-list" value="bullet"> </button>
                                                                <button class="ql-indent" value="-1"> </button>
                                                                <button class="ql-indent" value="+1"></button></span><span class="ql-formats">
                                                                <button class="ql-link"></button>
                                                                <button class="ql-image"></button>
                                                                <button class="ql-video"></button></span></div>
                                                            <div id="editor2"></div>
                                                        </div>
                                                        <p class="f-light">Improve product visibility by adding a compelling description.</p>
                                                        </div>
                                                    </form>
                                                    <div class="product-buttons">
                                                        <div class="btn">
                                                        <div class="d-flex align-items-center gap-sm-2 gap-1">Next
                                                            <svg>
                                                            <use href="../assets/svg/icon-sprite.svg#front-arrow">  </use>
                                                            </svg>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="gallery-product" role="tabpanel" aria-labelledby="gallery-product-tab">
                                                    <div class="sidebar-body">
                                                    <div class="product-upload">
                                                        <p>Product Image </p>
                                                        <form class="dropzone dropzone-light" id="multiFileUploadA" action="/upload.php">
                                                        <div class="dz-message needsclick">
                                                            <svg>
                                                            <use href="../assets/svg/icon-sprite.svg#file-upload"></use>
                                                            </svg>
                                                            <h6>Drag your image here, or <a class="txt-primary" href="#!">browser</a></h6><span class="note needsclick">SVG,PNG,JPG or GIF</span>
                                                        </div>
                                                        </form>
                                                    </div>
                                                    <div class="product-upload">
                                                        <p>Product Gallery</p>
                                                        <form class="dropzone dropzone-light" id="multiFileUploadB" action="/upload.php">
                                                        <div class="dz-message needsclick">
                                                            <svg>
                                                            <use href="../assets/svg/icon-sprite.svg#file-upload1"></use>
                                                            </svg>
                                                            <h6>Drag files here</h6><span class="note needsclick">Add Product Gallery Images</span>
                                                        </div>
                                                        </form>
                                                    </div>
                                                    <div class="product-buttons">
                                                        <div class="btn">
                                                        <div class="d-flex align-items-center gap-sm-2 gap-1">
                                                            <svg>
                                                            <use href="../assets/svg/icon-sprite.svg#back-arrow"></use>
                                                            </svg>Previous
                                                        </div>
                                                        </div>
                                                        <div class="btn">
                                                        <div class="d-flex align-items-center gap-sm-2 gap-1">Next
                                                            <svg>
                                                            <use href="../assets/svg/icon-sprite.svg#front-arrow">     </use>
                                                            </svg>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="category-product" role="tabpanel" aria-labelledby="category-product-tab">
                                                    <div class="sidebar-body">
                                                    <form>
                                                        <div class="row g-lg-4 g-3">
                                                        <div class="col-12">
                                                            <div class="row g-3">
                                                            <div class="col-sm-6">
                                                                <div class="row g-2"> 
                                                                <div class="col-12">
                                                                    <label class="form-label m-0" for="validationDefault04">Add Category</label>
                                                                </div>
                                                                <div class="col-12">
                                                                    <select class="form-select" id="validationDefault04" required="">
                                                                    <option selected="" value="">Toys & games</option>
                                                                    <option>Sportswear </option>
                                                                    <option>Jewellery </option>
                                                                    <option>Furniture and Decor</option>
                                                                    <option>Health, Personal Care, and Beauty</option>
                                                                    <option>Auto and Parts </option>
                                                                    <option>Baby Care Products</option>
                                                                    </select>
                                                                    <p class="f-light">A product can be added to a category</p>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="row g-2 product-tag">
                                                                <div class="col-12">
                                                                    <label class="form-label d-block m-0">Add Tag</label>
                                                                </div>
                                                                <div class="col-12">
                                                                    <input name="basic-tags" value="watches, sports, clothes, bottles">
                                                                    <p class="f-light">Products can be tagged</p>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="category-buton"><a class="btn button-primary" href="#!" data-bs-toggle="modal" data-bs-target="#category-pill-modal"><i class="me-2 fa fa-plus"> </i>Create New Category </a></div>
                                                                <div class="modal fade" id="category-pill-modal" tabindex="-1" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h3 class="modal-title fs-5">Create new category</h3>
                                                                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body custom-input"> 
                                                                        <div class="create-category">
                                                                        <div>
                                                                            <label class="form-label" for="categoryName">Category Name <span class="txt-danger"> *</span></label>
                                                                            <input class="form-control m-0" id="categoryName" type="text" required="">
                                                                            <div class="toolbar-box">
                                                                            <div id="toolbar3"><span class="ql-formats">
                                                                                <select class="ql-size"></select></span><span class="ql-formats">
                                                                                <button class="ql-bold">Bold </button>
                                                                                <button class="ql-italic">Italic </button>
                                                                                <button class="ql-underline">underline</button>
                                                                                <button class="ql-strike">Strike </button></span><span class="ql-formats">
                                                                                <button class="ql-list" value="ordered">List </button>
                                                                                <button class="ql-list" value="bullet"> </button>
                                                                                <button class="ql-indent" value="-1"> </button>
                                                                                <button class="ql-indent" value="+1"></button></span><span class="ql-formats">
                                                                                <button class="ql-link"></button>
                                                                                <button class="ql-image"></button>
                                                                                <button class="ql-video"></button></span></div>
                                                                            <div id="editor3"></div>
                                                                            </div>
                                                                        </div>
                                                                        <p class="f-light">Improve product visibility by adding a compelling description.</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button class="btn btn-light" type="button" data-bs-dismiss="modal">Cancel</button>
                                                                        <button class="btn btn-primary" type="button">Add</button>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12"> 
                                                            <div class="row g-3">
                                                            <div class="col-sm-6">
                                                                <div class="row">
                                                                <div class="col-12">
                                                                    <label class="form-label" for="publishStatus">Publish Status</label>
                                                                    <select class="form-select" id="publishStatus" required="">
                                                                    <option selected="" value="">Publish</option>
                                                                    <option>Drafts</option>
                                                                    <option>Unpublish</option>
                                                                    </select>
                                                                    <p class="f-light">Choose the status</p>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="row">
                                                                <div class="col-12">
                                                                    <label class="form-label" for="datetime-local1">Publish Date & Time</label>
                                                                    <div class="input-group flatpicker-calender product-date">
                                                                    <input class="form-control" id="datetime-local1" type="date">
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <div class="product-buttons">
                                                        <div class="btn">
                                                            <div class="d-flex align-items-center gap-sm-2 gap-1">
                                                            <svg>
                                                                <use href="../assets/svg/icon-sprite.svg#back-arrow"></use>
                                                            </svg>Previous
                                                            </div>
                                                        </div>
                                                        <div class="btn">
                                                            <div class="d-flex align-items-center gap-sm-2 gap-1">Next
                                                            <svg>
                                                                <use href="../assets/svg/icon-sprite.svg#front-arrow"></use>
                                                            </svg>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </form>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="pricings" role="tabpanel" aria-labelledby="pricings-tab">
                                                    <div class="sidebar-body">
                                                    <form class="price-wrapper">
                                                        <div class="row g-3 custom-input">
                                                        <div class="col-sm-6"> 
                                                            <label class="form-label" for="initialCost">Initial cost <span class="txt-danger">*</span></label>
                                                            <input class="form-control" id="initialCost" type="number">
                                                        </div>
                                                        <div class="col-sm-6"> 
                                                            <label class="form-label" for="sellingPrice">Selling price <span class="txt-danger">*</span></label>
                                                            <input class="form-control" id="sellingPrice" type="number">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="form-label">Choose your currency</label>
                                                            <select class="form-select" aria-label="Default select example">
                                                            <option selected="">Dollar $</option>
                                                            <option value="1">Euro €</option>
                                                            <option value="2">Rupees ₹</option>
                                                            <option value="3">British pounds £</option>
                                                            <option value="4">Russian Ruble ₽</option>
                                                            <option value="5">Japanese Yen ¥</option>
                                                            <option value="6">Singapore Dollar S$</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6"> 
                                                            <label class="form-label" for="productStock1">Product stocks<span class="txt-danger">*</span></label>
                                                            <input class="form-control" id="productStock1" type="number">
                                                        </div>
                                                        <div class="col-12">
                                                            <label class="form-label">Types of product discount<i class="icon-help-alt ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Choose the kind of discount that will be used on that particular item."></i></label>
                                                            <ul class="radio-wrapper"> 
                                                            <li> 
                                                                <input class="form-check-input" id="radio-icon" type="radio" name="radio5" value="option5">
                                                                <label class="form-check-label" for="radio-icon"><span>Fixed Price</span></label>
                                                            </li>
                                                            <li> 
                                                                <input class="form-check-input" id="radio-icon4" type="radio" name="radio5" value="option5" checked="">
                                                                <label class="form-check-label" for="radio-icon4"><span>BOGO(Buy one, Get one)</span></label>
                                                            </li>
                                                            <li> 
                                                                <input class="form-check-input" id="radio-icon5" type="radio" name="radio5" value="option5">
                                                                <label class="form-check-label" for="radio-icon5"><span>Seasonal or holiday discount</span></label>
                                                            </li>
                                                            <li> 
                                                                <input class="form-check-input" id="radio-icon6" type="radio" name="radio5" value="option5">
                                                                <label class="form-check-label" for="radio-icon6"><span>Percentage-based discount(%)</span></label>
                                                            </li>
                                                            <li> 
                                                                <input class="form-check-input" id="radio-icon7" type="radio" name="radio5" value="option5">
                                                                <label class="form-check-label" for="radio-icon7"><span>Volume or bulk discount</span></label>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                        </div>
                                                        <div class="product-buttons">
                                                        <div class="btn">
                                                            <div class="d-flex align-items-center gap-sm-2 gap-1">
                                                            <svg>
                                                                <use href="../assets/svg/icon-sprite.svg#back-arrow"></use>
                                                            </svg>Previous
                                                            </div>
                                                        </div>
                                                        <div class="btn">
                                                            <div class="d-flex align-items-center gap-sm-2 gap-1">Next
                                                            <svg>
                                                                <use href="../assets/svg/icon-sprite.svg#front-arrow">   </use>
                                                            </svg>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </form>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="advance-product" role="tabpanel" aria-labelledby="advance-product-tab">
                                                    <div class="sidebar-body advance-options">
                                                    <ul class="nav nav-tabs border-tab mb-0" id="advance-option-tab" role="tablist">
                                                        <li class="nav-item"><a class="nav-link active" id="manifest-option-tab" data-bs-toggle="tab" href="#manifest-option" role="tab" aria-controls="manifest-option" aria-selected="true">Inventory</a></li>
                                                        <li class="nav-item"><a class="nav-link" id="additional-option-tab" data-bs-toggle="tab" href="#additional-option" role="tab" aria-controls="additional-option" aria-selected="false">Additional Options</a></li>
                                                        <li class="nav-item"><a class="nav-link" id="dropping-option-tab" data-bs-toggle="tab" href="#dropping-option" role="tab" aria-controls="dropping-option" aria-selected="false">Shipping</a></li>
                                                    </ul>
                                                    <div class="tab-content" id="advance-option-tabContent">
                                                        <div class="tab-pane fade show active" id="manifest-option" role="tabpanel" aria-labelledby="manifest-option-tab">
                                                        <div class="meta-body"> 
                                                            <form id="advance-tab">
                                                            <div class="row g-3 custom-input">
                                                                <div class="col-sm-6">
                                                                <label class="form-label">Stock Availability</label>
                                                                <select class="form-select" aria-label="Default select example">
                                                                    <option selected="">In stock</option>
                                                                    <option value="1">Out of stock</option>
                                                                    <option value="2">Pre-order</option>
                                                                </select>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                <label class="form-label">Low Stock</label>
                                                                <select class="form-select" aria-label="Default select example">
                                                                    <option selected="">Low Stock (5 or less)</option>
                                                                    <option value="1">Low Stock (10 or less)</option>
                                                                    <option value="2">Low Stock (20 or less)</option>
                                                                    <option value="2">Low Stock (25 or less)</option>
                                                                    <option value="2">Low Stock (30 or less)</option>
                                                                </select>
                                                                </div>
                                                                <div class="col-lg-3 col-sm-6">
                                                                <label class="form-label" for="exampleFormControlInput1">SKU <span class="txt-danger">*</span></label>
                                                                <input class="form-control" id="exampleFormControlInput1" type="text">
                                                                </div>
                                                                <div class="col-lg-3 col-sm-6">
                                                                <label class="form-label" for="exampleFormControlInputa">Stock Quantity <span class="txt-danger">*</span></label>
                                                                <input class="form-control" id="exampleFormControlInputa" type="number" value="7" min="0">
                                                                </div>
                                                                <div class="col-lg-3 col-sm-6"> 
                                                                <label class="form-label" for="exampleFormControlInputb">Restock Date <span class="txt-danger">*</span></label>
                                                                <input class="form-control" id="exampleFormControlInputb" type="number">
                                                                </div>
                                                                <div class="col-lg-3 col-sm-6"> 
                                                                <label class="form-label" for="exampleFormControlInputc">Pre-Order <span class="txt-danger">*</span></label>
                                                                <input class="form-control" id="exampleFormControlInputc" type="number">
                                                                </div>
                                                                <div class="col-12"> 
                                                                <label class="form-label">Allow Backorders</label>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" id="gridCheck" type="checkbox">
                                                                    <label class="form-check-label m-0" for="gridCheck">This is a digital Product</label>
                                                                    <p class="f-light">Decide if the product is a digital or physical item. Shipping may be necessary for real-world items.</p>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-buttons"> 
                                                                <div class="btn"> 
                                                                <div class="d-flex align-items-center gap-sm-2 gap-1">
                                                                    <svg>
                                                                    <use href="../assets/svg/icon-sprite.svg#back-arrow"></use>
                                                                    </svg>Previous
                                                                </div>
                                                                </div>
                                                                <div class="btn">
                                                                <div class="d-flex align-items-center gap-sm-2 gap-1">Next
                                                                    <svg>
                                                                    <use href="../assets/svg/icon-sprite.svg#front-arrow"></use>
                                                                    </svg>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </form>
                                                        </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="additional-option" role="tabpanel" aria-labelledby="additional-option-tab">
                                                        <div class="meta-body">
                                                            <form>
                                                            <div class="row g-3"> 
                                                                <div class="col-12"> 
                                                                <div class="row g-3">
                                                                    <div class="col-sm-6">
                                                                    <div class="row custom-input">
                                                                        <div class="col-12">
                                                                        <label class="form-label" for="tagTitle">Additional Tag Title</label>
                                                                        </div>
                                                                        <div class="col-12">
                                                                        <input class="form-control" id="tagTitle" type="text">
                                                                        <p class="f-light">Add a new tag title. Keywords should be simple and accurate.</p>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                    <div class="row product-tag">
                                                                        <label class="form-label col-12">Specific Tags</label>
                                                                        <div class="col-12"> 
                                                                        <input id="specificTag" name="basic-tags1" value="watches, sports, clothes, bottles">
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                        <label class="form-label col-12">Additional Description</label>
                                                                        <div class="toolbar-box">
                                                                            <div id="toolbar4"><span class="ql-formats">
                                                                                <select class="ql-size"></select></span><span class="ql-formats">
                                                                                <button class="ql-bold">Bold </button>
                                                                                <button class="ql-italic">Italic </button>
                                                                                <button class="ql-underline">underline</button>
                                                                                <button class="ql-strike">Strike </button></span><span class="ql-formats">
                                                                                <button class="ql-list" value="ordered">List </button>
                                                                                <button class="ql-list" value="bullet"> </button>
                                                                                <button class="ql-indent" value="-1"> </button>
                                                                                <button class="ql-indent" value="+1"></button></span><span class="ql-formats">
                                                                                <button class="ql-link"></button>
                                                                                <button class="ql-image"></button>
                                                                                <button class="ql-video"></button></span></div>
                                                                            <div id="editor4"></div>
                                                                        </div>
                                                                        <p class="f-light">Enhance your SEO ranking with an added tag description for the product.</p>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-buttons">
                                                                <div class="btn">
                                                                <div class="d-flex align-items-center gap-sm-2 gap-1">
                                                                    <svg>
                                                                    <use href="../assets/svg/icon-sprite.svg#back-arrow"></use>
                                                                    </svg>Previous
                                                                </div>
                                                                </div>
                                                                <div class="btn">
                                                                <div class="d-flex align-items-center gap-sm-2 gap-1">Next
                                                                    <svg>
                                                                    <use href="../assets/svg/icon-sprite.svg#front-arrow"></use>
                                                                    </svg>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </form>
                                                        </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="dropping-option" role="tabpanel" aria-labelledby="dropping-option-tab">
                                                        <div class="meta-body">
                                                            <form>
                                                            <div class="row g-3 custom-input">
                                                                <div class="col-12">
                                                                <div class="row gx-xl-3 gx-md-2 gy-md-0 g-2">
                                                                    <div class="col-12">
                                                                    <label class="form-label" for="exampleFormControlInput1">Where can I pick up my order?</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-6">
                                                                    <input class="form-control" id="inputZip" type="number" placeholder="Zip code (10001)">
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-6">
                                                                    <input class="form-control" id="inputCity" type="text" placeholder="City">
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                    <select class="form-select" id="inputState">
                                                                        <option selected="">State</option>
                                                                        <option>Gujarat</option>
                                                                        <option>Punjab</option>
                                                                        <option>Himachal pradesh</option>
                                                                        <option>Goa </option>
                                                                        <option>Sikkim </option>
                                                                        <option>Telangana</option>
                                                                    </select>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <div class="col-12">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                    <label class="form-label" for="exampleFormControlInput1">Weight (kg)</label><i class="icon-help-alt ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="set proper weight for product items."></i>
                                                                    </div>
                                                                    <div class="col-12">
                                                                    <input class="form-control" id="inputCitya" type="number">
                                                                    <p class="f-light">Decide if the product is a digital or physical item. Shipping may be necessary for real-world items.</p>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <div class="col-12">
                                                                <div class="row gx-xl-3 gx-md-2 gy-md-0 g-2">
                                                                    <div class="col-12">
                                                                    <label class="form-label" for="exampleFormControlInput1">Dimensions </label><i class="icon-help-alt ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="set proper length/width and height for product items."></i>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-6"> 
                                                                    <input class="form-control" id="inputCityb" type="number" placeholder="Length[l]">
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-6"> 
                                                                    <input class="form-control" id="inputCityc" type="number" placeholder="Width[w]">
                                                                    </div>
                                                                    <div class="col-md-4"> 
                                                                    <input class="form-control" id="inputCityd" type="number" placeholder="Height[h]">
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <div class="col-12">
                                                                <div class="row"> 
                                                                    <div class="col-12">
                                                                    <label class="form-label" for="exampleFormControlInput1">Shipping Class</label>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                    <select class="form-select" id="inputState1">
                                                                        <option selected="">Basic Shipping</option>
                                                                        <option>Expedited Shipping</option>
                                                                        <option>International Shipping</option>
                                                                        <option>Free Shipping</option>
                                                                        <option>Same-Day or Next-Day Shipping</option>
                                                                        <option>Flat Rate Shipping</option>
                                                                        <option>Local Pickup </option>
                                                                    </select>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-buttons">
                                                                <div class="btn">
                                                                <div class="d-flex align-items-center gap-sm-2 gap-1">
                                                                    <svg>
                                                                    <use href="../assets/svg/icon-sprite.svg#back-arrow"></use>
                                                                    </svg>Previous 
                                                                </div>
                                                                </div>
                                                                <div class="btn">
                                                                <div class="d-flex align-items-center gap-sm-2 gap-1">Submit
                                                                    <svg>
                                                                    <use href="../assets/svg/icon-sprite.svg#front-arrow"></use>
                                                                    </svg>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </form>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <!-- Container-fluid Ends-->
        </div>
          @endsection