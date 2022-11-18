<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Requestlist;
use App\Models\Jeeplist;
use App\Models\Tonlist;
use App\Models\Pickuplist;
use App\Models\Driverlist;


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
        $data=jeeplist::where(function ($q) use ($request){
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
    $data=tonlist::where(function ($q) use ($request){
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
    $data=pickuplist::where(function ($q) use ($request){
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
        $pendingData=requestlist::where('status','pending')->orderBy('id','DESC')->get();
        $declinedData=requestlist::where('status','declined')->orderBy('id','DESC')->get();

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
        $data=requestlist::find($id);
        $data->delete();
        return redirect()->back()->with('success','Request Delete Success');
    }

    public function approvedRequest($id){

        $statusApproved = Requestlist::find($id);
        $statusApproved->status = 'approved';
        $statusApproved->save();

        return back()->with('success','Request Approved Success');


    }

    public function declinedRequest($id){

        $statusApproved = Requestlist::find($id);
        $statusApproved->status = 'declined';
        $statusApproved->save();

        return back()->with('success','Request Declined Success');


    }

    public function adminScheduleList(){

        $scheduleData = Requestlist::where('status','approved')->orderBy('id','DESC')->get();

        return view('admin.schedule',compact('scheduleData'));
    }


}
