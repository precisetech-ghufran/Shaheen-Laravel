@extends('admin.index')
@section('content')
@php

//your database table name
    $table = 'tenants';
@endphp
<div class="page-body">
            <div class="container-fluid">
              <div class="page-title">
                <div class="row">
                  <div class="col-6">
                    <h4>All Tenants</h4>
                  </div>
                  <div class="col-6">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">                                       
                          <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                          </svg></a></li>
                      <li class="breadcrumb-item">All</li>
                      <li class="breadcrumb-item active"> Tenants</li>
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
                          <h4>  <a class="btn btn-primary" href="{{route('tenants.create')}}">
                            Add Tenant
                        </a></h4>
                         
                        </div>
                        <div class="list-product">
                          <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">

                            <div class="datatable-container">

                           <table id="example"class="table datatable-table" >

        <thead>
            <tr>
                <th><span class="f-light f-w-600">S.NO</span></th>
                 <th><span class="f-light f-w-600">Tenant Name</span></th>
                 <th><span class="f-light f-w-600">   Tenant Address</span></th>
                  <th><span class="f-light f-w-600">Tenant Contact</span></th>
                   <th><span class="f-light f-w-600">Tenant Email</span></th>
             
               
            </tr>
        </thead>
        <tbody>
          
  @if(isset($results) && $results->isNotEmpty())

   @foreach($results as  $index=> $tenant)

  <tr class="product-removes">
  
            
                    <td> 
                                      <div class="product-names">
                                        <p class="f-light" > {{ $index +1 }}</p>
                                      </div>
                                    </td>
      

             <td> 
                                      <div class="product-names">
                                        <a class="f-light" href="{{route('tenants.edit',$tenant->id)}}"> {{$tenant->tenant_name}}</a>
                                      </div>
                                    </td>
                                      <td> 
                                      <div class="product-names">
                                        <a class="f-light" href="{{route('tenants.edit',$tenant->id)}}"> {{$tenant->tenant_address}}</a>
                                      </div>
                                    </td>
                                      <td> 
                                      <div class="product-names">
                                        <a class="f-light" href="{{route('tenants.edit',$tenant->id)}}"> {{$tenant->tenant_contact_no}}</a>
                                      </div>
                                    </td>
                                      <td> 
                                      <div class="product-names">
                                        <a class="f-light" href="{{route('tenants.edit',$tenant->id)}}"> {{$tenant->tenant_email}}</a>
                                      </div>
                                    </td>
    </tr>

                                         
                             @endforeach        
 
        
            <!-- Add more rows as needed -->
        </tbody>
    </table>


 @elseif(isset($tenants) && $tenants->count() > 0)

    @foreach($tenants as  $index=> $tenant)

  <tr class="product-removes">
  
            
                    <td> 
                                      <div class="product-names">
                                        <p class="f-light" > {{ $index +1 }}</p>
                                      </div>
                                    </td>
      

             <td> 
                                      <div class="product-names">
                                        <a class="f-light" href="{{route('tenants.edit',$tenant->id)}}"> {{$tenant->tenant_name}}</a>
                                      </div>
                                    </td>
                                      <td> 
                                      <div class="product-names">
                                        <a class="f-light" href="{{route('tenants.edit',$tenant->id)}}"> {{$tenant->tenant_address}}</a>
                                      </div>
                                    </td>
                                      <td> 
                                      <div class="product-names">
                                        <a class="f-light" href="{{route('tenants.edit',$tenant->id)}}"> {{$tenant->tenant_contact_no}}</a>
                                      </div>
                                    </td>
                                      <td> 
                                      <div class="product-names">
                                        <a class="f-light" href="{{route('tenants.edit',$tenant->id)}}"> {{$tenant->tenant_email}}</a>
                                      </div>
                                    </td>
    </tr>

                                         
                             @endforeach        
 
        
            <!-- Add more rows as needed -->
        </tbody>
    </table>
      @else
            <tr>
                <td colspan="3" class="text-center" style="color:red;">No data available.</td>
            </tr>
        @endif
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