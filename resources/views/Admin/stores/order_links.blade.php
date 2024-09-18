 
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
                          <form method="POST" action="/submit-links-form">
            @csrf <!-- Laravel Blade directive for CSRF protection -->

            <div class="row g-3">
                <!-- Ezcater Link -->
                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="url" class="form-control @error('ezcater_link') is-invalid @enderror" id="ezcater_link" name="ezcater_link" placeholder="Ezcater Link" value="{{ old('ezcater_link') }}">
                        <label for="ezcater_link">Ezcater Link</label>
                        @error('ezcater_link')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Order Link -->
                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="url" class="form-control @error('order_link') is-invalid @enderror" id="order_link" name="order_link" placeholder="Order Link" value="{{ old('order_link') }}">
                        <label for="order_link">Order Link</label>
                        @error('order_link')
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
          