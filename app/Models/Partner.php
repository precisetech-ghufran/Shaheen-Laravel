<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    protected $fillable = [
        'partner_name',
        'partner_address',
        'country_id',
        'state_id',
        'city_id',
        'zip_code',
        'county',
        'partner_contact_no',
        'partner_ss_number',
        'driver_license_number',
        'partner_email',
        'partner_nick_name',
        'partner_primary_phone',
        'partner_secondary_phone',
        'notes',
         'image', 
    ];
}
