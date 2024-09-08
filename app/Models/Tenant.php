<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;


      protected $fillable = [
        'tenant_name', 
        'company_name', 
        'website', 
        'tenant_address', 
        'stateid', 
        'cityid', 
        'tenant_zip_code', 
        'tenant_county', 
        'contact_person', 
        'tenant_contact_no', 
        'tenant_email',
    ];
}
