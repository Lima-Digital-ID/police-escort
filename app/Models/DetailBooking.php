<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailBooking extends Model
{
    use HasFactory;
    public function vehicleType()
    {
        return $this->belongsTo(VehicleType::class);
    }
}
