@extends('admin.index')
@section('content')


<div class="page-body">
    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-6">
            <h4>Update User</h4>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">                                       
                  <svg class="stroke-icon">
                    <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                  </svg></a></li>
              <li class="breadcrumb-item">User</li>
              <li class="breadcrumb-item active">Update </li>
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
              <h5>Update User Form</h5>
              <div class="d-flex flex-wrap gap-2 mt-3 mt-md-0">
               
                <a class="btn btn-danger" href="{{route('all.users')}}">
                    View Users
                </a>
                <a class="btn btn-success" href="{{route('auth_admin_add_new_user')}}">
                    Insert New User
                </a>
              </div>
            </div>
            <div class="card-body">
              <div class="row g-xl-5 g-3"> 
                <div class="col-sm-12">



                    <form id="advance-tab" action="{{route('update_user_account_update',$user->id)}}" method="post" class="row g-3" enctype="multipart/form-data">
                        @csrf
                   
                    
                        <div class="row g-3 custom-input">
                            
      

      <div class="col-lg-6 col-sm-6">
                            <label class="form-label" for="exampleFormControlInputa">User email <span class="txt-danger">*</span></label>
                            <input class="form-control" id="exampleFormControlInputa"  name="email" type="email" value="{{$user->email}}" placeholder="Enter Your User Email">

                                    @error('email')
      <span class="text-danger">{{ $message }}</span>
  @enderror
                        </div>

                         <div class="col-lg-6 col-sm-6">
                            <label class="form-label" for="exampleFormControlInputa">Full Name <span class="txt-danger">*</span></label>
                            <input class="form-control" id="exampleFormControlInputa" type="text"  name="name" value="{{$user->name}}"  placeholder="Enter Your User Full Name">
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
                            <input class="form-control" id="user_name" type="text"  name="user_name" value="{{$user->user_name}}" placeholder="Enter Your User UserName">
                            @error('user_name')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>

                    <div class="col-lg-6 col-sm-6"> 
                            <label class="form-label" for="exampleFormControlInputc">Phone Number<span class="txt-danger">*</span></label>
                            <input class="form-control" id="exampleFormControlInputc" type="text"
                         name="phone_number" value="{{$user->phone_number}}" placeholder="Enter Your User Phone Number">
                               @error('phone_number')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>

                        <div class="col-lg-6 col-sm-6">
                                    <label class="user_role">User Role <span class="txt-danger">*</span></label>


                                             @if ($roles->isEmpty())
  <tr class="product-removes  ">
                            <td>
    <p class="warning-paragraph">No Roles Found First Create Roles</p>
  </td>
</tr>
@else


                                    <select class="form-select"  id="user_role" name="user_role" value="{{old('user_role')}}">
                                     
  <option value="" >Select Your User Role </option>

                                      @foreach($roles as $role)

                                      <option  value="{{$role->name}}"  {{ $user->roles->contains($role->id) ? 'selected' : '' }}>{{$role->name}}</option>
                                   @endforeach
                                    </select>

@endif
                                  </div>
                    @error('user_role')
      <span class="text-danger">{{ $message }}</span>
  @enderror
                     


                      <div class="col-lg-6 col-sm-6">
                            <label class="form-label" for="exampleFormControlInputa">Permissions <span class="txt-danger">*</span></label>
                         

              <a href="{{route('user_permissions',$user->id)}}">Manage User Privileges</a>
                        </div>    


                         <div class="col-lg-6 col-sm-6">
                            <label class="form-label" for="exampleFormControlInputa">User Password <span class="txt-danger">*</span></label>
                            <input class="form-control" id="exampleFormControlInputa"  name="password" type="password" placeholder="**********">

                                    @error('password')
      <span class="text-danger">{{ $message }}</span>
  @enderror
                        </div> 

                           <div class="col-lg-6 col-sm-6">
                            <label class="form-label" for="exampleFormControlInputa">User Confirm Password <span class="txt-danger">*</span></label>
                            <input class="form-control" id="exampleFormControlInputa"  name="password_confirmation" type="password" placeholder="***********">

                                    @error('password')
      <span class="text-danger">{{ $message }}</span>
  @enderror
                        </div> 
                       
                     
                        </div>


<input type="submit" class="btn btn-primary" value="Update User"/>

                       
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