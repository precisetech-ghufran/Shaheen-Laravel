@extends('admin.index')
@section('content')
@php
    $table = 'landlords';
@endphp
<div class="page-body">
            <div class="container-fluid">
              <div class="page-title">
                <div class="row">
                  <div class="col-6">
                    <h4>Add Landlord</h4>
                  </div>
                  <div class="col-6">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">                                       
                          <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                          </svg></a></li>
                      <li class="breadcrumb-item">Add</li>
                      <li class="breadcrumb-item active">Landlord</li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
              <div class="row"> 
                <div class="col-12"> 
                  <div class="card"> 
                    <div class="card-header d-block d-md-flex justify-content-between">
                      <h5>Add Landlord Form</h5>
                      <div class="d-flex flex-wrap gap-2 mt-3 mt-md-0">
                   
                        <a class="btn btn-success" href="{{route('landlords.index')}}">
View Landlords
                        </a>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row g-xl-5 g-3">
                        <div class="col-sm-12">
         <form action="{{ route('landlords.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-lg-6 col-sm-12 mb-3">
            <label for="landlord_name">Landlord Name<span class="text-danger">*</span></label>
            <input type="text" name="landlord_name" id="landlord_name" class="form-control @error('landlord_name') is-invalid @enderror" value="{{ old('landlord_name') }}" placeholder="Enter Landlord Name">
            @error('landlord_name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-lg-6 col-sm-12 mb-3">
            <label for="company_name">Company Name</label>
            <input type="text" name="company_name" id="company_name" class="form-control @error('company_name') is-invalid @enderror" value="{{ old('company_name') }}" placeholder="Enter Company Name">
            @error('company_name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-lg-6 col-sm-12 mb-3">
            <label for="website">Website</label>
            <input type="url" name="website" id="website" class="form-control @error('website') is-invalid @enderror" value="{{ old('website') }}" placeholder="Enter Website URL">
            @error('website')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-lg-6 col-sm-12 mb-3">
            <label for="landlord_address">Landlord Address</label>
            <input type="text" name="landlord_address" id="landlord_address" class="form-control @error('landlord_address') is-invalid @enderror" value="{{ old('landlord_address') }}" placeholder="Enter Landlord Address">
            @error('landlord_address')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-lg-6 col-sm-12 mb-3">
            <label for="stateid">State<span class="text-danger">*</span></label>
            <select name="stateid" id="stateid" class="form-control select2 @error('stateid') is-invalid @enderror">
                <option value="">Select State</option>
                @foreach ($states as $state)
                    <option value="{{ $state->id }}" {{ old('stateid') == $state->id ? 'selected' : '' }}>
                        {{ $state->name }}
                    </option>
                @endforeach
            </select>
            @error('stateid')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-lg-6 col-sm-12 mb-3">
            <label for="cityid">City<span class="text-danger">*</span></label>
            <select name="cityid" id="cityid" class="form-control select2 @error('cityid') is-invalid @enderror">
                <option value="">Select City</option>
                <!-- Cities will be loaded dynamically -->
            </select>
            @error('cityid')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-lg-6 col-sm-12 mb-3">
            <label for="landlord_zip_code">Zip Code</label>
            <input type="text" name="landlord_zip_code" id="landlord_zip_code" class="form-control @error('landlord_zip_code') is-invalid @enderror" value="{{ old('landlord_zip_code') }}" placeholder="Enter Zip Code">
            @error('landlord_zip_code')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-lg-6 col-sm-12 mb-3">
            <label for="landlord_county">County</label>
            <input type="text" name="landlord_county" id="landlord_county" class="form-control @error('landlord_county') is-invalid @enderror" value="{{ old('landlord_county') }}" placeholder="Enter County">
            @error('landlord_county')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-lg-6 col-sm-12 mb-3">
            <label for="contact_person">Contact Person</label>
            <input type="text" name="contact_person" id="contact_person" class="form-control @error('contact_person') is-invalid @enderror" value="{{ old('contact_person') }}" placeholder="Enter Contact Person">
            @error('contact_person')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-lg-6 col-sm-12 mb-3">
            <label for="landlord_contact_no">Contact No<span class="text-danger">*</span></label>
            <input type="text" name="landlord_contact_no" id="landlord_contact_no" class="form-control @error('landlord_contact_no') is-invalid @enderror" value="{{ old('landlord_contact_no') }}" placeholder="Enter Correct Format +23054942848842929">
            @error('landlord_contact_no')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-lg-6 col-sm-12 mb-3">
            <label for="landlord_email">Email<span class="text-danger">*</span></label>
            <input type="email" name="landlord_email" id="landlord_email" class="form-control @error('landlord_email') is-invalid @enderror" value="{{ old('landlord_email') }}" placeholder="Enter Email Address">
            @error('landlord_email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12 mb-3">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</form>
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


