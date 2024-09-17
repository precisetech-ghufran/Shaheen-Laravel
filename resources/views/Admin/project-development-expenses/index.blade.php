@extends('admin.index')
@section('content')
<div class="page-body">
            <div class="container-fluid">
              <div class="page-title">
                <div class="row">
                  <div class="col-6">
                    <h4>All Project Development Expenses</h4>
                  </div>
                  <div class="col-6">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">                                       
                          <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                          </svg></a></li>
                      <li class="breadcrumb-item">All</li>
                      <li class="breadcrumb-item active"> Project Development Expenses</li>
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
                          <h4>  <a class="btn btn-primary" href="{{route('project_dev_exp.create')}}">
                            Add Project Development Expense
                        </a></h4>
                         
                        </div>
                        <div class="list-product">
                          <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">

                            <div class="datatable-container">

                           <table id="example"class="table datatable-table" >

        <thead>
            <tr>
                <th><span class="f-light f-w-600">S.NO</span></th>
                 <th><span class="f-light f-w-600">Date</span></th>
                 <th><span class="f-light f-w-600">Project</span></th>
                  <th><span class="f-light f-w-600">Expense Head</span></th>
                   <th><span class="f-light f-w-600">Amount</span></th>
                    <th><span class="f-light f-w-600">Details</span></th>
                 
               
            </tr>
        </thead>
        <tbody>
           @foreach($expenses  as $index=> $expense)
            <tr class="product-removes">
             <td> 
                                      <div class="product-names">
                                        <p class="f-light">{{$index + 1}}</p>
                                      </div>
                                    </td>
                                    <td> 
                                      <div class="product-names">
                                        <a href="{{ route('project_dev_exp.edit', $expense->id) }}"class="f-light">
                                          {{ $expense->date }}</a>
                                      </div>
                                    </td>
                                      <td> 
                                      <div class="product-names">
                                        <a  href="{{ route('project_dev_exp.edit', $expense->id) }}" class="f-light">
                                      
                                           {{ $expense->project ? $expense->project->project_name : 'Record Not Found' }}

                                        </a>
                                      </div>
                                    </td>
                                      <td> 
                                      <div class="product-names">

                                        <a  href="{{ route('project_dev_exp.edit', $expense->id) }}" class="f-light">
                                          
                                              {{ $expense->expenseHead ? $expense->expenseHead->expense_head : 'Record Not Found' }}

                                        </a>
                                      </div>
                                    </td>
                                      <td> 
                                      <div class="product-names">
                                        <a  href="{{ route('project_dev_exp.edit', $expense->id) }}" class="f-light">
                                          {{ $expense->expense_amount }}</a>
                                      </div>
                                    </td>
                                      <td> 
                                      <div class="product-names">
                                        <a  href="{{ route('project_dev_exp.edit', $expense->id) }}" class="f-light">
                                          {{ $expense->details }}</a>
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