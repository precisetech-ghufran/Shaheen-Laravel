                                                        <div class="meta-body"> 
 <div class="card"> 
                    <div class="card-header d-block d-md-flex justify-content-between">
                      <h5>Edit Store {{$store->store_business_name}}</h5>
                      <div class="d-flex flex-wrap gap-2 mt-3 mt-md-0">
                   
                       <!--  <a class="btn btn-success" href="{{ route('stores.index') }}">
                            View Store
                        </a> -->
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
        