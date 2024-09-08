@extends('admin.index')
@section('content')
<div class="page-body">
            <div class="container-fluid">
              <div class="page-title">
                <div class="row">
                  <div class="col-6">
                    <h4>Update Tenant</h4>
                  </div>
                  <div class="col-6">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">                                       
                          <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                          </svg></a></li>
                      <li class="breadcrumb-item">Update</li>
                      <li class="breadcrumb-item active">Tenant</li>
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
                      <h5>Update Tenant Form</h5>
                      <div class="d-flex flex-wrap gap-2 mt-3 mt-md-0">
                   
                        <a class="btn btn-success" href="{{route('tenants.create')}}">
Add Tenant
                        </a>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row g-xl-5 g-3">
                        <div class="col-sm-12">
                            <form action="{{ route('tenants.update', $tenant->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-lg-6 col-sm-12 mb-3">
                <label for="tenant_name">Tenant Name</label>
                <input type="text" name="tenant_name" id="tenant_name" placeholder="Enter Tenant Name" class="form-control @error('tenant_name') is-invalid @enderror" value="{{ old('tenant_name', $tenant->tenant_name) }}">
                @error('tenant_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-lg-6 col-sm-12 mb-3">
                <label for="company_name">Company Name</label>
                <input type="text" name="company_name" id="company_name" placeholder="Enter Company Name" class="form-control @error('company_name') is-invalid @enderror" value="{{ old('company_name', $tenant->company_name) }}">
                @error('company_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-lg-6 col-sm-12 mb-3">
                <label for="website">Website</label>
                <input type="url" name="website" id="website" placeholder="Enter Website URL" class="form-control @error('website') is-invalid @enderror" value="{{ old('website', $tenant->website) }}">
                @error('website')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-lg-6 col-sm-12 mb-3">
                <label for="tenant_address">Tenant Address</label>
                <input type="text" name="tenant_address" id="tenant_address" placeholder="Enter Tenant Address" class="form-control @error('tenant_address') is-invalid @enderror" value="{{ old('tenant_address', $tenant->tenant_address) }}">
                @error('tenant_address')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- State Dropdown -->
            <div class="col-lg-6 col-sm-12 mb-3">
                <label for="stateid">State</label>
                <select name="stateid" id="stateid" class="form-control @error('stateid') is-invalid @enderror">
                    <option value="">Select State</option>
                    @foreach ($states as $state)
                        <option value="{{ $state->id }}" {{ old('stateid', $tenant->stateid) == $state->id ? 'selected' : '' }}>
                            {{ $state->name }}
                        </option>
                    @endforeach
                </select>
                @error('stateid')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- City Dropdown -->
            <div class="col-lg-6 col-sm-12 mb-3">
                <label for="cityid">City</label>
                <select name="cityid" id="cityid" class="form-control @error('cityid') is-invalid @enderror">
                    <option value="">Select City</option>
                    @foreach ($cities as $city)
                        <option value="{{ $city->id }}" {{ old('cityid', $tenant->cityid) == $city->id ? 'selected' : '' }}>
                            {{ $city->name }}
                        </option>
                    @endforeach
                </select>
                @error('cityid')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-lg-6 col-sm-12 mb-3">
                <label for="tenant_zip_code">Tenant Zip Code</label>
                <input type="text" name="tenant_zip_code" id="tenant_zip_code" placeholder="Enter Tenant Zip Code" class="form-control @error('tenant_zip_code') is-invalid @enderror" value="{{ old('tenant_zip_code', $tenant->tenant_zip_code) }}">
                @error('tenant_zip_code')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-lg-6 col-sm-12 mb-3">
                <label for="tenant_county">Tenant County</label>
                <input type="text" name="tenant_county" id="tenant_county" placeholder="Enter Tenant County" class="form-control @error('tenant_county') is-invalid @enderror" value="{{ old('tenant_county', $tenant->tenant_county) }}">
                @error('tenant_county')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-lg-6 col-sm-12 mb-3">
                <label for="contact_person">Contact Person</label>
                <input type="text" name="contact_person" id="contact_person" placeholder="Enter Contact Person Name" class="form-control @error('contact_person') is-invalid @enderror" value="{{ old('contact_person', $tenant->contact_person) }}">
                @error('contact_person')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-lg-6 col-sm-12 mb-3">
                <label for="tenant_contact_no">Tenant Contact No</label>
                <input type="text" name="tenant_contact_no" id="tenant_contact_no" placeholder="Enter Tenant Contact No" class="form-control @error('tenant_contact_no') is-invalid @enderror" value="{{ old('tenant_contact_no', $tenant->tenant_contact_no) }}">
                @error('tenant_contact_no')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-lg-6 col-sm-12 mb-3">
                <label for="tenant_email">Tenant Email</label>
                <input type="email" name="tenant_email" id="tenant_email" placeholder="Enter Tenant Email" class="form-control @error('tenant_email') is-invalid @enderror" value="{{ old('tenant_email', $tenant->tenant_email) }}">
                @error('tenant_email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12 mb-3">
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
            </div>
            <!-- Container-fluid Ends-->
          </div>
          @endsection