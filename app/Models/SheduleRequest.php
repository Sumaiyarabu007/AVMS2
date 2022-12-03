<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SheduleRequest extends Model
{
    use HasFactory;

    public function vehicle(){
     return   $this->hasOne(Vehicle::class,'id','vehicle_id');
    }

    public function driver(){
        return  $this->hasOne(Driverlist::class,'id','driver_id');
    }
}
