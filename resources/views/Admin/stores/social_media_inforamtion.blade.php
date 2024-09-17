        <div class="tab-pane fade" id="Social_Media_Information" role="tabpanel" aria-labelledby="Social_Media_Information-tab">
                                                        <div class="meta-body">
     <div class="card"> 
                    <div class="card-header d-block d-md-flex justify-content-between">
                      <h4>Store {{$store->store_business_name}}</h4>
                      <div class="d-flex flex-wrap gap-2 mt-3 mt-md-0">
                   
                        <a class="btn btn-success" href="{{route('franchises.create')}}">
Add Franchise
                        </a>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row g-xl-5 g-3">
                        <div class="col-sm-12">
                                           <form action="#" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <!-- Facebook Link -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="facebook_link">Facebook Link</label>
                <input type="url" class="form-control @error('facebook_link') is-invalid @enderror" id="facebook_link" name="facebook_link" 
                    placeholder="Enter Facebook link" value="{{ old('facebook_link') }}">
                @error('facebook_link')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Tiktok Link -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="tiktok_link">Tiktok Link</label>
                <input type="url" class="form-control @error('tiktok_link') is-invalid @enderror" id="tiktok_link" name="tiktok_link" 
                    placeholder="Enter Tiktok link" value="{{ old('tiktok_link') }}">
                @error('tiktok_link')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Instagram Link -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="insta_link">Instagram Link</label>
                <input type="url" class="form-control @error('insta_link') is-invalid @enderror" id="insta_link" name="insta_link" 
                    placeholder="Enter Instagram link" value="{{ old('insta_link') }}">
                @error('insta_link')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
  
        <!-- Instagram Username -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="insta_username">Instagram Username</label>
                <input type="text" class="form-control @error('insta_username') is-invalid @enderror" id="insta_username" name="insta_username" 
                    placeholder="Enter Instagram username" value="{{ old('insta_username') }}">
                @error('insta_username')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Instagram Password -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="insta_password">Instagram Password</label>
                <input type="password" class="form-control @error('insta_password') is-invalid @enderror" id="insta_password" name="insta_password" 
                    placeholder="Enter Instagram password">
                @error('insta_password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Tiktok Username -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="tiktok_username">Tiktok Username</label>
                <input type="text" class="form-control @error('tiktok_username') is-invalid @enderror" id="tiktok_username" name="tiktok_username" 
                    placeholder="Enter Tiktok username" value="{{ old('tiktok_username') }}">
                @error('tiktok_username')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
 
        <!-- Tiktok Password -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="tiktok_password">Tiktok Password</label>
                <input type="password" class="form-control @error('tiktok_password') is-invalid @enderror" id="tiktok_password" name="tiktok_password" 
                    placeholder="Enter Tiktok password">
                @error('tiktok_password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

                               
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
          </div>