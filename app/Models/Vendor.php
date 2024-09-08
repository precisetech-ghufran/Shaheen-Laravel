<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $fillable = [
        'vendor_name',
        'vendor_address',
        'state_id',
        'city_id',
        'vendor_zip_code',
        'vendor_county',
        'vendor_group_id',
        'vendor_phone_number',
        'vendor_email',
        'vendor_website',
        'contact_person',
        'notes',
        'customer_service_phone_no',
        'billing_and_payments_phone_no',
    ];

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function vendorGroup()
    {
        return $this->belongsTo(VendorGroup::class);
    }
}
