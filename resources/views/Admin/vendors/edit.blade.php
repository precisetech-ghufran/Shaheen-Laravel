@extends('admin.index')
@section('content')


<div class="page-body">
            <div class="container-fluid">
              <div class="page-title">
                <div class="row">
                  <div class="col-6">
                    <h4>Update Vendor</h4>
                  </div>
                  <div class="col-6">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">                                       
                          <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                          </svg></a></li>
                      <li class="breadcrumb-item">Update</li>
                      <li class="breadcrumb-item active">Vendor</li>
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
                      <h5>Update Vendor Form</h5>
                      <div class="d-flex flex-wrap gap-2 mt-3 mt-md-0">
                   
                        <a class="btn btn-success" href="{{ route('Vendors.index') }}">
                            View Vendors
                        </a>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row g-xl-5 g-3">
                     <form action="{{ route('Vendors.update', $vendor->id) }}" method="POST">
    @csrf
    @method('PUT')

        <div class="row">
            <!-- Vendor Name -->
            <div class="form-group col-lg-4 col-sm-12">
                <label for="vendor_name">Vendor Name <span class="text-danger">*</span></label>
                <input 
                    type="text" 
                    name="vendor_name" 
                     class="form-control @error('vendor_name') is-invalid @enderror" 
                    placeholder="Enter vendor name" 
                    value="{{ $vendor->vendor_name }}" 
                      >
                @error('vendor_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- Vendor Address -->
            <div class="form-group col-lg-4 col-sm-12">
                <label for="vendor_address">Vendor Address</label>
                <input 
                    type="text" 
                    name="vendor_address" 
                    class="form-control @error('vendor_address') is-invalid @enderror" 
                    placeholder="Enter vendor address" 
                    value="{{ $vendor->vendor_address }}">
                @error('vendor_address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- State -->
            <div class="form-group col-lg-4 col-sm-12">
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
        </div>
<br/>
        <div class="row">
            <!-- City -->
            <div class="form-group col-lg-4 col-sm-12">
              <label for="cityid">City<span class="text-danger">*</span></label>
            <select name="cityid" id="cityid" class="form-control select2 @error('cityid') is-invalid @enderror">
                <option value="">Select City</option>
                <!-- Cities will be loaded dynamically -->
            </select>
            @error('cityid')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            </div>

            <!-- Vendor Zip Code -->
            <div class="form-group col-lg-4 col-sm-12">
                <label for="vendor_zip_code">Vendor Zip Code</label>
                <input 
                    type="text" 
                    name="vendor_zip_code" 
                    class="form-control @error('vendor_zip_code') is-invalid @enderror" 
                    placeholder="Enter vendor zip code" 
                    value="{{ $vendor->vendor_zip_code }}">
                @error('vendor_zip_code')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- Vendor County -->
            <div class="form-group col-lg-4 col-sm-12">
                <label for="vendor_county">Vendor County</label>
                <input 
                    type="text" 
                    name="vendor_county" 
                    class="form-control @error('vendor_county') is-invalid @enderror" 
                    placeholder="Enter vendor county" 
                    value="{{ $vendor->vendor_county }}">
                @error('vendor_county')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
<br/>
        <div class="row">
            <!-- Vendor Group -->
            <div class="form-group col-lg-4 col-sm-12">
                <label for="vendor_group_id">Vendor Group</label>
                <select 
                    name="vendor_group_id" 
                    class="form-control select2 @error('vendor_group_id') is-invalid @enderror" 
                      >
                    <option value="">Select Vendor Group</option>
                    @foreach($vendorGroups as $group)
                        <option value="{{ $group->id }}" {{ old('vendor_group_id') == $group->id ? 'selected' : '' }}>
                            {{ $group->vendor_group }}
                        </option>
                    @endforeach
                </select>
                @error('vendor_group_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- Vendor Email -->
            <div class="form-group col-lg-4 col-sm-12">
                <label for="vendor_email">Vendor Email</label>
                <input 
                    type="email" 
                    name="vendor_email" 
                    class="form-control @error('vendor_email') is-invalid @enderror" 
                    placeholder="Enter vendor email" 
                    value="{{ $vendor->vendor_email}}">
                @error('vendor_email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- Vendor Phone Number -->
            <div class="form-group col-lg-4 col-sm-12">
                <label for="vendor_phone_number">Vendor Phone Number</label>
                <input 
                    type="text" 
                    name="vendor_phone_number" 
                    class="form-control @error('vendor_phone_number') is-invalid @enderror" 
                    placeholder="Enter vendor phone number" 
                    value="{{ $vendor->vendor_phone_number }}">
                @error('vendor_phone_number')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
<br/>
        <div class="row">
            <!-- Vendor Website -->
            <div class="form-group col-lg-4 col-sm-12">
                <label for="vendor_website">Vendor Website</label>
                <input 
                    type="text" 
                    name="vendor_website" 
                    class="form-control @error('vendor_website') is-invalid @enderror" 
                     placeholder="Enter vendor website" 
                    value="{{ $vendor->vendor_website}}">
                @error('vendor_website')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- Contact Person -->
            <div class="form-group col-lg-4 col-sm-12">
                <label for="contact_person">Contact Person</label>
                <input 
                    type="text" 
                    name="contact_person" 
                    class="form-control @error('contact_person') is-invalid @enderror" 
                    placeholder="Enter contact person" 
                    value="{{ $vendor->contact_person}}">
                @error('contact_person')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- Notes -->
            <div class="form-group col-lg-4 col-sm-12">
                <label for="notes">Notes</label>
                <textarea 
                    name="notes" 
                    class="form-control @error('notes') is-invalid @enderror" 
                    placeholder="Enter any notes">{{ $vendor->notes }}</textarea>
                @error('notes')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
<br/>
        <div class="row">
            <!-- Customer Service Phone No -->
            <div class="form-group col-lg-4 col-sm-12">
                <label for="customer_service_phone_no">Customer Service Phone No</label>
                <input 
                    type="text" 
                    name="customer_service_phone_no" 
                    class="form-control @error('customer_service_phone_no') is-invalid @enderror" 
                    placeholder="Enter customer service phone no" 
                    value="{{ $vendor->customer_service_phone_no }}">
                @error('customer_service_phone_no')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- Billing And Payments Phone No -->
            <div class="form-group col-lg-4 col-sm-12">
                <label for="billing_phone_no">Billing And Payments Phone No</label>
                <input 
                    type="text" 
                    name="billing_phone_no" 
                    class="form-control @error('billing_phone_no') is-invalid @enderror" 
                    placeholder="Enter billing and payments phone no" 
                    value="{{ $vendor->billing_phone_no }}">
                @error('billing_phone_no')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
 
<br/>
        <button type="submit" class="btn btn-primary">Submit</button>
    
    </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Container-fluid Ends-->
          </div>
          @endsection