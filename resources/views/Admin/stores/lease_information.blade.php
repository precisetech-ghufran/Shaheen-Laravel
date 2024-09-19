 
                                                        <div class="meta-body">
 <div class="card"> 
                    <div class="card-header d-block d-md-flex justify-content-between">
                      <h5>Edit Store {{$store->store_business_name}}</h5>
                      <div class="d-flex flex-wrap gap-2 mt-3 mt-md-0">
                   
                       <!--  <a class="btn btn-success" href="{{ route('stores.index') }}">
                            View Store
                        </a> -->
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row g-xl-5 g-3">
                        <div class="col-sm-12">
                           
    <div class="row">
        <div class="form-group col-md-4">
            <label class="red">Proposed Business *</label>
            <select name="proposed_site_id" class="form-control">
                <option value="">Select Proposed Business</option>
                <option value="13">Sample Content</option>
            </select>
            <span class="text-danger">{{ $errors->first('proposed_site_id') }}</span>
        </div>

        <div class="form-group col-md-4">
            <label>Lease Date</label>
            <input type="text" id="date_added" name="date_added" value="09-18-2024" class="form-control" readonly placeholder="Select Lease Date">
            <span class="text-danger">{{ $errors->first('date_added') }}</span>
        </div>

        <div class="form-group col-md-4">
            <label>Tenant</label>
            <select name="tenant_id" class="form-control">
                <option value="">Select Tenant</option>
                <option value="1">HANGRY JO’S HOT CHICKEN</option>
                <option value="2">ROSEDALE HOT CHICKEN LLC</option>
            </select>
            <span class="text-danger">{{ $errors->first('tenant_id') }}</span>
        </div>
    </div>

<br/>
    <div class="row">
        <div class="form-group col-md-4">
            <label>Tenant Realtor / Broker</label>
            <select name="tenant_realtor_id" class="form-control">
                <option value="">Select Tenant Realtor</option>
                <option value="1">RAY KYLE</option>
                <option value="2">GIOFFRE COMMERCIAL REALTY, LLC</option>
            </select>
            <span class="text-danger">{{ $errors->first('tenant_realtor_id') }}</span>
        </div>

        <div class="form-group col-md-4">
            <label>Landlord</label>
            <select name="landlord_id" class="form-control">
                <option value="">Select Landlord</option>
                <option value="1">ADAM</option>
                <option value="2">WILMINGTON AVE LLC</option>
            </select>
            <span class="text-danger">{{ $errors->first('landlord_id') }}</span>
        </div>

        <div class="form-group col-md-4">
            <label>Landlord Realtor / Broker</label>
            <select name="landlord_realtor_id" class="form-control">
                <option value="">Select Landlord Realtor</option>
                <option value="1">RAY KYLE</option>
                <option value="2">GIOFFRE COMMERCIAL REALTY, LLC</option>
            </select>
            <span class="text-danger">{{ $errors->first('landlord_realtor_id') }}</span>
        </div>
    </div>

   <br/>
    <div class="row">
        <div class="form-group col-md-4">
            <label>Total Sq Ft Lease Area</label>
            <input type="text" name="total_sq_ft_lease_area" class="form-control" placeholder="Enter Lease Area">
            <span class="text-danger">{{ $errors->first('total_sq_ft_lease_area') }}</span>
        </div>

        <div class="form-group col-md-4">
            <label>Lease Duration</label>
            <input type="text" name="lease_duration" class="form-control" placeholder="Enter Lease Duration">
            <span class="text-danger">{{ $errors->first('lease_duration') }}</span>
        </div>

        <div class="form-group col-md-4">
            <label>On Site Dining Seats</label>
            <input type="text" name="on_site_dining_seats" class="form-control" placeholder="Enter Dining Seats">
            <span class="text-danger">{{ $errors->first('on_site_dining_seats') }}</span>
        </div>
    </div>

 <br/>
    <div class="row">
        <div class="form-group col-md-4">
            <label>Security Deposit</label>
            <input type="text" name="security_deposit" class="form-control" placeholder="Enter Security Deposit">
            <span class="text-danger">{{ $errors->first('security_deposit') }}</span>
        </div>

        <div class="form-group col-md-4">
            <label>Monthly Tax Charge</label>
            <input type="text" name="monthly_tax_charge" class="form-control" placeholder="Enter Monthly Tax Charge">
            <span class="text-danger">{{ $errors->first('monthly_tax_charge') }}</span>
        </div>

        <div class="form-group col-md-4">
            <label>Monthly Common Area Maintenance Charge</label>
            <input type="text" name="monthly_common_area_maintenance_charge" class="form-control" placeholder="Enter Common Area Maintenance Charge">
            <span class="text-danger">{{ $errors->first('monthly_common_area_maintenance_charge') }}</span>
        </div>
    </div>

  <br/>
    <div class="row">
        <div class="form-group col-md-4">
            <label>Annual Rent Increase Percent</label>
            <input type="text" name="annual_rent_increase_percent" class="form-control" placeholder="Enter Rent Increase Percent">
            <span class="text-danger">{{ $errors->first('annual_rent_increase_percent') }}</span>
        </div>

        <div class="form-group col-md-4">
            <label>Initial Rent Deposit</label>
            <input type="text" name="rent_deposit" class="form-control" placeholder="Enter Initial Rent Deposit">
            <span class="text-danger">{{ $errors->first('rent_deposit') }}</span>
        </div>

        <div class="form-group col-md-4">
            <label>Base Rent</label>
            <input type="text" name="base_rent" class="form-control" placeholder="Enter Base Rent">
            <span class="text-danger">{{ $errors->first('base_rent') }}</span>
        </div>
    </div>

    <br/>
    <div class="row">
        <div class="form-group col-md-4">
            <label>Total NNN</label>
            <input type="text" name="total_nnn" class="form-control" placeholder="Enter Total NNN">
            <span class="text-danger">{{ $errors->first('total_nnn') }}</span>
        </div>

        <div class="form-group col-md-4">
            <label>Monthly Rent</label>
            <input type="text" name="monthly_rent" class="form-control" placeholder="Enter Monthly Rent">
            <span class="text-danger">{{ $errors->first('monthly_rent') }}</span>
        </div>

        <div class="form-group col-md-4">
            <label>Insurance</label>
            <input type="text" name="insurance" class="form-control" placeholder="Enter Insurance Amount">
            <span class="text-danger">{{ $errors->first('insurance') }}</span>
        </div>
    </div>
<br/>
    <div class="row">
        <div class="form-group col-md-4">
            <label>Lease Guarantee</label>
            <input type="text" name="lease_guarantee" class="form-control" placeholder="Enter Lease Guarantee">
            <span class="text-danger">{{ $errors->first('lease_guarantee') }}</span>
        </div>

        <div class="form-group col-md-4">
            <label>Lease Guaranteed By</label>
            <input type="text" name="lease_guaranteed_by" class="form-control" placeholder="Enter Lease Guarantor">
            <span class="text-danger">{{ $errors->first('lease_guaranteed_by') }}</span>
        </div>

        <div class="form-group col-md-4">
            <label>Details</label>
            <textarea name="details" class="form-control" placeholder="Enter Details"></textarea>
            <span class="text-danger">{{ $errors->first('details') }}</span>
        </div>
    </div>
<br/>
    <input type="hidden" name="lease_signed_id" value="">
        </form>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
          