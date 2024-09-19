@extends('admin.index')
@section('content')
<div class="page-body">
            <div class="container-fluid">
              <div class="page-title">
                <div class="row">
                  <div class="col-6">
                    <h4>Update Store Status Histroy</h4>
                  </div>
                  <div class="col-6">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">                                       
                          <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                          </svg></a></li>
                      <li class="breadcrumb-item">Add</li>
                      <li class="breadcrumb-item active">Partner</li>
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
                      <h5> Store Name : {{$store->store_business_name}}</h5>
                      <div class="d-flex flex-wrap gap-2 mt-3 mt-md-0">
                   
                        <a class="btn btn-success" href="{{ route('partners.index') }}">
                            what to show here
                        </a>
                      </div>
                    </div>
                     <div class="card-body">
                      <div class="row g-xl-5 g-3">
                        <div class="col-sm-12">

                              <form action="{{ route('Store_staus_update.update', $store->id) }}" method="POST">
                            
                            
            @csrf
  @method('PUT')
            <div class="form-group">
                <label>Comments</label>
                <textarea name="comments" class="form-control  @error('comments')
                                    is-invalid
                                    @enderror" ></textarea>
            </div>

            <div class="form-group">
                <label>Updated Date</label>
                <input type="date" name="updated_date" class="form-control   @error('updated_date')
                                    is-invalid
                                    @enderror" >
            </div>

        
<br/>
            <div class="form-group">
                <label>Store Status</label>
                <select name="store_status_id" class="form-control   @error('store_status_id')
                                    is-invalid
                                    @enderror" >
                    @foreach ($storeStatuses as $status)
                        <option value="{{ $status->id }}">{{ $status->store_status }}</option>
                    @endforeach
                </select>
            </div>
            <br/>

            <button type="submit" class="btn btn-primary">Update Store Status</button>
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