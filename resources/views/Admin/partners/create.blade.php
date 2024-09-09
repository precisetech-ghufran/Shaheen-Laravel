@extends('admin.index')
@section('content')
<div class="page-body">
            <div class="container-fluid">
              <div class="page-title">
                <div class="row">
                  <div class="col-6">
                    <h4>Add Partner</h4>
                  </div>
                  <div class="col-6">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">                                       
                          <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                          </svg></a></li>
                      <li class="breadcrumb-item">Add</li>
                      <li class="breadcrumb-item active">Partner</li>
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
                      <h5>Add Partner Form</h5>
                      <div class="d-flex flex-wrap gap-2 mt-3 mt-md-0">
                   
                        <a class="btn btn-success" href="{{ route('partners.index') }}">
                            View Partner
                        </a>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row g-xl-5 g-3">
                        <div class="col-sm-12">
                  <form action="{{ route('partners.store') }}" method="POST">
        @csrf
        <div class="row">
            <!-- Partner Name -->
            <div class="col-lg-6 col-sm-3 mb-3">
                <label for="partner_name">Partner Name<span class="text-danger">*</span></label>
                <input type="text" name="partner_name" id="partner_name" class="form-control @error('partner_name') is-invalid @enderror" placeholder="Enter Partner Name" value="{{ old('partner_name') }}"   >
                @error('partner_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>




 
            <div class="col-lg-6 col-sm-3 mb-3">
                <label for="image">Partner Image</label>
    <input type="file" name="image" class="form-control">
    @error('image')
        <div class="text-danger">{{ $message }}</div>
    @enderror
            </div>



            <div class="col-lg-6 col-sm-3 mb-3">
                <label for="partner_address">Partner Address<span class="text-danger">*</span></label>
                <input type="text" name="partner_address" id="partner_address" class="form-control @error('partner_address') is-invalid @enderror" placeholder="Enter Partner Address" value="{{ old('partner_address') }}"   >
                @error('partner_address')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

       
            <div class="col-lg-6 col-sm-3 mb-3">
                 <label for="country_id">Country</label>
                <select name="country_id" id="country_id" class="form-control select2 @error('country_id') is-invalid @enderror"   >
                    <option value="">Select Country</option>
                    @foreach($countries as $country)
                        <option value="{{ $country->id }}" {{ old('country_id') == $country->id ? 'selected' : '' }}>
                            {{ $country->country_name }}
                        </option>
                    @endforeach
                </select>
                @error('country_id')
                    <div class="invalid-feedback">{{ $message }}</div> 
                @enderror
            </div>

            <!-- State Dropdown -->
            <div class="col-lg-6 col-sm-3 mb-3">
                <label for="stateid">State<span class="text-danger">*</span></label>
                <select name="stateid" id="stateid" class="form-control select2 @error('stateid') is-invalid @enderror"   >
                    <option value="">Select State</option>
                    @foreach($states as $state)
                        <option value="{{ $state->id }}" {{ old('state_id') == $state->id ? 'selected' : '' }}>
                            {{ $state->name }}
                        </option>
                    @endforeach
                </select>
                @error('stateid')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

         
            <div class="col-lg-6 col-sm-3 mb-3">
                <label for="cityid">City<span class="text-danger">*</span></label>
                <select name="cityid" id="cityid" class="form-control select2 @error('cityid') is-invalid @enderror"   >
                    <option value="">Select City</option>
                    <!-- Cities will be loaded via AJAX based on state selection -->
                </select>
                @error('cityid')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-lg-6 col-sm-3 mb-3">
                <label for="zip_code">Zip Code</label>
                <input type="text" name="zip_code" id="zip_code" class="form-control @error('zip_code') is-invalid @enderror" placeholder="Enter Zip Code" value="{{ old('zip_code') }}">
                @error('zip_code')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

     
            <div class="col-lg-6 col-sm-3 mb-3">
                <label for="partner_contact_no">Partner Contact No<span class="text-danger">*</span></label>
                <input type="text" name="partner_contact_no" id="partner_contact_no" class="form-control @error('partner_contact_no') is-invalid @enderror" placeholder="Enter Partner Contact No" value="{{ old('partner_contact_no') }}"   >
                @error('partner_contact_no')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

    
            <div class="col-lg-6 col-sm-3 mb-3">
                <label for="partner_ss_number">Partner SS Number</label>
                <input type="text" name="partner_ss_number" id="partner_ss_number" class="form-control @error('partner_ss_number') is-invalid @enderror" placeholder="Enter Partner SS Number" value="{{ old('partner_ss_number') }}">
                @error('partner_ss_number')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

     
            <div class="col-lg-6 col-sm-3 mb-3">
                <label for="driver_license_number">Driver License Number</label>
                <input type="text" name="driver_license_number" id="driver_license_number" class="form-control @error('driver_license_number') is-invalid @enderror" placeholder="Enter Driver License Number" value="{{ old('driver_license_number') }}">
                @error('driver_license_number')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-lg-6 col-sm-3 mb-3">
                <label for="partner_email">Partner Email<span class="text-danger">*</span></label>
                <input type="email" name="partner_email" id="partner_email" class="form-control @error('partner_email') is-invalid @enderror" placeholder="Enter Partner Email" value="{{ old('partner_email') }}"   >
                @error('partner_email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-lg-6 col-sm-3 mb-3">
                <label for="partner_nick_name">Partner Nick Name</label>
                <input type="text" name="partner_nick_name" id="partner_nick_name" class="form-control @error('partner_nick_name') is-invalid @enderror" placeholder="Enter Partner Nick Name" value="{{ old('partner_nick_name') }}">
                @error('partner_nick_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

      
            <div class="col-lg-6 col-sm-3 mb-3">
                <label for="partner_primary_phone">Partner Primary Phone</label>
                <input type="text" name="partner_primary_phone" id="partner_primary_phone" class="form-control @error('partner_primary_phone') is-invalid @enderror" placeholder="Enter Partner Primary Phone" value="{{ old('partner_primary_phone') }}">
                @error('partner_primary_phone')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-lg-6 col-sm-3 mb-3">
                <label for="partner_secondary_phone">Partner Secondary Phone</label>
                <input type="text" name="partner_secondary_phone" id="partner_secondary_phone" class="form-control @error('partner_secondary_phone') is-invalid @enderror" placeholder="Enter Partner Secondary Phone" value="{{ old('partner_secondary_phone') }}">
                @error('partner_secondary_phone')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <div class="col-lg-12 mb-3">
                <label for="notes">Notes</label>
                <textarea name="notes" id="notes" class="form-control @error('notes') is-invalid @enderror" placeholder="Enter any notes">{{ old('notes') }}</textarea>
                @error('notes')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Create Partner</button>
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