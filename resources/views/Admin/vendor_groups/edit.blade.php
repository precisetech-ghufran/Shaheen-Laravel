@extends('admin.index')
@section('content')
<div class="page-body">
            <div class="container-fluid">
              <div class="page-title">
                <div class="row">
                  <div class="col-6">
                    <h4>Update Vendor Group</h4>
                  </div>
                  <div class="col-6">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">                                       
                          <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                          </svg></a></li>
                      <li class="breadcrumb-item">Update</li>
                      <li class="breadcrumb-item active">Vendor Group</li>
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
                      <h5>Update Vendor Group Form</h5>
                      <div class="d-flex flex-wrap gap-2 mt-3 mt-md-0">
                   
                        <a class="btn btn-success" href="{{route('vendor-groups.index')}}">
View Vendor Group
                        </a>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row g-xl-5 g-3">
                        <div class="col-sm-12">
                           <form action="{{ isset($vendorGroup) ? route('vendor-groups.update', $vendorGroup->id) : route('vendor-groups.store') }}" method="POST">
        @csrf
        @if(isset($vendorGroup))
            @method('PUT')
        @endif

        <div class="form-group">
            <label for="vendor_group">Vendor Group</label>
            <input type="text" name="vendor_group" id="vendor_group" class="form-control @error('vendor_group') is-invalid @enderror" value="{{ old('vendor_group', $vendorGroup->vendor_group ?? '') }}" required>
            @error('vendor_group')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
<br/>
        <button type="submit" class="btn btn-primary">{{ isset($vendorGroup) ? 'Update' : 'Create' }}</button>
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