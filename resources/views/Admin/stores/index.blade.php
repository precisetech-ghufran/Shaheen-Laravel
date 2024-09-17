@extends('admin.index')
@section('content')
<div class="page-body">
            <div class="container-fluid">
              <div class="page-title">
                <div class="row">
                  <div class="col-6">
                    <h4>All Stores</h4>
                  </div>
                  <div class="col-6">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">                                       
                          <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                          </svg></a></li>
                      <li class="breadcrumb-item">All</li>
                      <li class="breadcrumb-item active"> Stores</li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
              <div class="row"> 
                <div class="col-sm-12 mb-5"> 
                    <div class="card"> 
                      <div class="card-body">
                        <div class="card-header d-flex justify-content-between align-items-center">
                          <h4>  <a class="btn btn-primary" href="{{route('stores.create')}}">
                            Add Store
                        </a></h4>
                         <a class="btn btn-success" href="{{route('Store_staus_update.index')}}">
                                    Update Store Status
                                </a>
                        </div>
                        <div class="list-product">
                          <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">

                            <div class="datatable-container">

                           <table id="example"class="table datatable-table" >

        <thead>
            <tr>
                <th><span class="f-light f-w-600">S.NO</span></th>
                 <th><span class="f-light f-w-600">Date</span></th>
                  <th><span class="f-light f-w-600">Logo</span></th>
                   <th><span class="f-light f-w-600">Name</span></th>
                    <th><span class="f-light f-w-600">Franchise</span></th>
                     <th><span class="f-light f-w-600">Address</span></th>
                      <th><span class="f-light f-w-600">Status</span></th>
               
            </tr>
        </thead>
        <tbody>

          @foreach($stores as $index => $store )
            <tr class="product-removes">

<td>
            <div class="product-names">
{{$index+1}}
              </td>

             <td> 
          <div class="product-names">
                                        <a  href="{{route('stores.edit',$store->id)}}" class="f-light">{{$store->date}}</a>
                                      </div>
                                    </td>

                                       <td> 
          <div class="product-names">
                                        <a  href="{{route('stores.edit',$store->id)}}" class="f-light">

   <img src="{{ asset('uploads/franchise/' . $store->Franchise->franchise_image) }}" alt="Franchise Image" class="img-thumbnail mt-2" width="50">

                                         </a>
                                      </div>
                                    </td>
                                       <td> 
          <div class="product-names">
                                        <a  href="{{route('stores.edit',$store->id)}}" class="f-light">{{$store->store_business_name}}</a>
                                      </div>
                                    </td>
                                       <td> 
          <div class="product-names">
                                        <a  href="{{route('stores.edit',$store->id)}}" class="f-light">
                                          {{$store->Franchise->franchise_name }}</a>
                                      </div>
                                    </td>

                                       <td> 
          <div class="product-names">
                                        <a  href="{{route('stores.edit',$store->id)}}" class="f-light">{{$store->site_address}}</a>
                                      </div>
                                    </td>

                                                                  <td> 
          <div class="product-names">
                                        <a  href="{{route('stores.edit',$store->id)}}" class="f-light">{{$store->status->store_status}}</a>
                                      </div>
                                    </td>







                                   
            </tr>
        @endforeach
        </tbody>
    </table>
                            </div>
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