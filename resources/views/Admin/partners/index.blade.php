@extends('admin.index')
@section('content')
<div class="page-body">
            <div class="container-fluid">
              <div class="page-title">
                <div class="row">
                  <div class="col-6">
                    <h4>All States</h4>
                  </div>
                  <div class="col-6">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">                                       
                          <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                          </svg></a></li>
                      <li class="breadcrumb-item">All</li>
                      <li class="breadcrumb-item active"> Partners</li>
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
                          <h4>  <a class="btn btn-primary" href="{{route('partners.create')}}">
                            Add Partner
                        </a></h4>
                         
                        </div>
                        <div class="list-product">
                          <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">

                            <div class="datatable-container">

                           <table id="example"class="table datatable-table" >

        <thead>
            <tr>
              <th><span class="f-light f-w-600">
S.No</span></th>
                <th><span class="f-light f-w-600">
Partner Name</span></th>
                 <th><span class="f-light f-w-600">Partner Address</span></th>
                         <!-- <th><span class="f-light f-w-600">Partner Image</span></th> -->
                  <th><span class="f-light f-w-600">Partner Contact</span></th>
                   <th><span class="f-light f-w-600">Partner SS Number</span></th>
                    <th><span class="f-light f-w-600">  Partner Email</span></th>
                     <th><span class="f-light f-w-600">Partner License</span></th>
               
            </tr>
        </thead>
        <tbody>

            @foreach($partners as $index => $partner)
            <tr class="product-removes">
               <td> 
                                      <div class="product-names">
                                     {{$index+1}}
                                      </div>
                                    </td>
             <td> 
                                      <div class="product-names">
                                        <a class="f-light"  href="{{route('partners.edit',$partner->id)}}">{{$partner->partner_name}}</a>
                                      </div>
                                    


 <div class="product-names">
                        @if ($partner->image)
    <img src="{{ asset('images/partners/' . $partner->image) }}" alt="Partner Image" width="150">
@endif
                                      </div>
                                    </td> 


                                     <td> 
                                      <div class="product-names">
                                        <a class="f-light" href="{{route('partners.edit',$partner->id)}}">{{$partner->partner_address}}</a>
                                      </div>
                                    </td>
                                     <td> 
                                      <div class="product-names">
                                        <a class="f-light" href="{{route('partners.edit',$partner->id)}}">{{$partner->partner_ss_number}}</a>
                                      </div>
                                    </td>
                                     <td> 
                                      <div class="product-names">
                                        <a class="f-light"  href="{{route('partners.edit',$partner->id)}}">{{$partner->partner_email}}</a>
                                      </div>
                                    </td>
                                     <td> 
                                      <div class="product-names">
                                        <a class="f-light"  href="{{route('partners.edit',$partner->id)}}">{{$partner->driver_license_number}}</a>
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