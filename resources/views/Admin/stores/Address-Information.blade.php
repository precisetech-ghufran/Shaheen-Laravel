   <div class="tab-pane fade" id="Basic_Information" role="tabpanel" aria-labelledby="Basic_Information-tab">
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