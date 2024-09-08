@extends('admin.index')
@section('content')
@php
    $table = 'bank_accounts';
@endphp
<div class="page-body">
            <div class="container-fluid">
              <div class="page-title">
                <div class="row">
                  <div class="col-6">
                    <h4>Add Bank</h4>
                  </div>
                  <div class="col-6">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">                                       
                          <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                          </svg></a></li>
                      <li class="breadcrumb-item">Add</li>
                      <li class="breadcrumb-item active">Bank</li>
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
                      <h5>Add Bank Form</h5>
                      <div class="d-flex flex-wrap gap-2 mt-3 mt-md-0">
                   
                        <a class="btn btn-success" href="{{route('banks.index')}}">
View Bank
                        </a>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row g-xl-5 g-3">
                        <div class="col-sm-12">
   <form action="{{ route('banks.store') }}" method="POST">
    @csrf

    <div class="row">

        <div class="col-lg-6 col-sm-12 mb-3">
                                    <label class="form-label">Project</label>
                                    <select class="form-select" aria-label="Default select example">
                                      <option selected="">Al Habib</option>
                                    
                                    </select>
                                  </div>
  
        <div class="col-lg-6 col-sm-12 mb-3">
            <label for="bank_name" class="form-label">
                Bank Name <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control @error('bank_name') is-invalid @enderror" id="bank_name" name="bank_name" placeholder="Enter Bank Name" value="{{ old('bank_name') }}" >
            @error('bank_name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div> 


        <div class="col-lg-6 col-sm-12 mb-3">
            <label for="account_title" class="form-label">
                Account Title  <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control @error('account_title') is-invalid @enderror" id="account_title" name="account_title" placeholder="Enter Account Title" value="{{ old('account_title') }}" >
            @error('account_title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

           <div class="col-lg-6 col-sm-12 mb-3">
            <label for="contact_email" class="form-label">
                Contact Email 
            </label>
            <input type="email" class="form-control @error('contact_email') is-invalid @enderror" id="contact_email" name="contact_email" placeholder="Enter Contact Email" value="{{ old('contact_email') }}">
            @error('contact_email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="row">
     
        <div class="col-lg-6 col-sm-12 mb-3">
            <label for="account_number" class="form-label">
                Account Number 
            </label>
            <input type="text" class="form-control @error('account_number') is-invalid @enderror" id="account_number" name="account_number" placeholder="Enter Account Number" value="{{ old('account_number') }}">
            @error('account_number')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

     
        <div class="col-lg-6 col-sm-12 mb-3">
            <label for="iban" class="form-label">
                IBAN 
            </label>
            <input type="text" class="form-control @error('iban') is-invalid @enderror" id="iban" name="iban" placeholder="Enter IBAN" value="{{ old('iban') }}">
            @error('iban')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>



    </div>

    <div class="row">
   
        <div class="col-lg-6 col-sm-12 mb-3">
            <label for="routing" class="form-label">
                Routing 
            </label>
            <input type="text" class="form-control @error('routing') is-invalid @enderror" id="routing" name="routing" placeholder="Enter Routing Number" value="{{ old('routing') }}">
            @error('routing')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

     
        <div class="col-lg-6 col-sm-12 mb-3">
            <label for="bank_address" class="form-label">
                Bank Address 
            </label>
            <input type="text" class="form-control @error('bank_address') is-invalid @enderror" id="bank_address" name="bank_address" placeholder="Enter Bank Address" value="{{ old('bank_address') }}">
            @error('bank_address')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="row">
       
        <div class="col-lg-6 col-sm-12 mb-3">
            <label for="company_address_with_bank" class="form-label">
                Company Address with Bank 
            </label>
            <input type="text" class="form-control @error('company_address_with_bank') is-invalid @enderror" id="company_address_with_bank" name="company_address_with_bank" placeholder="Enter Company Address with Bank" value="{{ old('company_address_with_bank') }}">
            @error('company_address_with_bank')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

     
        <div class="col-lg-6 col-sm-12 mb-3">
            <label for="company_phone_no_with_bank" class="form-label">
                Company Phone No with Bank 
            </label>
            <input type="text" class="form-control @error('company_phone_no_with_bank') is-invalid @enderror" id="company_phone_no_with_bank" name="company_phone_no_with_bank" placeholder="Enter Company Phone Number with Bank" value="{{ old('company_phone_no_with_bank') }}">
            @error('company_phone_no_with_bank')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="row">
      
        <div class="col-lg-6 col-sm-12 mb-3">
            <label for="fed_tax_id_ein_with_bank" class="form-label">
                Fed Tax ID/EIN with Bank 
            </label>
            <input type="text" class="form-control @error('fed_tax_id_ein_with_bank') is-invalid @enderror" id="fed_tax_id_ein_with_bank" name="fed_tax_id_ein_with_bank" placeholder="Enter Fed Tax ID/EIN with Bank" value="{{ old('fed_tax_id_ein_with_bank') }}">
            @error('fed_tax_id_ein_with_bank')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-lg-6 col-sm-12 mb-3">
            <label for="ein_issue_date" class="form-label">
                EIN Issue Date 
            </label>
            <input type="date" class="form-control @error('ein_issue_date') is-invalid @enderror" id="ein_issue_date" name="ein_issue_date" placeholder="Enter EIN Issue Date" value="{{ old('ein_issue_date') }}">
            @error('ein_issue_date')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="row">
    
        <div class="col-lg-6 col-sm-12 mb-3">
            <label for="contact_person" class="form-label">
                Contact Person 
            </label>
            <input type="text" class="form-control @error('contact_person') is-invalid @enderror" id="contact_person" name="contact_person" placeholder="Enter Contact Person Name" value="{{ old('contact_person') }}">
            @error('contact_person')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

     
        <div class="col-lg-6 col-sm-12 mb-3">
            <label for="contact_phone" class="form-label">
                Contact Phone 
            </label>
            <input type="text" class="form-control @error('contact_phone') is-invalid @enderror" id="contact_phone" name="contact_phone" placeholder="Enter Contact Phone Number" value="{{ old('contact_phone') }}">
            @error('contact_phone')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

   

  
    <button type="submit" class="btn btn-primary">Submit</button>
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