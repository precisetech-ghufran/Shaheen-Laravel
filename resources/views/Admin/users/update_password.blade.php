@extends('admin.index')
@section('content')


<div class="page-body">
    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-6">
            <h4>Update User Password</h4>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">                                       
                  <svg class="stroke-icon">
                   
                    <use href=" {{asset('assets/svg/icon-sprite.svg#stroke-home')}}"></use>
                  </svg></a></li>
              <li class="breadcrumb-item">Update</li>
              <li class="breadcrumb-item active">Password</li>
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
              <h5>Update User Password</h5>
              <div class="d-flex flex-wrap gap-2 mt-3 mt-md-0">
               
                {{-- <a class="btn btn-danger" href="{{route('all.roles')}}">
                    View Roles
                </a> --}}
                {{-- <a class="btn btn-success" href="{{route('add.roles')}}">
                    Add Roles
                </a> --}}
              </div>
            </div>
            <div class="card-body">
              <div class="row g-xl-5 g-3">
                <div class="col-sm-12">
                  
                    <form id="advance-tab" action="{{route('password_update',$auth_user->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="row g-3 custom-input">
                         
                        
                        
                      
                      
                        <div class="col-lg-6 col-sm-6"> 
                            <label class="form-label" for="exampleFormControlInputc">Current Password <span class="txt-danger">*</span></label>
  <input class="form-control" id="password" type="password" name="current_password"  value="">
  @error('current_password')
  <span class="text-danger">{{ $message }}</span>
@enderror
                        </div>
                        <div class="col-lg-6 col-sm-6"> 
                            <label class="form-label" for="password_confirmation">New Password <span class="txt-danger">*</span></label>
                            <input class="form-control"  id="exampleFormControlInputc" type="password"  name="password">
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>

                          <div class="col-lg-6 col-sm-6"> 
                            <label class="form-label" for="password_confirmation">Confirm Password <span class="txt-danger">*</span></label>
                            <input class="form-control"  id="exampleFormControlInputc" type="password"  name="password_confirmation">
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>

                        {{-- <div class="col-sm-12"> 
                            <label class="form-label" for="exampleFormControlInputc">Details <span class="txt-danger">*</span></label>
                            <textarea class="form-control" rows="9"></textarea>
                        </div> --}}

                        


                     



                        </div>
                        <div class="position-relative d-flex justify-content-end">
                            <input type="submit" value="Submit" class="btn btn-primary mt-4"/>
                    
                        </div>
                    </form>



                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

</div>


@endsection