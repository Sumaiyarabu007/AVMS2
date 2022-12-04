<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Requestlist;
use App\Models\Jeeplist;
use App\Models\Tonlist;
use App\Models\Pickuplist;
use App\Models\Driverlist;
use App\Models\SheduleRequest;
use App\Models\Vehicle;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function user()
    {
        $data=user::all();
        return view("admin.users",compact("data"));
    }

    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }

    //adminjeep
    public function adminjeep(Request $request)
    {
        $data=jeeplist::where(function ($q) use ($request){
            if(isset($request->v_id)){
               $q->where('v_id', 'LIKE', '%' . $request->v_id. '%');
            }
        })->get();
        return view("admin.adminjeep",compact("data"));
    }

    public function showadminjeep(Request $request)
    {
        $data=Vehicle::where('v_type','jeep')->where(function ($q) use ($request){
            if(isset($request->v_id)){
               $q->where('v_id', 'LIKE', '%' . $request->v_id. '%');
            }
        })->get();
        return view("admin.adminjeep",compact("data"));
    }
//

//adminton
public function adminton()
{
    $data=user::all();
    return view("admin.adminton",compact("data"));
}
public function showadminton(Request $request)
{
    $data=Vehicle::where('v_type','3ton')->where(function ($q) use ($request){
        if(isset($request->v_id)){
           $q->where('v_id', 'LIKE', '%' . $request->v_id. '%');
        }
    })->get();
    return view("admin.adminton",compact("data"));
}
//

//
public function adminpickup(Request $request)
{
    $data=Vehicle::where('v_type','pickup')->where(function ($q) use ($request){
        if(isset($request->v_id)){
           $q->where('v_id', 'LIKE', '%' . $request->v_id. '%');
        }
    })->get();
    return view("admin.adminpickup",compact("data"));
}//


    //request
    public function adminrequest()
    {
        $data=user::all();
        return view("admin.adminrequest",compact("data"));
    }

    public function getrequest()
    {
        $data=user::all();
        return view("admin.editrequest",compact("data"));
    }

    public function uploadrequest(Request $request)
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
        $pendingData=SheduleRequest::with('vehicle','driver')->where('status','pending')->orderBy('id','DESC')->get();
        $declinedData=SheduleRequest::with('vehicle','driver')->where('status','declined')->orderBy('id','DESC')->get();

        return view("admin.adminrequest",compact("pendingData",'declinedData'));
    }

    public function editrequest($id)
    {
        $data= requestlist::find($id);
        return view("admin.editrequest",compact("data"));
    }

    public function edit(Request $request)
    {
        $id=$request->id;
        $data= requestlist::find($id);
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

    public function deleterequest($id)
    {
        $data=SheduleRequest::find($id);
        $data->delete();
        return redirect()->back()->with('success','Request Delete Success');
    }

    public function approvedRequest($id){

        $statusApproved = SheduleRequest::find($id);
        $statusApproved->status = 'approved';
        $statusApproved->save();

        return back()->with('success','Request Approved Success');


    }

    public function declinedRequest($id){

        $statusApproved = SheduleRequest::find($id);
        $statusApproved->status = 'declined';
        $statusApproved->save();

        return back()->with('success','Request Declined Success');


    }

    public function adminScheduleList(){

        $scheduleData = SheduleRequest::with('vehicle','driver')->where('status','approved')->orderBy('id','DESC')->get();

        return view('admin.schedule',compact('scheduleData'));
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


        return view('admin.predictions',compact('getJeepLists','monthlyUsed'));
    }

    public function adminDriverList(Request $request)
    {
        $data=driverlist::where(function ($q) use ($request){

            if(isset($request->search_value)){
                $q->where('snk_no','LIKE', '%' . $request->search_value. '%');
                $q->orWhere('rank','LIKE', '%' . $request->search_value. '%');
                $q->orWhere('name','LIKE', '%' . $request->search_value. '%');
                $q->orWhere('mobile_number','LIKE', '%' . $request->search_value. '%');
            }
        })->get();
        return view("admin.drivers",compact("data"));
    }


}
