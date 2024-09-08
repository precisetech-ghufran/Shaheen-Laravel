<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Franchise extends Model
{
    use HasFactory;

    protected $fillable = [
        'franchise_name',
        'website',
        'contact_person_name',
        'franchisor_contact_person',
        'construction_contact_person',
        'construction_contact_email',
        'construction_phone_no',
        'training_contact_person',
        'training_contact_email',
        'training_phone_no',
        'opening_contact_person',
        'opening_person_email',
        'opening_person_phone_no',
        'franchise_image',
    ];
}
