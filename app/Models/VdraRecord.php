<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VdraRecord extends Model
{
    use HasFactory;

    public static function milage_per_liter($id){

        $lastData = VdraRecord::where('vehicle_id_vdra',$id)->first();
        if($lastData){
          return  $getmilage = $lastData->shedule_km_ride_vdra / $lastData->shedule_fuel_spend_vdra;

        }else{
            return 0;
        }

    }

    public static function maintenance_date_prediction($id){


        $getDetails = Vehicle::where('id',$id)->first();

        $sumKmSpend = VdraRecord::where('vehicle_id_vdra',$id)->where('date_vdra','>=',date('Y-m-d',strtotime($getDetails->last_maintenance_date)))->sum('shedule_km_ride_vdra');
        $countRow = VdraRecord::where('vehicle_id_vdra',$id)->where('date_vdra','>=',date('Y-m-d',strtotime($getDetails->last_maintenance_date)))->count('id');



        // $sumKmSpend = VdraRecord::where('vehicle_id_vdra',$id)->where('date_vdra','>=',$lastDate)->sum('shedule_km_ride_vdra');


        if($sumKmSpend){


            if($sumKmSpend>0){

            $divideKm = $sumKmSpend / $countRow;

            $getResult = $getDetails->maintenance_km_limit / intval($divideKm);

            $dayResult = intval($getResult);

            $lmdate = Carbon::createFromFormat('Y-m-d', $getDetails->last_maintenance_date);
            $getDateByMilage = $lmdate->addDays($dayResult);

            $getDateByMilageFormat = date('Y-m-d',strtotime($getDateByMilage));

            if($lmdate >  $getDateByMilageFormat){
               return $getDateByMilageFormat;
            }else{
                return $getDetails->next_maintenance_date;

            }

        }
        }else{
            return $getDetails->next_maintenance_date;

        }

    }


    public static function refueling_date_prediction($id){


            $getDetails = Vehicle::where('id',$id)->first();

            $sumShedule_fuel_spend_vdra = VdraRecord::where('vehicle_id_vdra',$id)->where('date_vdra','>=',date('Y-m-d',strtotime($getDetails->last_refuelling_date)))->sum('shedule_fuel_spend_vdra');
            $countRowF = VdraRecord::where('vehicle_id_vdra',$id)->where('date_vdra','>=',date('Y-m-d',strtotime($getDetails->last_refuelling_date)))->count('id');

            if($sumShedule_fuel_spend_vdra){

                if($sumShedule_fuel_spend_vdra>0){

                $divideFPerDay = $sumShedule_fuel_spend_vdra / $countRowF;

                $divideFPerDay =  intval($divideFPerDay);
                $getHaveFuel =  $getDetails->authorized_fuel;
                $getLimitFuel =  $getDetails->refuling_limit;

                $calCulet =  $getHaveFuel /  $divideFPerDay;


                $dayResult = intval($calCulet);

                $lmdate = Carbon::now();
                $getDateByMilage = $lmdate->addDays($dayResult);

                $getDateByMilageFormat = date('Y-m-d',strtotime($getDateByMilage));

                // if($lmdate >  $getDateByMilageFormat){
                //    return $getDateByMilageFormat;
                // }else{
                //     return $lmdate;

                // }

                return $getDateByMilageFormat;


            }

        }else{
            return date('Y-m-d');
        }

    }
}
