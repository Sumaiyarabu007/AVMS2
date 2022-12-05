<?php

namespace App\Http\Controllers;



use App\Models\Requestlist;
use App\Models\User;
use App\Models\Driverlist;
use App\Models\FuelingRecord;
use App\Models\Jeeplist;
use App\Models\Infolist;
use App\Models\Tonlist;
use App\Models\Pickuplist;
use App\Models\SheduleRequest;
use App\Models\VdraRecord;
use App\Models\Vehicle;
use PDF;
use Auth;




use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MtncoController extends Controller
{

    //Vehical

    public function vehicleList(Request $request, $type){

        $data = Vehicle::where('v_type',$type)
        ->where(function ($q) use ($request){
            if(isset($request->v_id)){
               $q->where('v_id', 'LIKE', '%' . $request->v_id. '%');
            }
        })->get();

        if($type=='jeep'){
            return view('mtnco.jeeplist',compact('data'));
        }elseif($type=='3ton'){
            return view('mtnco.tonlist',compact('data'));

        }elseif($type=='pickup'){

            return view('mtnco.pickuplist',compact('data'));

        }else{
            return redirect()->back();
        }


    }

    //add vehicel

    public function vehicleAdd($type){

        if($type=='jeep'){
            $data=user::all();
            return view("mtnco.addjeep",compact("data"));
        }elseif($type=='3ton'){
            $data=user::all();
            return view("mtnco.addton",compact("data"));

        }elseif($type=='pickup'){

            $data=user::all();
            return view("mtnco.addpickup",compact("data"));

        }else{
            return redirect()->back();
        }

    }

 //jeeplist
    public function jeeplist()
    {
        $data=user::all();
        return view("mtnco.jeep3list",compact("data"));
    }

    public function getjeep()
    {
        $data=user::all();
        return view("mtnco.addjeep",compact("data"));
    }

    public function uploadjeep(Request $request)
    {
        $data= new Vehicle;

        $data->v_id =  $request->v_id;
        $data->v_name =$request->v_name;
        $data->v_type ='jeep';
        $data->status ='active';
        $data->license_number =$request->license_number;
        $data->authorized_mileage =$request->authorized_mileage;
        $data->authorized_fuel =$request->authorized_fuel;
        $data->collection_date =$request->collection_date;
        $data->last_maintenance_date =$request->last_maintenance_date;
        $data->last_refuelling_date =$request->last_refuelling_date;
        $data->next_maintenance_date = $request->next_maintenance_date;
        $data->maintenance_km_limit = $request->maintenance_km_limit;
        $data->refuling_limit = $request->refuling_limit;
        $data->milage_per_leter = $request->milage_per_leter;
        $data->save();

        $addFuelingRecord = new FuelingRecord();
        $addFuelingRecord->vehicle_id = $data->id;
        $addFuelingRecord->fuel_amount = $request->authorized_fuel;
        $addFuelingRecord->date = $request->last_refuelling_date;
        $addFuelingRecord->save();

        return redirect() ->back() ;
    }

    public function showjeep(Request $request)
    {
        // return $request;
        $data=Vehicle::where('v_type','jeep')->where(function ($q) use ($request){
            if(isset($request->v_id)){
               $q->where('v_id', 'LIKE', '%' . $request->v_id. '%');
            }
        })->get();

        return view("mtnco.jeeplist",compact("data"));
    }


//

//tonlist
public function tonlist()
{
    $data=user::all();
    return view("mtnco.tonlist",compact("data"));
}

public function getton()
{
    $data=user::all();
    return view("mtnco.add3ton",compact("data"));
}

public function uploadton(Request $request)
{
    $data= new Vehicle;

    $data->v_id =  $request->v_id;
    $data->v_name =$request->v_name;
    $data->v_type ='3ton';
    $data->status ='active';
    $data->license_number =$request->license_number;
    $data->authorized_mileage =$request->authorized_mileage;
    $data->authorized_fuel =$request->authorized_fuel;
    $data->collection_date =$request->collection_date;
    $data->last_maintenance_date =$request->last_maintenance_date;
    $data->last_refuelling_date =$request->last_refuelling_date;
    $data->next_maintenance_date = $request->next_maintenance_date;
    $data->maintenance_km_limit = $request->maintenance_km_limit;
    $data->refuling_limit = $request->refuling_limit;
    $data->milage_per_leter = $request->milage_per_leter;
    $data->save();

    $addFuelingRecord = new FuelingRecord();
    $addFuelingRecord->vehicle_id = $data->id;
    $addFuelingRecord->fuel_amount = $request->authorized_fuel;
    $addFuelingRecord->date = $request->last_refuelling_date;
    $addFuelingRecord->save();
    return redirect() ->back() ;
}

public function showton(Request $request)
{
    $data=Vehicle::where('v_type','3ton')->where(function ($q) use ($request){
        if(isset($request->v_id)){
           $q->where('v_id', 'LIKE', '%' . $request->v_id. '%');
        }
    })->get();
    return view("mtnco.tonlist",compact("data"));
}
//

//pickuplist
public function pickuplist()
{
    $data=user::all();
    return view("mtnco.pickuplist",compact("data"));
}

public function getpickup()
{
    $data=user::all();
    return view("mtnco.addpickup",compact("data"));
}

public function uploadpickup(Request $request)
{
    $data= new Vehicle;

    $data->v_id =  $request->v_id;
    $data->v_name =$request->v_name;
    $data->v_type ='pickup';
    $data->status ='active';
    $data->license_number =$request->license_number;
    $data->authorized_mileage =$request->authorized_mileage;
    $data->authorized_fuel =$request->authorized_fuel;
    $data->collection_date =$request->collection_date;
    $data->last_maintenance_date =$request->last_maintenance_date;
    $data->last_refuelling_date = $request->last_refuelling_date;
    $data->next_maintenance_date = $request->next_maintenance_date;
    $data->maintenance_km_limit = $request->maintenance_km_limit;
    $data->refuling_limit = $request->refuling_limit;
    $data->milage_per_leter = $request->milage_per_leter;
    $data->save();

    $addFuelingRecord = new FuelingRecord();
    $addFuelingRecord->vehicle_id = $data->id;
    $addFuelingRecord->fuel_amount = $request->authorized_fuel;
    $addFuelingRecord->date = $request->last_refuelling_date;
    $addFuelingRecord->save();


    return redirect() ->back() ;
}

public function showpickup(Request $request)
{
    $data=Vehicle::where('v_type','pickup')->where(function ($q) use ($request){
        if(isset($request->v_id)){
           $q->where('v_id', 'LIKE', '%' . $request->v_id. '%');
        }
    })->get();
    return view("mtnco.pickuplist",compact("data"));
}
//







    public function jeep1()
    {
        $data=user::all();
        return view("mtnco.jeep1",compact("data"));
    }

    public function addjeep()
    {
        $data=user::all();
        return view("mtnco.addjeep",compact("data"));
    }

    public function addinfo()
    {
        $data=user::all();
        return view("mtnco.addinfo",compact("data"));
    }

    public function addvehicle()
    {
        $data=user::all();
        return view("mtnco.addvehicle",compact("data"));
    }


 //addinfo
 public function infolist()
 {
     $data=user::all();
     return view("mtnco.infolist",compact("data"));
 }

 public function getinfo()
 {
     $data=user::all();
     return view("mtnco.addinfo",compact("data"));
 }

 public function uploadinfo(Request $request)
 {
     $data= new InfoList;

     $data->date =  $request->date;
     $data->authority =$request->authority;
     $data->destination =$request->destination;
     $data->km_reading =$request->km_reading;
     $data->when_in =$request->when_in;
     $data->when_out =$request->when_out;
     $data->present_fuel =$request->present_fuel;
     $data->comment =$request->comment;
     $data->save();
     return redirect() ->back() ;
 }

 public function showinfo()
 {
     $data=infolist::all();
     return view("mtnco.jeep1",compact("data"));
 }

 //

 //drivers

    public function drivers()
    {
        $data=user::all();
        return view("mtnco.drivers",compact("data"));
    }

    public function getdriver()
    {
        $data=user::all();
        return view("mtnco.adddriver",compact("data"));
    }

    public function uploaddriver(Request $request)
    {
        $data= new DriverList;

        $data->snk_no =  $request->snk_no;
        $data->rank =$request->rank;
        $data->name =$request->name;
        $data->date_of_birth =$request->date_of_birth;
        $data->mobile_number =$request->mobile_number;
        $data->license_expire_date =$request->license_expire_date;
        $data->able_to_drive =$request->able_to_drive;
        $data->experience_duration =$request->experience_duration;
        $data->comment =$request->comment;
        $data->save();
        return redirect() ->back() ;
    }

    public function showdriver(Request $request)
    {
        $data=driverlist::where(function ($q) use ($request){

            if(isset($request->search_value)){
                $q->where('snk_no','LIKE', '%' . $request->search_value. '%');
                $q->orWhere('rank','LIKE', '%' . $request->search_value. '%');
                $q->orWhere('name','LIKE', '%' . $request->search_value. '%');
                $q->orWhere('mobile_number','LIKE', '%' . $request->search_value. '%');
            }
        })->get();
        return view("mtnco.drivers",compact("data"));
    }

//


//requestlist

    public function requestlist()
    {
        $data=user::all();
        return view("mtnco.requestlist",compact("data"));
    }

    public function getrequest()
    {
        $data=user::all();
        $vhecleList = Vehicle::all();
        $driverList = Driverlist::all();
        return view("mtnco.addrequest",compact("data","vhecleList","driverList"));
    }

    public function upload(Request $request)
    {

        $vehicleDetails = Vehicle::where('id',$request->vehicle_id)->first();


        // return $request;
        $data= new SheduleRequest();

        $data->date =  $request->date;
        $data->vehicle_id =$request->vehicle_id;
        $data->driver_id =$request->driver_id;
        $data->second_seater_name =$request->second_seater_name;
        $data->authority =$request->authority;
        $data->destination =$request->destination;
        $data->present_mileage	 =$vehicleDetails->authorized_mileage;
        $data->km_reading	 =$vehicleDetails->authorized_mileage;
        $data->start_time =$request->start_time;
        $data->probable_end_time =$request->probable_end_time;
        // $data->last_maintenance_date =$request->last_maintenance_date;
        $data->comment =$request->comment;
        $data->present_fuel = $vehicleDetails->authorized_fuel;
        $data->status = 'pending';
        $data->save();
        return redirect() ->back()->with('success','Request Addedd Success') ;
    }

    public function show()
    {
        $pendingData=SheduleRequest::with('vehicle')->where('status','pending')->orderBy('id','DESC')->get();
        $declinedData=SheduleRequest::with('vehicle')->where('status','declined')->orderBy('id','DESC')->get();

        return view("mtnco.requestlist",compact('pendingData','declinedData'));
    }

//


    public function add3ton()
    {
        $data=user::all();
        return view("mtnco.add3ton",compact("data"));
    }

    public function addpickup()
    {
        $data=user::all();
        return view("mtnco.addpickup",compact("data"));
    }

    public function downloadvdra()
    {
        $downloadvdra= Infolist::get();
        $pdf = PDF::loadView('mtnco.downloadvdra',[
            'downloadvdra' => $downloadvdra
        ]);
        //return $pdf->download('vdra.pdf');
        return $pdf -> stream();

    }



    public function editinfo($id)
    {
        $data= infolist::find($id);
        return view("mtnco.editinfo",compact("data"));
    }

    public function edit(Request $request, $id)
    {
        $data= infolist::find($id);
        $data->date =  $request->date;
        $data->authority =$request->authority;
        $data->destination =$request->destination;
        $data->km_reading =$request->km_reading;
        $data->when_in =$request->when_in;
        $data->when_out =$request->when_out;
        $data->present_fuel =$request->present_fuel;
        $data->comment =$request->comment;
        $data->save();
        return redirect() ->back() ;

    }


    public function mtncohome()
    {
        $data=user::all();
        return view("mtnco.mtncohome2",compact("data"));
    }


    public function search(Request $request)
    {
        $search=$request->query;
        $data=jeeplist::where('v_id','Like','%,'.$search.'%')->get();
        return view("mtnco.jeeplist",compact("data"));
    }

    public function scheduleList(){


        $scheduleData = SheduleRequest::with('vehicle')->where('status','approved')->orderBy('id','DESC')->get();

        return view('mtnco.schedule',compact('scheduleData'));
    }

    public function predictions(){

        $startDate = date('Y-m-01');
        $endDate = date('Y-m-t');

        $getJeepLists = Vehicle::all();

        // ->get();

        $monthlyUsed =  Vehicle::select('vehicles.*','vdra_records.date_vdra', DB::raw('SUM(shedule_km_ride_vdra) as total_km'))
        ->join('vdra_records', 'vehicles.id', '=', 'vdra_records.vehicle_id_vdra')
        ->where(DB::raw('date(vdra_records.date_vdra)'),'>=',$startDate)
        ->where(DB::raw('date(vdra_records.date_vdra)'),'<=',$endDate)
        ->groupBy('vehicles.id','vdra_records.date_vdra')
        ->orderBy('total_km','desc')
        ->get();



    //    return $test = Vehicle::all();


        // return $getJeepLists;
        return view('mtnco.predictions',compact('monthlyUsed','getJeepLists'));
    }


    public function vdraRecordAdd($id){

        $data=user::all();

        $row = SheduleRequest::find($id);

        return view('mtnco.addvdrar',compact('row','data'));



    }

    public function addVdraRecordStore(Request $request,$id){

        // $request;


       $sheduleDetails = SheduleRequest::find($id);
       $vehicleDetails = Vehicle::find($sheduleDetails->vehicle_id);

       $shedule_km_ride_vdra = ($request->km_reading_vdra - $vehicleDetails->authorized_mileage);

    //    $shedule_fuel_spend_vdra = ($vehicleDetails->authorized_fuel - $request->present_fuel_vdra );
       $shedule_fuel_spend_vdra = ($shedule_km_ride_vdra / $vehicleDetails->milage_per_leter);
       $shedule_fuel_spend_vdra = intval($shedule_fuel_spend_vdra);
        $present_fuelVdra = $vehicleDetails->authorized_fuel - $shedule_fuel_spend_vdra;


        // return $request;
        $data= new VdraRecord();

        $data->date_vdra =  $sheduleDetails->date;
        $data->vehicle_id_vdra = $sheduleDetails->vehicle_id;
        $data->shedule_id_vdra = $id;
        $data->when_check_in_vdra = $request->when_check_in_vdra;
        $data->when_check_out_vdra = $request->when_check_out_vdra;
        $data->km_reading_vdra = $request->km_reading_vdra;
        $data->present_fuel_vdra = $present_fuelVdra;
        $data->shedule_km_ride_vdra = $shedule_km_ride_vdra??0;
        $data->shedule_fuel_spend_vdra =  $shedule_fuel_spend_vdra??0;
        $data->status = 'good';
        $data->save();

        $updateVehicleData = Vehicle::find($sheduleDetails->vehicle_id);
        $updateVehicleData->authorized_mileage = $request->km_reading_vdra;
        $updateVehicleData->authorized_fuel = $present_fuelVdra;
        $updateVehicleData->save();

        return redirect() ->back()->with('success','VDRA Addedd Success') ;

    }


    public function updateVehicle(Request $request,$id){

        $update = Vehicle::find($id);
        $update->last_maintenance_date = $request->last_maintenance_date;
        $update->last_refuelling_date = $request->last_refuelling_date;
        $update->next_maintenance_date = $request->next_maintenance_date;
        $update->save();

        return redirect()->back();


    }


    public function vehicleRefueling(Request $request,$id){



        // return $request;

            $getData = Vehicle::where('id',$id)->first();

             $present_refuelingDate = date('Y-m-d',strtotime($request->present_refueling_date));

        if($getData){

            $getKM = VdraRecord::where('vehicle_id_vdra',$id)
            ->where(DB::raw('date(date_vdra)'),'>=',date('Y-m-d',strtotime($getData->last_refuelling_date)))
            ->where(DB::raw('date(date_vdra)'),'<=',date('Y-m-d',strtotime($present_refuelingDate)))
            ->sum('shedule_km_ride_vdra');

            if($getKM > 0 ){

                $milagePerLiter = $getKM /  $request->authorized_fuel;
                $milagePerLiter = intval($milagePerLiter);
                $update = Vehicle::find($id);
                $update->milage_per_leter = intval($milagePerLiter);
                $update->authorized_fuel = $request->authorized_fuel;
                $update->last_refuelling_date = $present_refuelingDate;
                $update->present_refueling_date = $present_refuelingDate;
                $update->save();


                $addFuelingRecord = new FuelingRecord();
                $addFuelingRecord->vehicle_id = $id;
                $addFuelingRecord->fuel_amount = $request->authorized_fuel;
                $addFuelingRecord->date = $present_refuelingDate;
                $addFuelingRecord->save();



            }



        }else{

            return redirect()->back()->with('error','Not Found!');


        }

        return redirect()->back()->with('error','Not Found!');



    }

    public function vehicleMaintanance(Request $request,$id){

        $update = Vehicle::find($id);
        $update->last_maintenance_date = date("Y-m-d",strtotime($request->last_maintenance_date));
        $update->next_maintenance_date = date("Y-m-d",strtotime( $request->next_maintenance_date));
        $update->save();
        return redirect()->back()->with('success','Maintance Successfully !');
    }



}
