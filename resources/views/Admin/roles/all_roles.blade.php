@extends('admin.index')
@section('content')

<div class="page-body">
            <div class="container-fluid">
              <div class="page-title">
                <div class="row">
                  <div class="col-6">
                    <h4>Manage User Group</h4>
                  </div>
                  <div class="col-6">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">                                       
                          <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                          </svg></a></li>
                      <li class="breadcrumb-item">Add</li>
                      <li class="breadcrumb-item active">Role</li>
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
                      <h5>Manage User Group  Form</h5>
                      <div class="d-flex flex-wrap gap-2 mt-3 mt-md-0">
                        <a class="btn btn-primary" href="{{route('add.roles')}}">
                           Insert New User Role
                        </a>
                       
                        
                      </div>
                    </div>
                    <div class="card-body">
                  <form action="{{ route('delete.roles') }}" method="POST"  id="bulk-delete-form">
    @csrf
  @method('POST')
    
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
                                    <th> <span class="f-light f-w-600">Role Name</span></th>

 <th> <span class="f-light f-w-600">  User Role Permission</span></th>

                                    <th> <span class="f-light f-w-600">Delete</span> <input    type="checkbox" id="checkAll"></th>
                                  
                                  </tr>
                                </thead>
                                <tbody> 

                                  @foreach($roles as $index => $role)
                                  <tr class="product-removes">
                                   
                                    <td> 
                                      <div class="product-names">
                                        <p class="f-light">{{$index+1}}</p>
                                      </div>
                                    </td>


                                   

                                     <td> 
                                      <div >
                                         <a href="{{route('edit.roles',$role->id)}}" style="color:blue;">{{$role->name}}</a>
                                      </div>
                                    </td>
 

                                      <td> 
                                      <div class="product-names">

                                        <a         href="{{route('all.roles.permission',$role->id)}}" style="color:red;">Manage</a>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="form-check"> 
                                        <input class="form-check-input checkbox-primary permission-checkbox delete-checkbox" name="roles[]" value="{{ $role->id }}" type="checkbox"  id="delete-checkbox">
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
                                       <input type="submit" name="roles_delete"  class="btn btn-primary" id="delete-selected" value="Delete Checked User Groups">
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



<script>
document.getElementById('delete-button').addEventListener('click', function() {
    const form = document.getElementById('delete-form');
    const checkboxes = form.querySelectorAll('input[name="roles[]"]:checked');
 
 
    if (checkboxes.length > 0) {
        if (confirm('Are you sure you want to delete the selected records?')) {
            form.submit();
        }
    } else {
        alert('Please select at least one record to delete.');
    }
});

document.getElementById('select-all').addEventListener('click', function() {
    const checkboxes = document.querySelectorAll('input[name="roles[]"]');
    checkboxes.forEach(checkbox => {
        checkbox.checked = this.checked;
    });
});


</script>