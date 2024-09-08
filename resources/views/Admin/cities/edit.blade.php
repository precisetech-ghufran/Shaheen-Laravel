@extends('admin.index')
@section('content')
@php
    $table = 'cities';
@endphp
<div class="page-body">
            <div class="container-fluid">
              <div class="page-title">
                <div class="row">
                  <div class="col-6">
                    <h4>Add City</h4>
                  </div>
                  <div class="col-6">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">                                       
                          <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                          </svg></a></li>
                      <li class="breadcrumb-item">Update</li>
                      <li class="breadcrumb-item active">City</li>
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
                      <h5>Update City Form</h5>
                      <div class="d-flex flex-wrap gap-2 mt-3 mt-md-0">
                   
                        <a class="btn btn-success" href="{{route('cities.create')}}">
Add City
                        </a>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row g-xl-5 g-3">
                        <div class="col-sm-12">
                            <form id="advance-tab" action="{{route('cities.update',$city->id)}}" method="post" >
                              @csrf
                                                         @method('PUT') <!-- Or @method('PATCH') -->
                                <div class="row g-3 custom-input">
                                    
                                  
                                  
                                <div class="col-lg-6 col-sm-6">
                                    <label class="form-label" for="exampleFormControlInputa">City Name <span class="txt-danger">*</span></label>
                                    <input class="form-control      
                                     @error('city')
                                    is-invalid
                                    @enderror" id="exampleFormControlInputa" type="text" placeholder="Enter Your State Name" name="city" value="{{$city->name}}">

                                    @error('city')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                           <div class="col-lg-6 col-sm-6">
                                    <label class="form-label">Select State<span class="txt-danger">*</span></label>

                                        <select class="form-select" aria-label="Default select example" name="states"

 @error('states')
   is-invalid
                                    @enderror
                                        >
                                     <option  value="" class="@error('states')
   is-invalid
                                    @enderror">Please Select Your State</option>

                                      @foreach($states as $index => $state)
                                      <option  value="{{$state->id}}" {{ $city->state_id == $state->id ? 'selected' : '' }}>{{$state->name}}</option>
                                   @endforeach
                                    </select>

                                    @error('states')
   <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                  </div>
                                
                                
                                </div>
                                <br/>
                                <div class="position-relative d-flex justify-content-end">
                                <input type="submit" class="btn btn-primary" value="Update City"/>
                                </div>
                            </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Container-fluid Ends-->
          </div>
          @endsection