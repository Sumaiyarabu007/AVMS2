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
    public function adminjeep()
    {
        $data=jeeplist::all();
        return view("admin.adminjeep",compact("data"));
    }

    public function showadminjeep()
    {
        $data=jeeplist::all();
        return view("admin.adminjeep",compact("data"));
    }
//

//adminton
public function adminton()
{
    $data=user::all();
    return view("admin.adminton",compact("data"));
}
public function showadminton()
{
    $data=tonlist::all();
    return view("admin.adminton",compact("data"));
}
//

//
public function adminpickup()
{
    $data=pickuplist::all();
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
        $data=requestlist::all();
        return view("admin.adminrequest",compact("data"));
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
        return redirect()->back();
    }


}
