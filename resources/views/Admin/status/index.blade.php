@extends('admin.index')
@section('content')
<div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                <div class="row">
                    
                    <div class="col-6">
                    <h4>Store Details</h4>
                    </div>
                    <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">                                       
                            <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                            </svg></a></li>
                        <li class="breadcrumb-item">Store</li>
                        <li class="breadcrumb-item active">Store Details</li>
                    </ol>
                    </div>
                </div>
                </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row size-column"> 
                    <div class="col-xxl-12 box-col-12">
                        <div class="row">
                            <div class="col-xl-3 col-sm-6">
                              <div class="card o-hidden small-widget">
                                <div class="card-body total-project border-b-primary border-2">
                                  <span class="f-light f-w-500 f-14">
                                    Total Profit
                                  </span>
                                  <div class="project-details"> 
                                    <div class="project-counter"> 
                                      <h2 class="f-w-600">1,523</h2>
                                      <span class="f-12 f-w-400">(This month)</span>
                                    </div>
                                    <div class="product-sub bg-primary-light">
                                      <svg class="invoice-icon">
                                        <use href="../assets/svg/icon-sprite.svg#profit"></use>
                                      </svg>
                                    </div>
                                  </div>
                                  <ul class="bubbles">
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                              <div class="card o-hidden small-widget">
                                <div class="card-body total-Progress border-b-warning border-2">
                                  <span class="f-light f-w-500 f-14">Net Cost</span>
                                  <div class="project-details">
                                    <div class="project-counter">
                                      <h2 class="f-w-600">836</h2>
                                      <span class="f-12 f-w-400">(This month)</span>
                                    </div>
                                    <div class="product-sub bg-warning-light"> 
                                      <svg class="invoice-icon">
                                        <use href="../assets/svg/icon-sprite.svg#activity"></use>
                                      </svg>
                                    </div>
                                  </div>
                                  <ul class="bubbles">
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                              <div class="card o-hidden small-widget">
                                <div class="card-body total-Complete border-b-secondary border-2">
                                  <span class="f-light f-w-500 f-14">Total Partners</span>
                                  <div class="project-details">
                                    <div class="project-counter">
                                      <h2 class="f-w-600">475</h2><span class="f-12 f-w-400">(This month) </span>
                                    </div>
                                    <div class="product-sub bg-secondary-light"> 
                                      <svg class="invoice-icon">
                                        <use href="../assets/svg/icon-sprite.svg#people"></use>
                                      </svg>
                                    </div>
                                  </div>
                                  <ul class="bubbles"> 
                                    <li class="bubble"> </li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"> </li>
                                    <li class="bubble"></li>
                                    <li class="bubble"> </li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"> </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                              <div class="card o-hidden small-widget">
                                <div class="card-body total-upcoming">
                                  <span class="f-light f-w-500 f-14">Total Banks</span>
                                  <div class="project-details"> 
                                    <div class="project-counter">
                                      <h2 class="f-w-600">189</h2><span class="f-12 f-w-400">(This month) </span>
                                    </div>
                                    <div class="product-sub bg-light-light"> 
                                      <svg class="invoice-icon">
                                        <use href="../assets/svg/icon-sprite.svg#money-recive"></use>
                                      </svg>
                                    </div>
                                  </div>
                                  <ul class="bubbles"> 
                                    <li class="bubble"> </li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="col-12"> 
                                <div class="card"> 
                                    <!-- <div class="card-header d-block d-md-flex justify-content-between">
                                        <h5>FR000453ER3</h5>
                                        <div class="d-flex gap-2 mt-3 mt-md-0">
                                            <a class="btn btn-danger" href="add-store.html">
                                                Edit
                                            </a>
                                            <a class="btn btn-success" href="attachments.html">
                                                Add Attachments
                                            </a>
                                        </div>
                                    </div> -->
                                    <div class="card-body">
                                        <div class="row g-xl-5 g-3">
                                            <div class="sidebar-body advance-options">
                                                <ul class="nav nav-tabs border-tab mb-0" id="advance-option-tab" role="tablist">
                                                    <li class="nav-item" role="presentation"><a class="nav-link active" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Profile</a></li>
                                                    <li class="nav-item" role="presentation"><a class="nav-link" id="lease-tab" data-bs-toggle="tab" href="#lease" role="tab" aria-controls="lease" aria-selected="false" tabindex="-1">Lease</a></li>
                                                    <li class="nav-item" role="presentation"><a class="nav-link" id="construction-tab" data-bs-toggle="tab" href="#construction" role="tab" aria-controls="construction" aria-selected="false" tabindex="-1">Construction</a></li>
                                                    <li class="nav-item" role="presentation"><a class="nav-link" id="landlord-and-realtor-tab" data-bs-toggle="tab" href="#landlord-and-realtor" role="tab" aria-controls="landlord-and-realtor" aria-selected="false" tabindex="-1">Landlord &amp; Realtor</a></li>
                                                    <li class="nav-item" role="presentation"><a class="nav-link" id="permits-and-license-tab" data-bs-toggle="tab" href="#permits-and-license" role="tab" aria-controls="permits-and-license" aria-selected="false" tabindex="-1">Permits &amp; License</a></li>
                                                    <li class="nav-item" role="presentation"><a class="nav-link" id="vendors-tab" data-bs-toggle="tab" href="#vendors" role="tab" aria-controls="vendors" aria-selected="false" tabindex="-1">Vendors</a></li>
                                                    <li class="nav-item" role="presentation"><a class="nav-link" id="partners-tab" data-bs-toggle="tab" href="#partners" role="tab" aria-controls="partners" aria-selected="false" tabindex="-1">Partners</a></li>
                                                    <li class="nav-item" role="presentation"><a class="nav-link" id="banking-tab" data-bs-toggle="tab" href="#banking" role="tab" aria-controls="banking" aria-selected="false" tabindex="-1">Banking</a></li>
                                                    <li class="nav-item" role="presentation"><a class="nav-link" id="all-attachments-documents-tab" data-bs-toggle="tab" href="#all-attachments-documents" role="tab" aria-controls="all-attachments-documents" aria-selected="false" tabindex="-1">All Attachments</a></li>
                                                </ul>
                                                <div class="tab-content" id="advance-option-tabContent">
                                                    <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                        <div class="meta-body"> 
                                                            <div class="card-header card-no-border total-revenue pb-0">
                                                                <div class="list-content"> 
                                                                    <h4>CHARLEY'S QSR-FRANCHISE</h4>
                                                                    <p>Store Code: P-003</p>
                                                                </div>
                                                            </div>
                                                            <div class="card-body pt-0">
                                                            <div class="table-responsive custom-scrollbar deliveries-percentage">
                                                                <table class="percentage-data w-100 mt-5">
                                                                <tbody> 
                                                                    <tr>
                                                                        <td class="f-w-400 f-10 gap-2"><strong>State</strong></td>
                                                                        <td class="f-w-500 f-10 text-center"></td>
                                                                        <td class="f-w-400 f-10 gap-2"><strong>City</strong></td>
                                                                        <td class="f-w-500 f-10 text-center"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="f-w-400 f-10 gap-2"><strong>Zip Code</strong></td>
                                                                        <td class="f-w-500 f-10 text-center"></td>
                                                                        <td class="f-w-400 f-10 gap-2"><strong>Address</strong></td>
                                                                        <td class="f-w-500 f-10 text-center"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="f-w-400 f-10 gap-2"><strong>Landing Phone No</strong></td>
                                                                        <td class="f-w-500 f-10 text-center"></td>
                                                                        <td class="f-w-400 f-10 gap-2"><strong>Whatsapp Number</strong></td>
                                                                        <td class="f-w-500 f-10 text-center"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="f-w-400 f-10 gap-2"><strong>Official Email</strong></td>
                                                                        <td class="f-w-500 f-10 text-center"></td>
                                                                        <td class="f-w-400 f-10 gap-2"><strong>Email</strong></td>
                                                                        <td class="f-w-500 f-10 text-center"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="f-w-400 f-10 gap-2"><strong>Website</strong></td>
                                                                        <td class="f-w-500 f-10 text-center"></td>
                                                                        <td class="f-w-400 f-10 gap-2"><strong>Social Links</strong></td>
                                                                        <td class="f-w-500 f-10 text-center"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="f-w-400 f-10 gap-2"><strong>Ordering Links</strong></td>
                                                                        <td class="f-w-500 f-10 text-center"></td>
                                                                    </tr>
                                                                </tbody>
                                                                </table>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="lease" role="tabpanel" aria-labelledby="lease-tab">
                                                        <div class="meta-body">
                                                            <div class="card-header card-no-border total-revenue pb-0">
                                                                <div class="list-content"> 
                                                                    <h4>Lease Signed</h4>
                                                                </div>
                                                            </div>
                                                            <div class="card-body pt-0">
                                                                <div class="table-responsive custom-scrollbar deliveries-percentage">
                                                                    <table class="percentage-data w-100 mt-5">
                                                                        <tbody> 
                                                                            <tr>
                                                                                <td class="f-w-400 f-10 gap-2"><strong>Lease Date</strong></td>
                                                                                <td class="f-w-500 f-10 text-center">11-07-23</td>
                                                                                <td class="f-w-400 f-10 gap-2"><strong>Lease Asking Rent</strong></td>
                                                                                <td class="f-w-500 f-10 text-center">4433277843</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="f-w-400 f-10 gap-2"><strong>Total Sq Ft Lease Area</strong></td>
                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                <td class="f-w-400 f-10 gap-2"><strong>Lease Duration</strong></td>
                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="f-w-400 f-10 gap-2"><strong>Monthly Common Area Maintenance</strong></td>
                                                                                <td class="f-w-500 f-10 text-center">0</td>
                                                                                <td class="f-w-400 f-10 gap-2"><strong>On Site Dining Seats</strong></td>
                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="f-w-400 f-10 gap-2"><strong>Annual Rent Increase Percent</strong></td>
                                                                                <td class="f-w-500 f-10 text-center">0</td>
                                                                                <td class="f-w-400 f-10 gap-2"><strong>Security Deposit</strong></td>
                                                                                <td class="f-w-500 f-10 text-center">0</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="f-w-400 f-10 gap-2"><strong>Initial Rent Deposit</strong></td>
                                                                                <td class="f-w-500 f-10 text-center">0</td>
                                                                                <td class="f-w-400 f-10 gap-2"><strong>Monthly Tax Charge</strong></td>
                                                                                <td class="f-w-500 f-10 text-center">0</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="f-w-400 f-10 gap-2"><strong>Base Rent</strong></td>
                                                                                <td class="f-w-500 f-10 text-center">0</td>
                                                                                <td class="f-w-400 f-10 gap-2"><strong>Total nnn</strong></td>
                                                                                <td class="f-w-500 f-10 text-center">0</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="f-w-400 f-10 gap-2"><strong>Monthly Rent</strong></td>
                                                                                <td class="f-w-500 f-10 text-center">0</td>
                                                                                <td class="f-w-400 f-10 gap-2"><strong></strong></td>
                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="f-w-400 f-10 gap-2"><strong>Lease Guarantee</strong></td>
                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                <td class="f-w-400 f-10 gap-2"><strong>Lease Guranteed By</strong></td>
                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="f-w-400 f-10 gap-2"><strong>Insurance</strong></td>
                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                <td class="f-w-400 f-10 gap-2"><strong>Lease Comments</strong></td>
                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="construction" role="tabpanel" aria-labelledby="construction-tab">
                                                        <div class="meta-body">
                                                            <div class="card-header card-no-border total-revenue pb-0">
                                                                <div class="list-content"> 
                                                                    <h4>Pre Construction</h4>
                                                                </div>
                                                            </div>
                                                            <div class="card-body pt-0">
                                                                <div class="table-responsive custom-scrollbar deliveries-percentage">
                                                                    <table class="percentage-data w-100 mt-5">
                                                                        <tbody> 
                                                                            <tr>
                                                                                <td class="f-w-400 f-10 gap-2"><strong>Pre Construction Date</strong></td>
                                                                                <td class="f-w-500 f-10 text-center"><strong>Construction Details</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="f-w-400 f-10 gap-2">11-07-23</td>
                                                                                <td class="f-w-500 f-10 text-center">Construction Details</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="card-header card-no-border total-revenue pb-0">
                                                                <div class="list-content"> 
                                                                    <h4>Construction</h4>
                                                                </div>
                                                            </div>
                                                            <div class="card-body pt-0">
                                                                <div class="table-responsive custom-scrollbar deliveries-percentage">
                                                                    <table class="percentage-data w-100 mt-5">
                                                                        <tbody> 
                                                                            <tr>
                                                                                <td class="f-w-400 f-10 gap-2"><strong>Construction Date</strong></td>
                                                                                <td class="f-w-500 f-10 text-center"><strong>Construction Details</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="f-w-400 f-10 gap-2">11-07-23</td>
                                                                                <td class="f-w-500 f-10 text-center">Construction Details</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="landlord-and-realtor" role="tabpanel" aria-labelledby="landlord-and-realtor-tab">
                                                        <div class="meta-body">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-xl-6 my-3">
                                                                    <div class="prooduct-details-box card-absolute">
                                                                        <div class="media">
                                                                            <div class="card-header bg-primary">
                                                                                <h5 class="txt-light">Landlord</h5>
                                                                            </div>
                                                                            <div class="card-body pt-0">
                                                                                <div class="table-responsive custom-scrollbar deliveries-percentage">
                                                                                    <table class="percentage-data w-100 mt-2">
                                                                                        <tbody> 
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Company Name</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Website</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Address</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Contact No</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Email</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Contact Perosn</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-xl-6 my-3">
                                                                    <div class="prooduct-details-box card-absolute">
                                                                        <div class="media">
                                                                            <div class="card-header bg-primary">
                                                                                <h5 class="txt-light">Landlord Realtor</h5>
                                                                            </div>
                                                                            <div class="card-body pt-0">
                                                                                <div class="table-responsive custom-scrollbar deliveries-percentage">
                                                                                    <table class="percentage-data w-100 mt-2">
                                                                                        <tbody> 
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Company Name</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Website</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Address</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Contact No</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Email</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Contact Perosn</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-xl-6 my-3">
                                                                    <div class="prooduct-details-box card-absolute">
                                                                        <div class="media">
                                                                            <div class="card-header bg-primary">
                                                                                <h5 class="txt-light">Tenant</h5>
                                                                            </div>
                                                                            <div class="card-body pt-0">
                                                                                <div class="table-responsive custom-scrollbar deliveries-percentage">
                                                                                    <table class="percentage-data w-100 mt-2">
                                                                                        <tbody> 
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Company Name</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Website</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Address</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Contact No</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Email</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Contact Perosn</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-xl-6 my-3">
                                                                    <div class="prooduct-details-box card-absolute">
                                                                        <div class="media">
                                                                            <div class="card-header bg-primary">
                                                                                <h5 class="txt-light">Tenant Realtor</h5>
                                                                            </div>
                                                                            <div class="card-body pt-0">
                                                                                <div class="table-responsive custom-scrollbar deliveries-percentage">
                                                                                    <table class="percentage-data w-100 mt-2">
                                                                                        <tbody> 
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Company Name</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Website</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Address</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Contact No</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Email</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Contact Perosn</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
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
                                                    <div class="tab-pane fade" id="permits-and-license" role="tabpanel" aria-labelledby="permits-and-license-tab">
                                                        <div class="meta-body">
                                                            <div class="card-header card-no-border pb-0">
                                                                <div class="list-content d-flex justify-content-between"> 
                                                                    <h4>Permit and License</h4>
                                                                    <a class="btn btn-primary" href="add-store.html">
                                                                        Upload Permit &amp; License
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="card-body pt-0">
                                                                <div class="table-responsive custom-scrollbar deliveries-percentage">
                                                                    <table class="percentage-data w-100 mt-5">
                                                                        <tbody> 
                                                                            <tr>
                                                                                <td class="f-w-400 f-10 gap-2"><strong>Permit No: 1</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="f-w-400 f-10 gap-2"><strong>Permit No: 2</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="f-w-400 f-10 gap-2"><strong>Permit No: 3</strong></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="vendors" role="tabpanel" aria-labelledby="vendors-tab">
                                                        <div class="meta-body">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-xl-6 my-3">
                                                                    <div class="prooduct-details-box card-absolute">
                                                                        <div class="media">
                                                                            <div class="card-header bg-primary">
                                                                                <h5 class="txt-light">Vendor - OLO | <a href="#" class="text-white text-underline">Edit</a></h5>
                                                                            </div>
                                                                            <div class="card-body pt-0">
                                                                                <div class="table-responsive custom-scrollbar deliveries-percentage">
                                                                                    <table class="percentage-data w-100 mt-2">
                                                                                        <tbody> 
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Name Used with Vendor</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Phone No Used</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Billing Address</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Login URL</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Account Email</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Our Account No</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Username</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-xl-6 my-3">
                                                                    <div class="prooduct-details-box card-absolute">
                                                                        <div class="media">
                                                                            <div class="card-header bg-primary">
                                                                                <h5 class="txt-light">Vendor - PARTECH/BRINKS | <a href="#" class="text-white text-underline">Edit</a></h5>
                                                                            </div>
                                                                            <div class="card-body pt-0">
                                                                                <div class="table-responsive custom-scrollbar deliveries-percentage">
                                                                                    <table class="percentage-data w-100 mt-2">
                                                                                        <tbody> 
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Name Used with Vendor</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Phone No Used</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Billing Address</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Login URL</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Account Email</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Our Account No</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Username</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
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
                                                    <div class="tab-pane fade" id="partners" role="tabpanel" aria-labelledby="partners-tab">
                                                        <div class="meta-body">
                                                            <div class="list-product">
                                                            <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                                                                <div class="datatable-container">
                                                                    <table class="table datatable-table">
                                                                    <thead> 
                                                                        <tr> 
                                                                        <th>
                                                                            <div class="form-check"> 
                                                                            <input class="form-check-input checkbox-primary" type="checkbox">
                                                                            </div>
                                                                        </th>
                                                                        <th> <span class="f-light f-w-600">Date</span></th>
                                                                        <th> <span class="f-light f-w-600">Partner Name</span></th>
                                                                        <th> <span class="f-light f-w-600">Details</span></th>
                                                                        <th> <span class="f-light f-w-600">Equity Share</span></th>
                                                                        <th> <span class="f-light f-w-600">Profit Share</span></th>
                                                                        <th> <span class="f-light f-w-600">Options</span></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody> 
                                                                        <tr class="product-removes">
                                                                            <td>
                                                                                <div class="form-check"> 
                                                                                <input class="form-check-input checkbox-primary" type="checkbox">
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="product-names">
                                                                                <p class="f-light">06-10-2024</p>
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="product-names">
                                                                                    <p class="f-light">Shaheeh Group</p>
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="product-names">
                                                                                    <p class="f-light"></p>
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="product-names">
                                                                                    <p class="f-light">20%</p>
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="product-names">
                                                                                    <p class="f-light">10%</p>
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="btn-group">
                                                                                    <button class="btn btn-primary" type="button">Edit</button>
                                                                                </div>
                                                                            </td>
                                                                        </tr> 
                                                                        <tr class="product-removes">
                                                                            <td>
                                                                                <div class="form-check"> 
                                                                                <input class="form-check-input checkbox-primary" type="checkbox">
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="product-names">
                                                                                <p class="f-light">06-10-2024</p>
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="product-names">
                                                                                    <p class="f-light">Shaheeh Group</p>
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="product-names">
                                                                                    <p class="f-light"></p>
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="product-names">
                                                                                    <p class="f-light">20%</p>
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="product-names">
                                                                                    <p class="f-light">10%</p>
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="btn-group">
                                                                                    <button class="btn btn-primary" type="button">Edit</button>
                                                                                </div>
                                                                            </td>
                                                                        </tr> 
                                                                        <tr class="product-removes">
                                                                            <td>
                                                                                <div class="form-check"> 
                                                                                <input class="form-check-input checkbox-primary" type="checkbox">
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="product-names">
                                                                                <p class="f-light">06-10-2024</p>
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="product-names">
                                                                                    <p class="f-light">Shaheeh Group</p>
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="product-names">
                                                                                    <p class="f-light"></p>
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="product-names">
                                                                                    <p class="f-light">20%</p>
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="product-names">
                                                                                    <p class="f-light">10%</p>
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="btn-group">
                                                                                    <button class="btn btn-primary" type="button">Edit</button>
                                                                                </div>
                                                                            </td>
                                                                        </tr> 
                                                                    </tbody>
                                                                    </table>
                                                                </div>
                                                                </div>
                                                                <div class="datatable-bottom">
                                                                    <div class="datatable-info">Showing 1 to 3 of 3 entries</div>
                                                                    <nav class="datatable-pagination">
                                                                        <ul class="datatable-pagination-list">
                                                                            <li class="datatable-pagination-list-item datatable-hidden datatable-disabled">
                                                                                <a data-page="1" class="datatable-pagination-list-item-link">‹</a>
                                                                            </li>
                                                                            <li class="datatable-pagination-list-item datatable-active">
                                                                                <a data-page="1" class="datatable-pagination-list-item-link">1</a>
                                                                            </li>
                                                                            <li class="datatable-pagination-list-item">
                                                                                <a data-page="2" class="datatable-pagination-list-item-link">2</a>
                                                                            </li>
                                                                            <li class="datatable-pagination-list-item">
                                                                                <a data-page="2" class="datatable-pagination-list-item-link">›</a>
                                                                            </li>
                                                                        </ul>
                                                                    </nav>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="banking" role="tabpanel" aria-labelledby="banking-tab">
                                                        <div class="meta-body">
                                                            <div class="row">
                                                                <div class="col-sm-12 my-3">
                                                                    <div class="prooduct-details-box card-absolute">
                                                                        <div class="media">
                                                                            <div class="card-header bg-primary">
                                                                                <h5 class="txt-light">Bank Name: TD Bank CAMDEN CHARLEYS | <a href="#" class="text-white text-underline">Edit</a></h5>
                                                                            </div>
                                                                            <div class="card-body pt-0">
                                                                                <div class="table-responsive custom-scrollbar deliveries-percentage">
                                                                                    <table class="percentage-data w-100 mt-2">
                                                                                        <tbody> 
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Account Title</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Account Number</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>IBAN</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Routing</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Bank Address</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Company Address with Bank</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Company Phone with Bank</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>FED Tax ID/EIN with Bank</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>EIN Issue Date</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Contact Person</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Contact Phone</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="f-w-400 f-10 gap-2"><strong>Contact Email</strong></td>
                                                                                                <td class="f-w-500 f-10 text-center"></td>
                                                                                            </tr>
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
                                                    <div class="tab-pane fade" id="all-attachments-documents" role="tabpanel" aria-labelledby="all-attachments-documents-tab">
                                                        <div class="meta-body">
                                                            <div class="list-product">
                                                            <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                                                                <div class="datatable-container">
                                                                    <table class="table datatable-table">
                                                                    <thead> 
                                                                        <tr> 
                                                                        <th>
                                                                            <div class="form-check"> 
                                                                            <input class="form-check-input checkbox-primary" type="checkbox">
                                                                            </div>
                                                                        </th>
                                                                        <th> <span class="f-light f-w-600">Title</span></th>
                                                                        <th> <span class="f-light f-w-600">Date</span></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody> 
                                                                        <tr class="product-removes">
                                                                            <td>
                                                                                <div class="form-check"> 
                                                                                <input class="form-check-input checkbox-primary" type="checkbox">
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="product-names">
                                                                                    <p class="f-light">
                                                                                        <strong>
                                                                                            Document 1
                                                                                        </strong>
                                                                                    </p>
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="product-names">
                                                                                    <p class="f-light">
                                                                                        06-10-2024
                                                                                    </p>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="product-removes">
                                                                            <td>
                                                                                <div class="form-check"> 
                                                                                <input class="form-check-input checkbox-primary" type="checkbox">
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="product-names">
                                                                                    <p class="f-light">
                                                                                        <strong>
                                                                                            Document 1
                                                                                        </strong>
                                                                                    </p>
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="product-names">
                                                                                    <p class="f-light">
                                                                                        06-10-2024
                                                                                    </p>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="product-removes">
                                                                            <td>
                                                                                <div class="form-check"> 
                                                                                <input class="form-check-input checkbox-primary" type="checkbox">
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="product-names">
                                                                                    <p class="f-light">
                                                                                        <strong>
                                                                                            Document 1
                                                                                        </strong>
                                                                                    </p>
                                                                                </div>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="product-names">
                                                                                    <p class="f-light">
                                                                                        06-10-2024
                                                                                    </p>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                    </table>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="col-xxl-3 col-xl-4 box-col-4e sidebar-left-wrapper">
                                                <ul class="sidebar-left-icons nav nav-pills" id="add-product-pills-tab" role="tablist">
                                                <li class="nav-item"> <a class="nav-link active" id="detail-product-tab" data-bs-toggle="pill" href="#detail-product" role="tab" aria-controls="detail-product" aria-selected="false">
                                                    <div class="nav-rounded">
                                                        <div class="product-icons">
                                                        <svg class="stroke-icon">
                                                            <use href="../assets/svg/icon-sprite.svg#product-detail"></use>
                                                        </svg>
                                                        </div>
                                                    </div>
                                                    <div class="product-tab-content">
                                                        <h6>Add Product Details</h6>
                                                        <p>Add Product name & details</p>
                                                    </div></a></li>
                                                <li class="nav-item"> <a class="nav-link" id="gallery-product-tab" data-bs-toggle="pill" href="#gallery-product" role="tab" aria-controls="gallery-product" aria-selected="false">
                                                    <div class="nav-rounded">
                                                        <div class="product-icons">
                                                        <svg class="stroke-icon">
                                                            <use href="../assets/svg/icon-sprite.svg#product-gallery"></use>
                                                        </svg>
                                                        </div>
                                                    </div>
                                                    <div class="product-tab-content">
                                                        <h6>Product gallery</h6>
                                                        <p>thumbnail & Add Product Gallery</p>
                                                    </div></a></li>
                                                <li class="nav-item"> <a class="nav-link" id="category-product-tab" data-bs-toggle="pill" href="#category-product" role="tab" aria-controls="category-product" aria-selected="false">
                                                    <div class="nav-rounded">
                                                        <div class="product-icons">
                                                        <svg class="stroke-icon">
                                                            <use href="../assets/svg/icon-sprite.svg#product-category"></use>
                                                        </svg>
                                                        </div>
                                                    </div>
                                                    <div class="product-tab-content">
                                                        <h6>Product Categories</h6>
                                                        <p>Add Product category, Status and Tags</p>
                                                    </div></a></li>
                                                <li class="nav-item"><a class="nav-link" id="pricings-tab" data-bs-toggle="pill" href="#pricings" role="tab" aria-controls="pricings" aria-selected="false">
                                                    <div class="nav-rounded">
                                                        <div class="product-icons">
                                                        <svg class="stroke-icon">
                                                            <use href="../assets/svg/icon-sprite.svg#pricing"> </use>
                                                        </svg>
                                                        </div>
                                                    </div>
                                                    <div class="product-tab-content">
                                                        <h6>Selling prices</h6>
                                                        <p>Add Product basic price & Discount</p>
                                                    </div></a></li>
                                                <li class="nav-item"><a class="nav-link" id="advance-product-tab" data-bs-toggle="pill" href="#advance-product" role="tab" aria-controls="advance-product" aria-selected="false">
                                                    <div class="nav-rounded">
                                                        <div class="product-icons">
                                                        <svg class="stroke-icon">
                                                            <use href="../assets/svg/icon-sprite.svg#advance"> </use>
                                                        </svg>
                                                        </div>
                                                    </div>
                                                    <div class="product-tab-content">
                                                        <h6>Advance</h6>
                                                        <p>Add Meta details & Inventory details</p>
                                                    </div></a></li>
                                                </ul>
                                            </div>
                                            <div class="col-xxl-9 col-xl-8 box-col-8 position-relative">
                                                <div class="tab-content" id="add-product-pills-tabContent">
                                                <div class="tab-pane fade show active" id="detail-product" role="tabpanel" aria-labelledby="detail-product-tab">
                                                    <div class="sidebar-body">
                                                    <form class="row g-2">
                                                        <label class="form-label col-12 m-0" for="productTitle1">Product Title <span class="txt-danger"> *</span></label>
                                                        <div class="col-12 custom-input">
                                                        <input class="form-control is-invalid" id="productTitle1" type="text" required="">
                                                        <div class="valid-feedback">Looks good!</div>
                                                        <div class="invalid-feedback">A product name is required and recommended to be unique.</div>
                                                        </div>
                                                        <div class="col-12"> 
                                                        <div class="toolbar-box">
                                                            <div id="toolbar2"><span class="ql-formats">
                                                                <select class="ql-size"></select></span><span class="ql-formats">
                                                                <button class="ql-bold">Bold </button>
                                                                <button class="ql-italic">Italic </button>
                                                                <button class="ql-underline">underline</button>
                                                                <button class="ql-strike">Strike </button></span><span class="ql-formats">
                                                                <button class="ql-list" value="ordered">List </button>
                                                                <button class="ql-list" value="bullet"> </button>
                                                                <button class="ql-indent" value="-1"> </button>
                                                                <button class="ql-indent" value="+1"></button></span><span class="ql-formats">
                                                                <button class="ql-link"></button>
                                                                <button class="ql-image"></button>
                                                                <button class="ql-video"></button></span></div>
                                                            <div id="editor2"></div>
                                                        </div>
                                                        <p class="f-light">Improve product visibility by adding a compelling description.</p>
                                                        </div>
                                                    </form>
                                                    <div class="product-buttons">
                                                        <div class="btn">
                                                        <div class="d-flex align-items-center gap-sm-2 gap-1">Next
                                                            <svg>
                                                            <use href="../assets/svg/icon-sprite.svg#front-arrow">  </use>
                                                            </svg>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="gallery-product" role="tabpanel" aria-labelledby="gallery-product-tab">
                                                    <div class="sidebar-body">
                                                    <div class="product-upload">
                                                        <p>Product Image </p>
                                                        <form class="dropzone dropzone-light" id="multiFileUploadA" action="/upload.php">
                                                        <div class="dz-message needsclick">
                                                            <svg>
                                                            <use href="../assets/svg/icon-sprite.svg#file-upload"></use>
                                                            </svg>
                                                            <h6>Drag your image here, or <a class="txt-primary" href="#!">browser</a></h6><span class="note needsclick">SVG,PNG,JPG or GIF</span>
                                                        </div>
                                                        </form>
                                                    </div>
                                                    <div class="product-upload">
                                                        <p>Product Gallery</p>
                                                        <form class="dropzone dropzone-light" id="multiFileUploadB" action="/upload.php">
                                                        <div class="dz-message needsclick">
                                                            <svg>
                                                            <use href="../assets/svg/icon-sprite.svg#file-upload1"></use>
                                                            </svg>
                                                            <h6>Drag files here</h6><span class="note needsclick">Add Product Gallery Images</span>
                                                        </div>
                                                        </form>
                                                    </div>
                                                    <div class="product-buttons">
                                                        <div class="btn">
                                                        <div class="d-flex align-items-center gap-sm-2 gap-1">
                                                            <svg>
                                                            <use href="../assets/svg/icon-sprite.svg#back-arrow"></use>
                                                            </svg>Previous
                                                        </div>
                                                        </div>
                                                        <div class="btn">
                                                        <div class="d-flex align-items-center gap-sm-2 gap-1">Next
                                                            <svg>
                                                            <use href="../assets/svg/icon-sprite.svg#front-arrow">     </use>
                                                            </svg>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="category-product" role="tabpanel" aria-labelledby="category-product-tab">
                                                    <div class="sidebar-body">
                                                    <form>
                                                        <div class="row g-lg-4 g-3">
                                                        <div class="col-12">
                                                            <div class="row g-3">
                                                            <div class="col-sm-6">
                                                                <div class="row g-2"> 
                                                                <div class="col-12">
                                                                    <label class="form-label m-0" for="validationDefault04">Add Category</label>
                                                                </div>
                                                                <div class="col-12">
                                                                    <select class="form-select" id="validationDefault04" required="">
                                                                    <option selected="" value="">Toys & games</option>
                                                                    <option>Sportswear </option>
                                                                    <option>Jewellery </option>
                                                                    <option>Furniture and Decor</option>
                                                                    <option>Health, Personal Care, and Beauty</option>
                                                                    <option>Auto and Parts </option>
                                                                    <option>Baby Care Products</option>
                                                                    </select>
                                                                    <p class="f-light">A product can be added to a category</p>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="row g-2 product-tag">
                                                                <div class="col-12">
                                                                    <label class="form-label d-block m-0">Add Tag</label>
                                                                </div>
                                                                <div class="col-12">
                                                                    <input name="basic-tags" value="watches, sports, clothes, bottles">
                                                                    <p class="f-light">Products can be tagged</p>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="category-buton"><a class="btn button-primary" href="#!" data-bs-toggle="modal" data-bs-target="#category-pill-modal"><i class="me-2 fa fa-plus"> </i>Create New Category </a></div>
                                                                <div class="modal fade" id="category-pill-modal" tabindex="-1" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h3 class="modal-title fs-5">Create new category</h3>
                                                                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body custom-input"> 
                                                                        <div class="create-category">
                                                                        <div>
                                                                            <label class="form-label" for="categoryName">Category Name <span class="txt-danger"> *</span></label>
                                                                            <input class="form-control m-0" id="categoryName" type="text" required="">
                                                                            <div class="toolbar-box">
                                                                            <div id="toolbar3"><span class="ql-formats">
                                                                                <select class="ql-size"></select></span><span class="ql-formats">
                                                                                <button class="ql-bold">Bold </button>
                                                                                <button class="ql-italic">Italic </button>
                                                                                <button class="ql-underline">underline</button>
                                                                                <button class="ql-strike">Strike </button></span><span class="ql-formats">
                                                                                <button class="ql-list" value="ordered">List </button>
                                                                                <button class="ql-list" value="bullet"> </button>
                                                                                <button class="ql-indent" value="-1"> </button>
                                                                                <button class="ql-indent" value="+1"></button></span><span class="ql-formats">
                                                                                <button class="ql-link"></button>
                                                                                <button class="ql-image"></button>
                                                                                <button class="ql-video"></button></span></div>
                                                                            <div id="editor3"></div>
                                                                            </div>
                                                                        </div>
                                                                        <p class="f-light">Improve product visibility by adding a compelling description.</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button class="btn btn-light" type="button" data-bs-dismiss="modal">Cancel</button>
                                                                        <button class="btn btn-primary" type="button">Add</button>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12"> 
                                                            <div class="row g-3">
                                                            <div class="col-sm-6">
                                                                <div class="row">
                                                                <div class="col-12">
                                                                    <label class="form-label" for="publishStatus">Publish Status</label>
                                                                    <select class="form-select" id="publishStatus" required="">
                                                                    <option selected="" value="">Publish</option>
                                                                    <option>Drafts</option>
                                                                    <option>Unpublish</option>
                                                                    </select>
                                                                    <p class="f-light">Choose the status</p>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="row">
                                                                <div class="col-12">
                                                                    <label class="form-label" for="datetime-local1">Publish Date & Time</label>
                                                                    <div class="input-group flatpicker-calender product-date">
                                                                    <input class="form-control" id="datetime-local1" type="date">
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <div class="product-buttons">
                                                        <div class="btn">
                                                            <div class="d-flex align-items-center gap-sm-2 gap-1">
                                                            <svg>
                                                                <use href="../assets/svg/icon-sprite.svg#back-arrow"></use>
                                                            </svg>Previous
                                                            </div>
                                                        </div>
                                                        <div class="btn">
                                                            <div class="d-flex align-items-center gap-sm-2 gap-1">Next
                                                            <svg>
                                                                <use href="../assets/svg/icon-sprite.svg#front-arrow"></use>
                                                            </svg>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </form>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="pricings" role="tabpanel" aria-labelledby="pricings-tab">
                                                    <div class="sidebar-body">
                                                    <form class="price-wrapper">
                                                        <div class="row g-3 custom-input">
                                                        <div class="col-sm-6"> 
                                                            <label class="form-label" for="initialCost">Initial cost <span class="txt-danger">*</span></label>
                                                            <input class="form-control" id="initialCost" type="number">
                                                        </div>
                                                        <div class="col-sm-6"> 
                                                            <label class="form-label" for="sellingPrice">Selling price <span class="txt-danger">*</span></label>
                                                            <input class="form-control" id="sellingPrice" type="number">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="form-label">Choose your currency</label>
                                                            <select class="form-select" aria-label="Default select example">
                                                            <option selected="">Dollar $</option>
                                                            <option value="1">Euro €</option>
                                                            <option value="2">Rupees ₹</option>
                                                            <option value="3">British pounds £</option>
                                                            <option value="4">Russian Ruble ₽</option>
                                                            <option value="5">Japanese Yen ¥</option>
                                                            <option value="6">Singapore Dollar S$</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6"> 
                                                            <label class="form-label" for="productStock1">Product stocks<span class="txt-danger">*</span></label>
                                                            <input class="form-control" id="productStock1" type="number">
                                                        </div>
                                                        <div class="col-12">
                                                            <label class="form-label">Types of product discount<i class="icon-help-alt ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Choose the kind of discount that will be used on that particular item."></i></label>
                                                            <ul class="radio-wrapper"> 
                                                            <li> 
                                                                <input class="form-check-input" id="radio-icon" type="radio" name="radio5" value="option5">
                                                                <label class="form-check-label" for="radio-icon"><span>Fixed Price</span></label>
                                                            </li>
                                                            <li> 
                                                                <input class="form-check-input" id="radio-icon4" type="radio" name="radio5" value="option5" checked="">
                                                                <label class="form-check-label" for="radio-icon4"><span>BOGO(Buy one, Get one)</span></label>
                                                            </li>
                                                            <li> 
                                                                <input class="form-check-input" id="radio-icon5" type="radio" name="radio5" value="option5">
                                                                <label class="form-check-label" for="radio-icon5"><span>Seasonal or holiday discount</span></label>
                                                            </li>
                                                            <li> 
                                                                <input class="form-check-input" id="radio-icon6" type="radio" name="radio5" value="option5">
                                                                <label class="form-check-label" for="radio-icon6"><span>Percentage-based discount(%)</span></label>
                                                            </li>
                                                            <li> 
                                                                <input class="form-check-input" id="radio-icon7" type="radio" name="radio5" value="option5">
                                                                <label class="form-check-label" for="radio-icon7"><span>Volume or bulk discount</span></label>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                        </div>
                                                        <div class="product-buttons">
                                                        <div class="btn">
                                                            <div class="d-flex align-items-center gap-sm-2 gap-1">
                                                            <svg>
                                                                <use href="../assets/svg/icon-sprite.svg#back-arrow"></use>
                                                            </svg>Previous
                                                            </div>
                                                        </div>
                                                        <div class="btn">
                                                            <div class="d-flex align-items-center gap-sm-2 gap-1">Next
                                                            <svg>
                                                                <use href="../assets/svg/icon-sprite.svg#front-arrow">   </use>
                                                            </svg>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </form>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="advance-product" role="tabpanel" aria-labelledby="advance-product-tab">
                                                    <div class="sidebar-body advance-options">
                                                    <ul class="nav nav-tabs border-tab mb-0" id="advance-option-tab" role="tablist">
                                                        <li class="nav-item"><a class="nav-link active" id="manifest-option-tab" data-bs-toggle="tab" href="#manifest-option" role="tab" aria-controls="manifest-option" aria-selected="true">Inventory</a></li>
                                                        <li class="nav-item"><a class="nav-link" id="additional-option-tab" data-bs-toggle="tab" href="#additional-option" role="tab" aria-controls="additional-option" aria-selected="false">Additional Options</a></li>
                                                        <li class="nav-item"><a class="nav-link" id="dropping-option-tab" data-bs-toggle="tab" href="#dropping-option" role="tab" aria-controls="dropping-option" aria-selected="false">Shipping</a></li>
                                                    </ul>
                                                    <div class="tab-content" id="advance-option-tabContent">
                                                        <div class="tab-pane fade show active" id="manifest-option" role="tabpanel" aria-labelledby="manifest-option-tab">
                                                        <div class="meta-body"> 
                                                            <form id="advance-tab">
                                                            <div class="row g-3 custom-input">
                                                                <div class="col-sm-6">
                                                                <label class="form-label">Stock Availability</label>
                                                                <select class="form-select" aria-label="Default select example">
                                                                    <option selected="">In stock</option>
                                                                    <option value="1">Out of stock</option>
                                                                    <option value="2">Pre-order</option>
                                                                </select>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                <label class="form-label">Low Stock</label>
                                                                <select class="form-select" aria-label="Default select example">
                                                                    <option selected="">Low Stock (5 or less)</option>
                                                                    <option value="1">Low Stock (10 or less)</option>
                                                                    <option value="2">Low Stock (20 or less)</option>
                                                                    <option value="2">Low Stock (25 or less)</option>
                                                                    <option value="2">Low Stock (30 or less)</option>
                                                                </select>
                                                                </div>
                                                                <div class="col-lg-3 col-sm-6">
                                                                <label class="form-label" for="exampleFormControlInput1">SKU <span class="txt-danger">*</span></label>
                                                                <input class="form-control" id="exampleFormControlInput1" type="text">
                                                                </div>
                                                                <div class="col-lg-3 col-sm-6">
                                                                <label class="form-label" for="exampleFormControlInputa">Stock Quantity <span class="txt-danger">*</span></label>
                                                                <input class="form-control" id="exampleFormControlInputa" type="number" value="7" min="0">
                                                                </div>
                                                                <div class="col-lg-3 col-sm-6"> 
                                                                <label class="form-label" for="exampleFormControlInputb">Restock Date <span class="txt-danger">*</span></label>
                                                                <input class="form-control" id="exampleFormControlInputb" type="number">
                                                                </div>
                                                                <div class="col-lg-3 col-sm-6"> 
                                                                <label class="form-label" for="exampleFormControlInputc">Pre-Order <span class="txt-danger">*</span></label>
                                                                <input class="form-control" id="exampleFormControlInputc" type="number">
                                                                </div>
                                                                <div class="col-12"> 
                                                                <label class="form-label">Allow Backorders</label>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" id="gridCheck" type="checkbox">
                                                                    <label class="form-check-label m-0" for="gridCheck">This is a digital Product</label>
                                                                    <p class="f-light">Decide if the product is a digital or physical item. Shipping may be necessary for real-world items.</p>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-buttons"> 
                                                                <div class="btn"> 
                                                                <div class="d-flex align-items-center gap-sm-2 gap-1">
                                                                    <svg>
                                                                    <use href="../assets/svg/icon-sprite.svg#back-arrow"></use>
                                                                    </svg>Previous
                                                                </div>
                                                                </div>
                                                                <div class="btn">
                                                                <div class="d-flex align-items-center gap-sm-2 gap-1">Next
                                                                    <svg>
                                                                    <use href="../assets/svg/icon-sprite.svg#front-arrow"></use>
                                                                    </svg>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </form>
                                                        </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="additional-option" role="tabpanel" aria-labelledby="additional-option-tab">
                                                        <div class="meta-body">
                                                            <form>
                                                            <div class="row g-3"> 
                                                                <div class="col-12"> 
                                                                <div class="row g-3">
                                                                    <div class="col-sm-6">
                                                                    <div class="row custom-input">
                                                                        <div class="col-12">
                                                                        <label class="form-label" for="tagTitle">Additional Tag Title</label>
                                                                        </div>
                                                                        <div class="col-12">
                                                                        <input class="form-control" id="tagTitle" type="text">
                                                                        <p class="f-light">Add a new tag title. Keywords should be simple and accurate.</p>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                    <div class="row product-tag">
                                                                        <label class="form-label col-12">Specific Tags</label>
                                                                        <div class="col-12"> 
                                                                        <input id="specificTag" name="basic-tags1" value="watches, sports, clothes, bottles">
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                        <label class="form-label col-12">Additional Description</label>
                                                                        <div class="toolbar-box">
                                                                            <div id="toolbar4"><span class="ql-formats">
                                                                                <select class="ql-size"></select></span><span class="ql-formats">
                                                                                <button class="ql-bold">Bold </button>
                                                                                <button class="ql-italic">Italic </button>
                                                                                <button class="ql-underline">underline</button>
                                                                                <button class="ql-strike">Strike </button></span><span class="ql-formats">
                                                                                <button class="ql-list" value="ordered">List </button>
                                                                                <button class="ql-list" value="bullet"> </button>
                                                                                <button class="ql-indent" value="-1"> </button>
                                                                                <button class="ql-indent" value="+1"></button></span><span class="ql-formats">
                                                                                <button class="ql-link"></button>
                                                                                <button class="ql-image"></button>
                                                                                <button class="ql-video"></button></span></div>
                                                                            <div id="editor4"></div>
                                                                        </div>
                                                                        <p class="f-light">Enhance your SEO ranking with an added tag description for the product.</p>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-buttons">
                                                                <div class="btn">
                                                                <div class="d-flex align-items-center gap-sm-2 gap-1">
                                                                    <svg>
                                                                    <use href="../assets/svg/icon-sprite.svg#back-arrow"></use>
                                                                    </svg>Previous
                                                                </div>
                                                                </div>
                                                                <div class="btn">
                                                                <div class="d-flex align-items-center gap-sm-2 gap-1">Next
                                                                    <svg>
                                                                    <use href="../assets/svg/icon-sprite.svg#front-arrow"></use>
                                                                    </svg>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </form>
                                                        </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="dropping-option" role="tabpanel" aria-labelledby="dropping-option-tab">
                                                        <div class="meta-body">
                                                            <form>
                                                            <div class="row g-3 custom-input">
                                                                <div class="col-12">
                                                                <div class="row gx-xl-3 gx-md-2 gy-md-0 g-2">
                                                                    <div class="col-12">
                                                                    <label class="form-label" for="exampleFormControlInput1">Where can I pick up my order?</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-6">
                                                                    <input class="form-control" id="inputZip" type="number" placeholder="Zip code (10001)">
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-6">
                                                                    <input class="form-control" id="inputCity" type="text" placeholder="City">
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                    <select class="form-select" id="inputState">
                                                                        <option selected="">State</option>
                                                                        <option>Gujarat</option>
                                                                        <option>Punjab</option>
                                                                        <option>Himachal pradesh</option>
                                                                        <option>Goa </option>
                                                                        <option>Sikkim </option>
                                                                        <option>Telangana</option>
                                                                    </select>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <div class="col-12">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                    <label class="form-label" for="exampleFormControlInput1">Weight (kg)</label><i class="icon-help-alt ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="set proper weight for product items."></i>
                                                                    </div>
                                                                    <div class="col-12">
                                                                    <input class="form-control" id="inputCitya" type="number">
                                                                    <p class="f-light">Decide if the product is a digital or physical item. Shipping may be necessary for real-world items.</p>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <div class="col-12">
                                                                <div class="row gx-xl-3 gx-md-2 gy-md-0 g-2">
                                                                    <div class="col-12">
                                                                    <label class="form-label" for="exampleFormControlInput1">Dimensions </label><i class="icon-help-alt ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="set proper length/width and height for product items."></i>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-6"> 
                                                                    <input class="form-control" id="inputCityb" type="number" placeholder="Length[l]">
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-6"> 
                                                                    <input class="form-control" id="inputCityc" type="number" placeholder="Width[w]">
                                                                    </div>
                                                                    <div class="col-md-4"> 
                                                                    <input class="form-control" id="inputCityd" type="number" placeholder="Height[h]">
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <div class="col-12">
                                                                <div class="row"> 
                                                                    <div class="col-12">
                                                                    <label class="form-label" for="exampleFormControlInput1">Shipping Class</label>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                    <select class="form-select" id="inputState1">
                                                                        <option selected="">Basic Shipping</option>
                                                                        <option>Expedited Shipping</option>
                                                                        <option>International Shipping</option>
                                                                        <option>Free Shipping</option>
                                                                        <option>Same-Day or Next-Day Shipping</option>
                                                                        <option>Flat Rate Shipping</option>
                                                                        <option>Local Pickup </option>
                                                                    </select>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-buttons">
                                                                <div class="btn">
                                                                <div class="d-flex align-items-center gap-sm-2 gap-1">
                                                                    <svg>
                                                                    <use href="../assets/svg/icon-sprite.svg#back-arrow"></use>
                                                                    </svg>Previous 
                                                                </div>
                                                                </div>
                                                                <div class="btn">
                                                                <div class="d-flex align-items-center gap-sm-2 gap-1">Submit
                                                                    <svg>
                                                                    <use href="../assets/svg/icon-sprite.svg#front-arrow"></use>
                                                                    </svg>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </form>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div> -->
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