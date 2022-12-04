<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    public function vdrarecord(){
        return   $this->hasMany(VdraRecord::class,'vehicle_id_vdra','id');
    }

    public function lastvdrarecord()
    {
        return $this->hasOne(VdraRecord::class)->orderBy('id', 'DESC');
    }
}
