<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Landlord extends Model
{
    use HasFactory;

    protected $table ='landlords';
      protected $fillable = [
        'landlord_name',
        'company_name',
        'website',
        'landlord_address',
        'stateid',
        'cityid',
        'landlord_zip_code',
        'landlord_county',
        'contact_person',
        'landlord_contact_no',
        'landlord_email'
    ];



     public function state()
    {
        return $this->belongsTo(State::class, 'stateid');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'cityid');
    }
}
