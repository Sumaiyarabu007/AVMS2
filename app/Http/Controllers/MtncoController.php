<?php

namespace App\Http\Controllers;



use App\Models\Requestlist;
use App\Models\User;
use App\Models\Driverlist;
use App\Models\Jeeplist;
use App\Models\Infolist;
use App\Models\Tonlist;
use App\Models\Pickuplist;
use PDF;
use Auth;




use Illuminate\Http\Request;


class MtncoController extends Controller
{

 //jeeplist   
    public function jeeplist()
    {
        $data=user::all();
        return view("mtnco.jeeplist",compact("data"));
    }

    public function getjeep()
    {
        $data=user::all();
        return view("mtnco.addjeep",compact("data"));
    }

    public function uploadjeep(Request $request)
    {
        $data= new JeepList;

        $data->v_id =  $request->v_id;
        $data->v_name =$request->v_name;
        $data->license_number =$request->license_number;
        $data->authorized_mileage =$request->authorized_mileage;
        $data->authorized_fuel =$request->authorized_fuel;
        $data->collection_date =$request->collection_date;
        $data->last_maintenance_date =$request->last_maintenance_date;
        $data->last_refuelling_date =$request->last_refuelling_date;
        $data->save();
        return redirect() ->back() ;
    }

    public function showjeep()
    {
        $data=jeeplist::all();
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
    $data= new TonList;

    $data->v_id =  $request->v_id;
    $data->v_name =$request->v_name;
    $data->license_number =$request->license_number;
    $data->authorized_mileage =$request->authorized_mileage;
    $data->authorized_fuel =$request->authorized_fuel;
    $data->collection_date =$request->collection_date;
    $data->last_maintenance_date =$request->last_maintenance_date;
    $data->last_refuelling_date =$request->last_refuelling_date;
    $data->save();
    return redirect() ->back() ;
}

public function showton()
{
    $data=tonlist::all();
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
    $data= new PickupList;

    $data->v_id =  $request->v_id;
    $data->v_name =$request->v_name;
    $data->license_number =$request->license_number;
    $data->authorized_mileage =$request->authorized_mileage;
    $data->authorized_fuel =$request->authorized_fuel;
    $data->collection_date =$request->collection_date;
    $data->last_maintenance_date =$request->last_maintenance_date;
    $data->last_refuelling_date =$request->last_refuelling_date;
    $data->save();
    return redirect() ->back() ;
}

public function showpickup()
{
    $data=pickuplist::all();
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

    public function showdriver()
    {
        $data=driverlist::all();
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
        return view("mtnco.addrequest",compact("data"));
    }

    public function upload(Request $request)
    {
        $data= new RequestList;

        $data->date =  $request->date;
        $data->vehicle_type =$request->vehicle_type;
        $data->v_id =$request->v_id;
        $data->drivers_name =$request->drivers_name;
        $data->second_seater_name =$request->second_seater_name;
        $data->authority =$request->authority;
        $data->destination =$request->destination;
        $data->km_reading =$request->km_reading;
        $data->start_time =$request->start_time;
        $data->probable_end_time =$request->probable_end_time;
        $data->last_maintenance_date =$request->last_maintenance_date;
        $data->comment =$request->comment;
        $data->present_fuel = $request->fuel;
        $data->save();
        return redirect() ->back() ;
    }

    public function show()
    {
        $data=requestlist::all();
        return view("mtnco.requestlist",compact("data"));
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
        $search=$request->search;
        $data=jeeplist::where('v_id','Like','%,'.$search.'%')->get();
        return view("mtnco.jeeplist",compact("data"));
    }
   

    



    
    
    
        
  
    
   
   
        
    


   

     
     

   

    
}