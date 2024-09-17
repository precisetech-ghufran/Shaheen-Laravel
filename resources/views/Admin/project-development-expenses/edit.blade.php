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
                      <li class="breadcrumb-item">Add</li>
                      <li class="breadcrumb-item active">Partner</li>
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
                      <h5>Add Partner Form</h5>
                      <div class="d-flex flex-wrap gap-2 mt-3 mt-md-0">
                   
                        <a class="btn btn-success" href="{{ route('project_dev_exp.index') }}">
                            View Project Development Expence
                        </a>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row g-xl-5 g-3">
                        <div class="col-sm-12">
                             <form action="{{ isset($projectDevelopmentExpense) ? route('project_dev_exp.update', $projectDevelopmentExpense->id) : route('project_dev_exp.store') }}" method="POST">
        @csrf
        @if(isset($projectDevelopmentExpense))
            @method('PUT')
        @endif

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="expense_amount">Expense Amount</label>
                    <input type="text" name="expense_amount" class="form-control" placeholder="Enter expense amount" value="{{ old('expense_amount', isset($projectDevelopmentExpense) ? $projectDevelopmentExpense->expense_amount : '') }}">
                    @error('expense_amount')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="expense">Expense</label>
                    <input type="text" name="expense" class="form-control" placeholder="Enter expense" value="{{ old('expense', isset($projectDevelopmentExpense) ? $projectDevelopmentExpense->expense : '') }}">
                    @error('expense')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" name="date" class="form-control" value="{{ old('date', isset($projectDevelopmentExpense) ? $projectDevelopmentExpense->date : '') }}">
                    @error('date')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="details">Details</label>
                    <textarea name="details" class="form-control" placeholder="Enter details">{{ old('details', isset($projectDevelopmentExpense) ? $projectDevelopmentExpense->details : '') }}</textarea>
                    @error('details')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
           <div class="col-lg-6">
                <div class="form-group">
                    <label for="project_id">Project</label>
                    <select name="project_id" class="form-control">
                        <option value="">Select Project</option>
                        @foreach($projects as $project)
                            <option value="{{ $project->id }}" {{ old('project_id', isset($projectDevelopmentExpense) && $projectDevelopmentExpense->project_id == $project->id ? 'selected' : '') }}>{{ $project->project_name }}</option>
                        @endforeach
                    </select>
                    @error('project_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div> 

            <div class="col-lg-6">
                <div class="form-group">
                    <label for="expense_id">Expense Head</label>
                    <select name="expense_id" class="form-control">
                        <option value="">Select Expense Head</option>
                        @foreach($expenseHeads as $expenseHead)
                            <option value="{{ $expenseHead->id }}" {{ old('expense_id', isset($projectDevelopmentExpense) && $projectDevelopmentExpense->expense_id == $expenseHead->id ? 'selected' : '') }}>{{ $expenseHead->expense_head }}</option>
                        @endforeach
                    </select>
                    @error('expense_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="vendor_id">Vendor</label>
                    <select name="vendor_id" class="form-control">
                        <option value="">Select Vendor</option>
                        @foreach($vendors as $vendor)
                            <option value="{{ $vendor->id }}" {{ old('vendor_id', isset($projectDevelopmentExpense) && $projectDevelopmentExpense->vendor_id == $vendor->id ? 'selected' : '') }}>{{ $vendor->vendor_name }}</option>
                        @endforeach
                    </select>
                    @error('vendor_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
<br/>
        <button type="submit" class="btn btn-primary">{{ isset($projectDevelopmentExpense) ? 'Update' : 'Create' }}</button>
    </form>
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