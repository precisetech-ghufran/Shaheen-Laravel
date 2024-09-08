@extends('admin.index')
@section('content')

<div class="page-body">
            <div class="container-fluid">
              <div class="page-title">
                <div class="row">
                  <div class="col-6">
                    <h4>Manage User Role</h4>
                  </div>
                  <div class="col-6">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">                                       
                          <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                          </svg></a></li>
                      <li class="breadcrumb-item">Add</li>
                      <li class="breadcrumb-item active">Role</li>
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
                      <h5>Insert New Role Form</h5>
                      <div class="d-flex flex-wrap gap-2 mt-3 mt-md-0">
                        <a class="btn btn-primary" href="{{route('add.permission')}}">
                          Manage User Role
                        </a>
                       
                        
                      </div>
                    </div>
                    <div class="card-body">
                    <form id="advance-tab" action="{{route('store.roles')}}" method="POST">
                      @csrf
                                <div class="row g-3 custom-input">
                                    
                                  
                                  
                                <div class="col-lg-12 col-sm-6">
                                    <label class="form-label" for="exampleFormControlInputa">Role Name<span class="txt-danger">*</span></label>
                                    <input class="form-control" id="exampleFormControlInputa" type="text" name="role">
                                   @error('role')
      <span class="text-danger">{{ $message }}</span>
  @enderror
                                </div>
                                
                                
                                
                                
                                
                                </div>
                                <div class="position-relative d-flex justify-content-end">
                                  <div class=" mt-4">
                                    <div class="d-flex align-items-center gap-sm-2 gap-1">
                                        <input type="submit" class="btn btn-primary" value="submit">
                                    </div>
                                  </div>
                                </div>
                            </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Container-fluid Ends-->
          </div>
          @endsection