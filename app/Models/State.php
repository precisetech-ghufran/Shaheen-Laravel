<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

     protected $fillable = ['name'];

    public function cities()
    {
        return $this->hasMany(City::class);
    }


public function getCities($state_id)
{
    $cities = City::where('state_id', $state_id)->get();
    return response()->json($cities);
}


    
}
