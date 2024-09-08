@extends('admin.index')
@section('content')
<div class="page-body">
            <div class="container-fluid">
              <div class="page-title">
                <div class="row"> 
                  <div class="col-6">
                    <h4>Add Partner</h4>
                  </div>
                  <div class="col-6">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">                                       
                          <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                          </svg></a></li>
                      <li class="breadcrumb-item">Update</li>
                      <li class="breadcrumb-item active">Expence</li>
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
                      <h5>Update Expence Form</h5>
                      <div class="d-flex flex-wrap gap-2 mt-3 mt-md-0">
                   
                        <a class="btn btn-success" href="{{ route('expense_heads.index') }}">
                            View Expences  Head
                        </a>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row g-xl-5 g-3">
                        <div class="col-sm-12">
                             <form action="{{ route('expense_heads.update', $expenseHead->id) }}" method="POST">
            @csrf
            @method('PUT')
          
        <div class="row">
          
            <div class="col-lg-12 col-sm-12 mb-3">
                <label for="partner_name">Expense head <span class="text-danger">*</span></label>
                <input type="text" name="expense_head"  class="form-control  @error('expense_head') is-invalid @enderror" placeholder="Enter Expense head" value="{{$expenseHead->expense_head }}" >
                @error('expense_head')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

          
        </div>
        <button type="submit" class="btn btn-primary">Create Expence Head </button>
    </form>
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