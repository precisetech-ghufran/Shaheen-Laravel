@extends('admin.index')
@section('content')

<div class="page-body">
            <div class="container-fluid">
              <div class="page-title">
                <div class="row">
                  <div class="col-6">
                    <h4>Update User Role Permission of Role {{$roles->name}}</h4>
                  </div>
                  <div class="col-6">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">                                       
                          <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                          </svg></a></li>
                      <li class="breadcrumb-item">Add</li>
                      <li class="breadcrumb-item active">Permission</li>
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
                      <h5>Update User Role Permission  Form</h5>
                      <div class="d-flex flex-wrap gap-2 mt-3 mt-md-0">
                     <!--    <a class="btn btn-primary" href="{{route('add.roles')}}">
                           Insert New User Role
                        </a> -->
                       
                        
                      </div>
                    </div>
                    <div class="card-body">
                  <form action="{{ route('role.permission.store',$roles->id) }}" method="POST">
    @csrf

    
                     <div class="list-product">
                          <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                            <div class="datatable-container">
                              @if($role_exsist)
                              <table class="table datatable-table">
                                <thead> 
                                  <tr> 
                                    <th>
                                    S.NO
                                    </th>
                                    <th> <span class="f-light f-w-600">Permission Name</span></th>

 <th> <span class="f-light f-w-600">  User Has Permission  <input    type="checkbox" id="checkAll"></span></th>

                                  
                                  
                                  </tr>
                                </thead>
                                <tbody> 

                                  @foreach($permissions_all as $index => $permission)
                                  <tr class="product-removes">
                                   
                                    <td> 
                                      <div class="product-names">
                                        <p class="f-light">{{$index+1}}</p>
                                      </div>
                                    </td>


                                   

                                     <td> 
                                      <div >
                                         <a href="#" style="color:blue;">{{$permission->name}}</a>
                                      </div>
                                    </td>


                                      <td> 
                                      <div class="product-names">
                                        <input class="form-check-input checkbox-primary permission-checkbox " name="permissions[]"  value="{{$permission->id}}" type="checkbox"   {{ $roles->hasPermissionTo($permission) ? 'checked' : '' }}>
                                      </div>
                                    </td>
                                 
                                 
                                  
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                              @else
                              <span class="text-danger">Role Table is empty Create Role First</span>
                              @endif

                              <div class="position-relative d-flex justify-content-end">
                                  <div class=" mt-4">
                                    <div class="d-flex align-items-center gap-sm-2 gap-1">
                                       <input type="submit" name="submit"   class="btn btn-primary" value="Update User Permissions">
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