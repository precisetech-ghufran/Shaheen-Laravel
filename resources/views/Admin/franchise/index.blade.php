@extends('admin.index')
@section('content')
@php

    $table = 'franchises';
@endphp
<div class="page-body">
            <div class="container-fluid">
              <div class="page-title">
                <div class="row">
                  <div class="col-6">
                    <h4>All franchises</h4>
                  </div>
                  <div class="col-6">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">                                       
                          <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                          </svg></a></li>
                      <li class="breadcrumb-item">All</li>
                      <li class="breadcrumb-item active"> franchises</li>
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
                          <h4>  <a class="btn btn-primary" href="{{route('franchises.create')}}">
                            Add franchise
                        </a></h4>
                         
                        </div>
                        <div class="list-product">
                          <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">

                            <div class="datatable-container">

                           <table id="example"class="table datatable-table" >

        <thead>
            <tr>
                <th><span class="f-light f-w-600">S.NO</span></th>
                 <th><span class="f-light f-w-600"> Franchise</span></th>
                 <th><span class="f-light f-w-600">   Logo</span></th>
             
               
            </tr>
        </thead>
        <tbody>
          
 @if(isset($results))


 @foreach($results as  $index=> $result)

  <tr class="product-removes">

  
            
                     <td> 
                                      <div class="product-names">
                                        <p class="f-light" > {{ $index +1 }}</p>
                                      </div>
                                    </td>
      

             <td> 
                                      <div class="product-names">
                                        <a class="f-light" href="{{route('franchises.edit',$result->id)}}"> {{ $result->franchise_name }}</a>
                                      </div>
                                    </td>


                                         <td> 
                                      <div class="product-names">
                                       
                        <img src="{{ asset('uploads/franchise/' . $result->franchise_image) }}" alt="Franchise Image" class="img-thumbnail mt-2" width="50">
                  
                                      </div>
                                    </td>

                                         </tr>
                             @endforeach   
                                <!-- Add more rows as needed -->
        </tbody>
    </table>
       
 <div class="mt-5">
           {{ $results->appends(request()->input())->links() }}

        </div>
 @elseif(isset($franchises) && $franchises->count() > 0)
    @foreach($franchises as  $index=> $fran)

  <tr class="product-removes">

  
            
                    <td> 
                                      <div class="product-names">
                                        <p class="f-light" > {{ $index +1 }}</p>
                                      </div>
                                    </td>
      

             <td> 
                                      <div class="product-names">
                                        <a class="f-light" href="{{route('franchises.edit',$fran->id)}}"> {{ $fran->franchise_name }}</a>
                                      </div>
                                    </td>


                                         <td> 
                                      <div class="product-names">
                                       
                        <img src="{{ asset('uploads/franchise/' . $fran->franchise_image) }}" alt="Franchise Image" class="img-thumbnail mt-2" width="50">
                  
                                      </div>
                                    </td>

                                         </tr>
                             @endforeach        

       
            <!-- Add more rows as needed -->
        </tbody>
    </table>
<div class="mt-5">
    @if($franchises->hasPages())
        {{ $franchises->links() }}
    @else
        <!-- Force pagination to appear, even if there's only one page -->
        {{ $franchises->appends(request()->query())->links() }}
    @endif
</div>

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