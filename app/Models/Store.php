<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;




protected $fillable = [
        'store_business_name',
        'date',
        'stored_by',
        'area_square_foot',
        'site_address',
        'zip_code',
        'lease_asking_rent',
        'proposed_nnn',
        'details',
        'site_rank',
        'site_condition',
        'map_location_link',
        'franchise_id',
        'cityid',
        'stateid',
        'buy_and_lease',
        'country_id',
    ];





 public function Franchise()
    {
        return $this->belongsTo(Franchise::class);
    }

 public function status()
    {
        return $this->belongsTo(StoreStatus::class,'store_status_id');
    }



 }
