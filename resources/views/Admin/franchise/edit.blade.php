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
                    <h4>Update Franchise</h4>
                  </div>
                  <div class="col-6">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">                                       
                          <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                          </svg></a></li>
                      <li class="breadcrumb-item">Update</li>
                      <li class="breadcrumb-item active">Franchise</li>
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
                      <h5>Update Franchise Form</h5>
                      <div class="d-flex flex-wrap gap-2 mt-3 mt-md-0">
                   
                        <a class="btn btn-success" href="{{route('franchises.create')}}">
Add Franchise
                        </a>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row g-xl-5 g-3">
                        <div class="col-sm-12">
                                                      <form action="{{ route('franchises.update', $franchise->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-lg-6 col-sm-12 mb-3">
                <div class="form-group">
                    <label for="franchise_name">Franchise Name *</label>
                    <input type="text" id="franchise_name" name="franchise_name" class="form-control @error('franchise_name') is-invalid @enderror" value="{{ old('franchise_name', $franchise->franchise_name) }}" required>
                    @error('franchise_name')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 col-sm-12 mb-3">
                <div class="form-group">
                    <label for="website">Website</label>
                    <input type="url" id="website" name="website" class="form-control @error('website') is-invalid @enderror" value="{{ old('website', $franchise->website) }}">
                    @error('website')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 col-sm-12 mb-3">
                <div class="form-group">
                    <label for="contact_person_name">Contact Person Name</label>
                    <input type="text" id="contact_person_name" name="contact_person_name" class="form-control @error('contact_person_name') is-invalid @enderror" value="{{ old('contact_person_name', $franchise->contact_person_name) }}">
                    @error('contact_person_name')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 col-sm-12 mb-3">
                <div class="form-group">
                    <label for="franchisor_contact_person">Franchisor Contact Person</label>
                    <input type="text" id="franchisor_contact_person" name="franchisor_contact_person" class="form-control @error('franchisor_contact_person') is-invalid @enderror" value="{{ old('franchisor_contact_person', $franchise->franchisor_contact_person) }}">
                    @error('franchisor_contact_person')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 col-sm-12 mb-3">
                <div class="form-group">
                    <label for="construction_contact_person">Construction Contact Person</label>
                    <input type="text" id="construction_contact_person" name="construction_contact_person" class="form-control @error('construction_contact_person') is-invalid @enderror" value="{{ old('construction_contact_person', $franchise->construction_contact_person) }}">
                    @error('construction_contact_person')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 col-sm-12 mb-3">
                <div class="form-group">
                    <label for="construction_contact_email">Construction Contact Email</label>
                    <input type="email" id="construction_contact_email" name="construction_contact_email" class="form-control @error('construction_contact_email') is-invalid @enderror" value="{{ old('construction_contact_email', $franchise->construction_contact_email) }}">
                    @error('construction_contact_email')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 col-sm-12 mb-3">
                <div class="form-group">
                    <label for="construction_phone_no">Construction Phone No</label>
                    <input type="text" id="construction_phone_no" name="construction_phone_no" class="form-control @error('construction_phone_no') is-invalid @enderror" value="{{ old('construction_phone_no', $franchise->construction_phone_no) }}">
                    @error('construction_phone_no')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 col-sm-12 mb-3">
                <div class="form-group">
                    <label for="training_contact_person">Training Contact Person</label>
                    <input type="text" id="training_contact_person" name="training_contact_person" class="form-control @error('training_contact_person') is-invalid @enderror" value="{{ old('training_contact_person', $franchise->training_contact_person) }}">
                    @error('training_contact_person')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 col-sm-12 mb-3">
                <div class="form-group">
                    <label for="training_contact_email">Training Contact Email</label>
                    <input type="email" id="training_contact_email" name="training_contact_email" class="form-control @error('training_contact_email') is-invalid @enderror" value="{{ old('training_contact_email', $franchise->training_contact_email) }}">
                    @error('training_contact_email')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 col-sm-12 mb-3">
                <div class="form-group">
                    <label for="training_phone_no">Training Phone No</label>
                    <input type="text" id="training_phone_no" name="training_phone_no" class="form-control @error('training_phone_no') is-invalid @enderror" value="{{ old('training_phone_no', $franchise->training_phone_no) }}">
                    @error('training_phone_no')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 col-sm-12 mb-3">
                <div class="form-group">
                    <label for="opening_contact_person">Opening Contact Person</label>
                    <input type="text" id="opening_contact_person" name="opening_contact_person" class="form-control @error('opening_contact_person') is-invalid @enderror" value="{{ old('opening_contact_person', $franchise->opening_contact_person) }}">
                    @error('opening_contact_person')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 col-sm-12 mb-3">
                <div class="form-group">
                    <label for="opening_person_email">Opening Person Email</label>
                    <input type="email" id="opening_person_email" name="opening_person_email" class="form-control @error('opening_person_email') is-invalid @enderror" value="{{ old('opening_person_email', $franchise->opening_person_email) }}">
                    @error('opening_person_email')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 col-sm-12 mb-3">
                <div class="form-group">
                    <label for="opening_person_phone_no">Opening Person Phone No</label>
                    <input type="text" id="opening_person_phone_no" name="opening_person_phone_no" class="form-control @error('opening_person_phone_no') is-invalid @enderror" value="{{ old('opening_person_phone_no', $franchise->opening_person_phone_no) }}">
                    @error('opening_person_phone_no')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 col-sm-12 mb-3">
                <div class="form-group">
                    <label for="franchise_image">Franchise Image</label>
                    <input type="file" id="franchise_image" name="franchise_image" class="form-control @error('franchise_image') is-invalid @enderror">
                    @if($franchise->franchise_image)
                        <img src="{{ asset('uploads/franchise/' . $franchise->franchise_image) }}" alt="Franchise Image" class="img-thumbnail mt-2" style="max-height: 150px;">
                    @endif
                    @error('franchise_image')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-12 mb-3">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
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