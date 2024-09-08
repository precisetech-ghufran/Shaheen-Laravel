@extends('admin.index')
@section('content')

<div class="page-body">
            <div class="container-fluid">
              <div class="page-title">
                <div class="row">
                  <div class="col-6">
                    <h4>Manage Permissions</h4>
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
                      <h5>Manage Permissions  Form</h5>
                      <div class="d-flex flex-wrap gap-2 mt-3 mt-md-0">
                        <a class="btn btn-primary" href="{{route('ViewPermissionForm')}}">
                            Insert New Permission
                        </a>
                       
                        
                      </div>
                    </div>
                    <div class="card-body">
                  <form action="{{ route('delete.permission') }}" method="POST" id="bulk-delete-form">
    @csrf
                     <div class="list-product">
                          <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                            <div class="datatable-container">
                              @if($permission_exsist)
                               <table class="table datatable-table">
                                <thead> 
                                  <tr> 
                                    <th>
                                    S.NO
                                    </th>
                                    <th> <span class="f-light f-w-600">Permission Name</span></th>
                                    <th> <span class="f-light f-w-600">Delete</span>
<input    type="checkbox" id="checkAll">
                                    </th>
                                  
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
                                      <div class="product-names">
                                        <p class="f-light">{{$permission->name}}</p>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="form-check"> 
                                        <input class="form-check-input checkbox-primary permission-checkbox delete-checkbox " name="permissions[]" value="{{ $permission->id }}" type="checkbox">
                                      </div>
                                    </td>
                                 
                                  
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                              @else
                              <span class="text-danger">Permission Table is empty Create Permission First</span>
                              @endif

                              <input type="submit" class="btn btn-danger"   data-url="{{ route('delete.permission') }}" id="delete-selected" name="permission_delete" value="Delete Checked Permissions">
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