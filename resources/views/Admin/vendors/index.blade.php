@extends('admin.index')
@section('content')
<div class="page-body">
            <div class="container-fluid">
              <div class="page-title">
                <div class="row">
                  <div class="col-6">
                    <h4>All Vendors</h4>
                  </div>
                  <div class="col-6">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">                                       
                          <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                          </svg></a></li>
                      <li class="breadcrumb-item">All</li>
                      <li class="breadcrumb-item active"> Vendors</li>
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
                          <h4>  <a class="btn btn-primary" href="{{route('Vendors.create')}}">
                             Add Vendor
                        </a></h4>
                         
                        </div>
                        <div class="list-product">
                          <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">

                            <div class="datatable-container">

                           <table id="example"class="table datatable-table" >

        <thead>
            <tr>
                <th><span class="f-light f-w-600">S.NO</span></th>
                 <th><span class="f-light f-w-600">Vendor Name</span></th>
                  <th><span class="f-light f-w-600">  Address</span></th>
                   <th><span class="f-light f-w-600">Email</span></th>
                    <th><span class="f-light f-w-600">  Cell</span></th>
                 
               
            </tr>
        </thead>
        <tbody>
      
          @foreach($vendors as $index => $vendor)
            <tr class="product-removes">
             <td> 
                                      <div class="product-names">
                                        <p class="f-light">{{$index+1}}</p>
                                      </div>
                                    </td>

                                   <td>
                                      <div class="product-names">
                                        <a class="f-light" href="{{route('Vendors.edit',$vendor->id)}}">{{$vendor->vendor_name}}</p>
                                      </div>
                                    </td>
                                     <td>
                                      <div class="product-names">
                                        <a class="f-light" href="{{route('Vendors.edit',$vendor->id)}}">{{$vendor->vendor_address}}</p>
                                      </div>
                                    </td>
                                     <td>
                                      <div class="product-names">
                                        <a class="f-light" href="{{route('Vendors.edit',$vendor->id)}}">{{$vendor->vendor_email}}</p>
                                      </div>
                                    </td>
                                     <td>
                                      <div class="product-names">
                                        <a class="f-light" href="{{route('Vendors.edit',$vendor->id)}}">{{$vendor->vendor_phone_number}}</p>
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