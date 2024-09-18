 
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
                         <form method="POST" action="">
            @csrf <!-- Laravel Blade directive for CSRF protection -->
            
            <div class="row g-3">
                <!-- Username -->
                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Username" value="{{ old('username') }}">
                        <label for="username">Username</label>
                        @error('username')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <!-- Password -->
                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <!-- Employer ID -->
                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="text" class="form-control @error('employer_id') is-invalid @enderror" id="employer_id" name="employer_id" placeholder="Employer ID" value="{{ old('employer_id') }}">
                        <label for="employer_id">Employer ID</label>
                        @error('employer_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            
            <div class="row g-3 mt-3">
                <!-- Portal Link -->
                <div class="col-md-4 col-lg-12">
                    <div class="form-floating">
                        <input type="url" class="form-control @error('portal_link') is-invalid @enderror" id="portal_link" name="portal_link" placeholder="Portal Link" value="{{ old('portal_link') }}">
                        <label for="portal_link">Portal Link</label>
                        @error('portal_link')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
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
          