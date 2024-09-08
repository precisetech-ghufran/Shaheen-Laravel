<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealtorBrokert extends Model
{
    use HasFactory;


protected $table="realtor_brokerts";

      protected $fillable = [
        'realtor_name',
        'company_name',
        'website',
        'realtor_address',
        'stateid',
        'cityid',
        'realtor_zip_code',
        'realtor_county',
        'realtor_phone_no',
        'contact_person',
        'realtor_email',
    ];
}
