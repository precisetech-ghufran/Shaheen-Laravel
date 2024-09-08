@extends('admin.index')
@section('content')
@php

//your database table name
    $table = 'vendor_groups';
@endphp
<div class="page-body">
            <div class="container-fluid">
              <div class="page-title">
                <div class="row">
                  <div class="col-6">
                    <h4>All  Vendor Groups</h4>
                  </div>
                  <div class="col-6">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">                                       
                          <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                          </svg></a></li>
                      <li class="breadcrumb-item">Vendor</li>
                      <li class="breadcrumb-item active"> Groups</li>
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
                          <h4>  <a class="btn btn-primary" href="{{route('vendor-groups.create')}}">
                            Add Vendor Group
                        </a></h4>
                         
                        </div>
                        <div class="list-product">
                          <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">

                            <div class="datatable-container">

                           <table id="example"class="table datatable-table" >

        <thead>
            <tr>
                <th><span class="f-light f-w-600">S.NO</span></th>
                 <th><span class="f-light f-w-600">Vendor Groups</span></th>
                
             
               
            </tr>
        </thead>
        <tbody>


   @if(isset($results) && $results->isNotEmpty())


  @foreach($results as  $index=> $vendor)

  <tr class="product-removes">
  
            
                    <td> 
                                      <div class="product-names">
                                        <p class="f-light" > {{ $index +1 }}</p>
                                      </div>
                                    </td>
      

             <td> 
                                      <div class="product-names">
                                        <a class="f-light" href="{{route('vendor-groups.edit',$vendor->id)}}"> {{ $vendor->vendor_group }}</a>
                                      </div>
                                    </td>


                                  
 
            </tr>
              @endforeach 

    </tbody>
    </table>









     @elseif(isset($vendorGroups) && $vendorGroups->count() > 0)



          @if($vendorGroups->isEmpty())
        <div class="alert alert-warning">
            No record found.
        </div>
    @else
          


    @foreach($vendorGroups as  $index=> $vendor)

  <tr class="product-removes">
  
            
                    <td> 
                                      <div class="product-names">
                                        <p class="f-light" > {{ $index +1 }}</p>
                                      </div>
                                    </td>
      

             <td> 
                                      <div class="product-names">
                                        <a class="f-light" href="{{route('vendor-groups.edit',$vendor->id)}}"> {{ $vendor->vendor_group }}</a>
                                      </div>
                                    </td>


                                  
 
            </tr>
              @endforeach 
              @endif
        </tbody>
    </table>





     @else
            <tr>
                <td colspan="3" class="text-center" style="color:red;">No data available.</td>
            </tr>
              </tbody>
    </table>
        @endif
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