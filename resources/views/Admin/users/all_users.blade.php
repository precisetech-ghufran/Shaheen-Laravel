@extends('admin.index')
@section('content')

<div class="page-body">
            <div class="container-fluid">
              <div class="page-title">
                <div class="row">
                  <div class="col-6">
                    <h4>Manage User Accounts</h4>
                  </div>
                  <div class="col-6">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">                                       
                          <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                          </svg></a></li>
                      <li class="breadcrumb-item">Add</li>
                      <li class="breadcrumb-item active">User</li>
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
                      <h5>Manage User Accounts Form</h5>
                      <div class="d-flex flex-wrap gap-2 mt-3 mt-md-0">
                        <a class="btn btn-primary" href="{{route('auth_admin_add_new_user')}}">
                           Insert New User 
                        </a>
                       
                        
                      </div>
                    </div>
                    <div class="card-body">
                  <form action="{{ route('delete.users') }}" method="POST">
    @csrf

    
                     <div class="list-product">
                          <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                            <div class="datatable-container">
                       
                              <table class="table datatable-table">
                                <thead> 
                                  <tr> 
                                    <th>
                                    S.NO
                                    </th>
                                      <th> <span class="f-light f-w-600">
Email</span></th>
  <th> <span class="f-light f-w-600"> Full Name</span></th>
                                    <th> <span class="f-light f-w-600">User Group</span></th>

 <th> <span class="f-light f-w-600">  User Permission</span></th>

<!-- <th> <span class="f-light f-w-600">   Account Suspended</span></th> -->



                                    <th> <span class="f-light f-w-600">Delete</span> <input    type="checkbox" id="checkAll"></th>
                                  
                                  </tr>
                                </thead>
                                <tbody> 

                                  @foreach($user_all as $index => $item)


                                  <tr class="product-removes">
                                   
                                    <td> 
                                      <div class="product-names">
                                        <p class="f-light">{{$index+1}}</p>
                                      </div>
                                    </td>


                                   

                                     <td> 
                                      <div >
                                         <a href="{{route('update_user_account',$item->id)}}" style="color:blue;">{{$item->email}}</a>
                                      </div>
                                    </td>
 

    <td> 
                                      <div >
                                         <a href="#" style="color:blue;">{{$item->name}}</a>
                                      </div>
                                    </td>

                                    <td> 
                                      <div >
                                         <a href="#" style="color:blue;">{{ $item->roles->pluck('name')->implode(', ') }}</a>
                                      </div>
                                    </td>


                                     <td> 
                                      <div >
                                         <a href="{{route('user_permissions',$item->id)}}" style="color:blue;">Manage</a>
                                      </div>
                                    </td>


   <!--   <td> 
                                       <div class="form-check"> 
                                   

                                          <input type="checkbox" name="status[{{ $item->id }}]" value="0" {{ $item->status == 0 ? 'checked' : '' }}>
                                      </div>
                                    </td> -->

                                         <td> 
                                      <div class="form-check"> 
                                        <input class="form-check-input checkbox-primary permission-checkbox" name="delete_users[]"  type="checkbox" value="{{$item->id}}">
                                      </div>                                    </td>


                                     
                                  
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                        
                              <div class="position-relative d-flex justify-content-end">
                                  <div class=" mt-4">
                                    <div class="d-flex align-items-center gap-sm-2 gap-1">
                                       <input type="submit" name="submit"  class="btn btn-primary" value="Delete Checked User Groups">
                                    </div>
                                  </div>
                                </div>
                            </div>
                          </div>
                      
                        </div>
                        </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Container-fluid Ends-->
          </div>
          @endsection