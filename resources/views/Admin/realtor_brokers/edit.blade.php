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
                    <h4>Update Realtor / Broker</h4>
                  </div>
                  <div class="col-6">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">                                       
                          <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                          </svg></a></li>
                      <li class="breadcrumb-item">Update</li>
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
                      <h5>Update Realtor / Broker Form</h5>
                      <div class="d-flex flex-wrap gap-2 mt-3 mt-md-0">
                   
                        <a class="btn btn-success" href="{{route('realtors.create')}}">
Add Realtor / Broker
                        </a>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row g-xl-5 g-3">
                        <div class="col-sm-12">
                                                             <form action="{{ route('realtors.update', $realtorBroker->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <!-- Realtor Name -->
            <div class="col-lg-6 col-sm-12 mb-3">
                <label for="realtor_name">Realtor Name</label>
                <input type="text" name="realtor_name" id="realtor_name" class="form-control @error('realtor_name') is-invalid @enderror" value="{{ old('realtor_name', $realtorBroker->realtor_name) }}">
                @error('realtor_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Company Name -->
            <div class="col-lg-6 col-sm-12 mb-3">
                <label for="company_name">Company Name</label>
                <input type="text" name="company_name" id="company_name" class="form-control @error('company_name') is-invalid @enderror" value="{{ old('company_name', $realtorBroker->company_name) }}">
                @error('company_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Website -->
            <div class="col-lg-6 col-sm-12 mb-3">
                <label for="website">Website</label>
                <input type="url" name="website" id="website" class="form-control @error('website') is-invalid @enderror" value="{{ old('website', $realtorBroker->website) }}">
                @error('website')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Address -->
            <div class="col-lg-6 col-sm-12 mb-3">
                <label for="realtor_address">Address</label>
                <input type="text" name="realtor_address" id="realtor_address" class="form-control @error('realtor_address') is-invalid @enderror" value="{{ old('realtor_address', $realtorBroker->realtor_address) }}">
                @error('realtor_address')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- State -->
            <div class="col-lg-6 col-sm-12 mb-3">
                <label for="stateid">State</label>
                <select name="stateid" id="stateid" class="form-control @error('stateid') is-invalid @enderror">
                    <option value="">Select State</option>
                    @foreach ($states as $state)
                        <option value="{{ $state->id }}" {{ old('stateid', $realtorBroker->stateid) == $state->id ? 'selected' : '' }}>
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
                <label for="cityid">City</label>
                <select name="cityid" id="cityid" class="form-control @error('cityid') is-invalid @enderror">
                    <option value="">Select City</option>
                    <!-- Cities will be loaded dynamically -->
                </select>
                @error('cityid')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Zip Code -->
            <div class="col-lg-6 col-sm-12 mb-3">
                <label for="realtor_zip_code">Zip Code</label>
                <input type="text" name="realtor_zip_code" id="realtor_zip_code" class="form-control @error('realtor_zip_code') is-invalid @enderror" value="{{ old('realtor_zip_code', $realtorBroker->realtor_zip_code) }}">
                @error('realtor_zip_code')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- County -->
            <div class="col-lg-6 col-sm-12 mb-3">
                <label for="realtor_county">County</label>
                <input type="text" name="realtor_county" id="realtor_county" class="form-control @error('realtor_county') is-invalid @enderror" value="{{ old('realtor_county', $realtorBroker->realtor_county) }}">
                @error('realtor_county')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Phone No -->
            <div class="col-lg-6 col-sm-12 mb-3">
                <label for="realtor_phone_no">Phone No</label>
                <input type="text" name="realtor_phone_no" id="realtor_phone_no" class="form-control @error('realtor_phone_no') is-invalid @enderror" value="{{ old('realtor_phone_no', $realtorBroker->realtor_phone_no) }}">
                @error('realtor_phone_no')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Contact Person -->
            <div class="col-lg-6 col-sm-12 mb-3">
                <label for="contact_person">Contact Person</label>
                <input type="text" name="contact_person" id="contact_person" class="form-control @error('contact_person') is-invalid @enderror" value="{{ old('contact_person', $realtorBroker->contact_person) }}">
                @error('contact_person')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Email -->
            <div class="col-lg-6 col-sm-12 mb-3">
                <label for="realtor_email">Email</label>
                <input type="email" name="realtor_email" id="realtor_email" class="form-control @error('realtor_email') is-invalid @enderror" value="{{ old('realtor_email', $realtorBroker->realtor_email) }}">
                @error('realtor_email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Submit Button -->
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
          <script>
$(document).ready(function() {
    function loadCities(stateId, selectedCityId = null) {
        let cityDropdown = $('#cityid');

        // Clear previous cities
        cityDropdown.empty().append('<option value="">Select City</option>');

        if (stateId) {
            $.ajax({
                url: "{{ route('cities.byState') }}",
                type: 'GET',
                data: { state_id: stateId },
                success: function(response) {
                    if (response.cities.length > 0) {
                        $.each(response.cities, function(index, city) {
                            cityDropdown.append('<option value="' + city.id + '"' + (city.id == selectedCityId ? ' selected' : '') + '>' + city.name + '</option>');
                        });
                    } else {
                        cityDropdown.append('<option value="">No cities available</option>');
                    }
                }
            });
        }
    }

    // Load cities on page load with the selected city
    let stateId = $('#stateid').val();
    let selectedCityId = "{{ old('cityid', $realtorBroker->cityid) }}";
    loadCities(stateId, selectedCityId);

    // Load cities when the state changes
    $('#stateid').change(function() {
        let stateId = $(this).val();
        loadCities(stateId);
    });
});
</script>