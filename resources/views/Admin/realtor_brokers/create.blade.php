@extends('admin.index')
@section('content')
@php
    $table = 'realtor_brokerts';
@endphp
<div class="page-body">
            <div class="container-fluid">
              <div class="page-title">
                <div class="row">
                  <div class="col-6">
                    <h4>Add Realtor / Broker</h4>
                  </div>
                  <div class="col-6">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">                                       
                           <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                          </svg></a></li>
                      <li class="breadcrumb-item">Add</li>
                      <li class="breadcrumb-item active">Realtor / Broker</li>
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
                      <h5>Add City Form</h5>
                      <div class="d-flex flex-wrap gap-2 mt-3 mt-md-0">
                   
                        <a class="btn btn-success" href="{{route('realtors.index')}}">
View Realtors
                        </a>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row g-xl-5 g-3">
                        <div class="col-sm-12">
                          <form action="{{ route('realtors.store') }}" method="POST">
    @csrf
    <div class="row">
        <!-- Realtor Name -->
        <div class="col-lg-6 col-sm-12 mb-3">
            <label for="realtor_name">Realtor Name<span class="text-danger">*</span></label>
            <input type="text" name="realtor_name" id="realtor_name" class="form-control @error('realtor_name') is-invalid @enderror" value="{{ old('realtor_name') }}" placeholder="Enter Realtor Name">
            @error('realtor_name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Company Name -->
        <div class="col-lg-6 col-sm-12 mb-3">
            <label for="company_name">Company Name</label>
            <input type="text" name="company_name" id="company_name" class="form-control @error('company_name') is-invalid @enderror" value="{{ old('company_name') }}" placeholder="Enter Company Name">
            @error('company_name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Website -->
        <div class="col-lg-6 col-sm-12 mb-3">
            <label for="website">Website</label>
            <input type="url" name="website" id="website" class="form-control @error('website') is-invalid @enderror" value="{{ old('website') }}" placeholder="Enter Website URL">
            @error('website')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Address -->
        <div class="col-lg-6 col-sm-12 mb-3">
            <label for="realtor_address">Address<span class="text-danger">*</span></label>
            <input type="text" name="realtor_address" id="realtor_address" class="form-control @error('realtor_address') is-invalid @enderror" value="{{ old('realtor_address') }}" placeholder="Enter Address">
            @error('realtor_address')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- State -->
        <div class="col-lg-6 col-sm-12 mb-3">
            <label for="stateid">State</label>
            <select name="stateid" id="stateid" class="form-control @error('stateid') is-invalid @enderror">
                <option value="">Select State<span class="text-danger">*</span></option>
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

        <!-- City -->
        <div class="col-lg-6 col-sm-12 mb-3">
            <label for="cityid">City<span class="text-danger">*</span></label>
            <select name="cityid" id="cityid" class="form-control @error('cityid') is-invalid @enderror">
                <option value="">Select City</option>
            </select>
            @error('cityid')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Zip Code -->
        <div class="col-lg-6 col-sm-12 mb-3">
            <label for="realtor_zip_code">Zip Code</label>
            <input type="text" name="realtor_zip_code" id="realtor_zip_code" class="form-control @error('realtor_zip_code') is-invalid @enderror" value="{{ old('realtor_zip_code') }}" placeholder="Enter Zip Code">
            @error('realtor_zip_code')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- County -->
        <div class="col-lg-6 col-sm-12 mb-3">
            <label for="realtor_county">County</label>
            <input type="text" name="realtor_county" id="realtor_county" class="form-control @error('realtor_county') is-invalid @enderror" value="{{ old('realtor_county') }}" placeholder="Enter County">
            @error('realtor_county')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Phone No -->
        <div class="col-lg-6 col-sm-12 mb-3">
            <label for="realtor_phone_no">Phone No<span class="text-danger">*</span></label>
            <input type="text" name="realtor_phone_no" id="realtor_phone_no" class="form-control @error('realtor_phone_no') is-invalid @enderror" value="{{ old('realtor_phone_no') }}" placeholder="Enter Phone No">
            @error('realtor_phone_no')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Contact Person -->
        <div class="col-lg-6 col-sm-12 mb-3">
            <label for="contact_person">Contact Person</label>
            <input type="text" name="contact_person" id="contact_person" class="form-control @error('contact_person') is-invalid @enderror" value="{{ old('contact_person') }}" placeholder="Enter Contact Person">
            @error('contact_person')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Email -->
        <div class="col-lg-6 col-sm-12 mb-3">
            <label for="realtor_email">Email<span class="text-danger">*</span></label>
            <input type="email" name="realtor_email" id="realtor_email" class="form-control @error('realtor_email') is-invalid @enderror" value="{{ old('realtor_email') }}" placeholder="Enter Email">
            @error('realtor_email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit Button -->
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