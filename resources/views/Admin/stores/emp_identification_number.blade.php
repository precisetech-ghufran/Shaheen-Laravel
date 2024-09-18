 
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
                        <form method="POST" action="/submit-ein-form">
            @csrf <!-- Laravel Blade directive for CSRF protection -->

            <div class="row g-3">
                <!-- Employer Identification Number (EIN) -->
                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="text" class="form-control @error('ein_number') is-invalid @enderror" id="ein_number" name="ein_number" placeholder="Employer Identification Number (EIN)" value="{{ old('ein_number') }}">
                        <label for="ein_number">Employer Identification Number (EIN)</label>
                        @error('ein_number')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Pin Code (EIN) -->
                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="text" class="form-control @error('ein_pin') is-invalid @enderror" id="ein_pin" name="ein_pin" placeholder="Pin Code (EIN)" value="{{ old('ein_pin') }}">
                        <label for="ein_pin">Pin Code (EIN)</label>
                        @error('ein_pin')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Address with IRS (EIN) -->
                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="text" class="form-control @error('ein_address') is-invalid @enderror" id="ein_address" name="ein_address" placeholder="Address with IRS (EIN)" value="{{ old('ein_address') }}">
                        <label for="ein_address">Address with IRS (EIN)</label>
                        @error('ein_address')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row g-3 mt-3">
                <!-- Submit Button -->
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                </div>
            </div>
        </form>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
          