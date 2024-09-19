<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreStatusHistroy extends Model
{
    use HasFactory;


protected $fillable = ['comments', 'updated_date', 'user_id', 'store_id', 'store_status_id'];



 public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    public function storeStatus()
    {
        return $this->belongsTo(StoreStatus::class);
    }





}
