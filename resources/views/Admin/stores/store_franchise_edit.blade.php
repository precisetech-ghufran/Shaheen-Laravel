        <div class="tab-pane fade" id="Basic_Information" role="tabpanel" aria-labelledby="Basic_Information-tab">
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
                                                      <form action="#" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
              <div class="col-lg-4 col-sm-12 mb-3">
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




                 <div class="col-lg-4 col-sm-12 mb-3">
                 <div class="form-group">
                                    <label for="construction_contact_email">Official Email</label>
                                    <input type="email" id="construction_contact_email" name="construction_contact_email" class="form-control @error('construction_contact_email') is-invalid @enderror" value="">
                                    @error('construction_contact_email')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                </div>

            <div class="col-lg-4 col-sm-12 mb-3">
                <div class="form-group">
                    <label for="website">Website</label>
                    <input type="url" id="website" name="website" class="form-control @error('website') is-invalid @enderror" value="">
                    @error('website')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-4 col-sm-12 mb-3">
                <div class="form-group">
                    <label for="contact_person_name">Landline Phone No ---</label>
                    <input type="text" id="contact_person_name" name="contact_person_name" class="form-control @error('contact_person_name') is-invalid @enderror" value="">
                    @error('contact_person_name')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-4 col-sm-12 mb-3">
                <div class="form-group">
                    <label for="franchisor_contact_person">Whatsapp Number --</label>
                    <input type="text" id="franchisor_contact_person" name="franchisor_contact_person" class="form-control @error('franchisor_contact_person') is-invalid @enderror" value="">
                    @error('franchisor_contact_person')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            </div>

          


        

          

            <div class="col-lg-12 mb-3">
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
          