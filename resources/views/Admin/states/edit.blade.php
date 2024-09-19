@extends('admin.index')
@section('content')
@php
    $table = 'states';
@endphp
<div class="page-body">
            <div class="container-fluid">
              <div class="page-title">
                <div class="row">
                  <div class="col-6">
                    <h4>Add States</h4>
                  </div>
                  <div class="col-6">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">                                       
                          <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                          </svg></a></li>
                      <li class="breadcrumb-item">Add</li>
                       <li class="breadcrumb-item active">State</li>
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
                      <h5>Add State Form</h5>
                      <div class="d-flex flex-wrap gap-2 mt-3 mt-md-0">
                   
                        <a class="btn btn-success" href="{{route('states.index')}}">
View States
                        </a>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row g-xl-5 g-3">
                        <div class="col-sm-12">
                            <form id="advance-tab" action="{{route('states.update',$state->id)}}" method="post" >
                              @csrf
                           @method('PUT') 
                                <div class="row g-3 custom-input">
                                    
                                  
                                  
                                <div class="col-lg-12 col-sm-6">
                                    <label class="form-label" for="exampleFormControlInputa">State Name <span class="txt-danger">*</span></label>
                                    <input class="form-control      
                                     @error('state')
                                    is-invalid
                                    @enderror" id="exampleFormControlInputa" type="text" placeholder="Enter Your State Name" name="state" value="{{$state->name}}">

                                    @error('state')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                           
                                
                                
                                </div>
                                <br/>
                                <div class="position-relative d-flex justify-content-end">
                                <input type="submit" class="btn btn-primary" value="update State"/>
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