@extends('admin.index')
@section('content')


<div class="page-body">
    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-6">
            <h4>Add Users</h4>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">                                       
                  <svg class="stroke-icon">
                    <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                  </svg></a></li>
              <li class="breadcrumb-item">Users</li>
              <li class="breadcrumb-item active">Add Users</li>
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
              <h5>Add User Form</h5>
              <div class="d-flex flex-wrap gap-2 mt-3 mt-md-0">
               
                <a class="btn btn-danger" href="{{route('all.users')}}">
                    View Users
                </a>
                <a class="btn btn-success" href="">
                    Add Users
                </a>
              </div>
            </div>
            <div class="card-body">
              <div class="row g-xl-5 g-3"> 
                <div class="col-sm-12">

@if($errors->any())
    <div style="color: red;">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

                    <form id="advance-tab" action="{{route('user_profile_update',$auth_user->id)}}" method="post" class="row g-3" enctype="multipart/form-data">
                        @csrf
                   
                    
                        <div class="row g-3 custom-input">
                            
      

      <div class="col-lg-6 col-sm-6">
                            <label class="form-label" for="exampleFormControlInputa">User email <span class="txt-danger">*</span></label>
                            <input class="form-control" id="exampleFormControlInputa"  name="email" type="email" value="{{$auth_user->email}}" placeholder="Enter Your User Email">

                                    @error('email')
      <span class="text-danger">{{ $message }}</span>
  @enderror
                        </div>

                         <div class="col-lg-6 col-sm-6">
                            <label class="form-label" for="exampleFormControlInputa">Full Name <span class="txt-danger">*</span></label>
                            <input class="form-control" id="exampleFormControlInputa" type="text"  name="name" value="{{$auth_user->name}}"  placeholder="Enter Your User Full Name">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>

                      <!--    <div class="col-lg-6 col-sm-6">
                            <label class="form-label" for="exampleFormControlInputa">Last Name  <span class="txt-danger">*</span></label>
                            <input class="form-control" id="exampleFormControlInputa" type="text"  name="last_name" value="{{old('last_name')}}">
                            @error('last_name')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div> -->
                         
                         <div class="col-lg-6 col-sm-6">
                            <label class="form-label" for="user_name">User Name <span class="txt-danger">*</span></label>
                            <input class="form-control" id="user_name" type="text"  name="user_name" value="{{$auth_user->user_name}}" placeholder="Enter Your User UserName">
                            @error('user_name')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>

                    <div class="col-lg-6 col-sm-6"> 
                            <label class="form-label" for="exampleFormControlInputc">Phone Number<span class="txt-danger">*</span></label>
                            <input class="form-control" id="exampleFormControlInputc" type="text"
                         name="phone_number" value="{{$auth_user->phone_number}}" placeholder="Enter Your User Phone Number">
                               @error('phone_number')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>

                       
           
                           <div class="form-group col-lg-6 col-sm-6">
                            <label>Upload Image</label>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default btn-file">
                                        Browse… <input type="file" id="imgInp" name="profile_image" id="profile_image" accept="image/*">
                                    </span>
                                </span>
                                <input type="text" class="form-control" readonly name="profile_image">
                            </div>
                            <img id='img-upload'/>
                        </div>


 <div class="form-group col-lg-6 col-sm-6">
                            <label>Current  Image</label>
                            <div class="input-group">
                                <span class="input-group-btn">
                                  <img class="b-r-10"  
              src="{{ $auth_user->profile_image ? asset('uploads/' . $auth_user->profile_image) : asset('assets/images/download.png') }}"  alt="not found" class="img-fluid rounded-circle" style="width: 80px; height: 80px;" >
                                </span>
                             
                            </div>
                            <img id='img-upload'/>
                        </div>
                         
                       
                     
                        </div>


<input type="submit" class="btn btn-primary" value="Update Profile"/>

                       
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