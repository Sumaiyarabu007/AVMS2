<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MtncoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get("/",[HomeController::class,"index"]);
Route::get("/redirects",[HomeController::class,"redirects"]);

Route::get("/users",[AdminController::class,"user"]);
Route::get("/adminjeep",[AdminController::class,"adminjeep"]);
Route::get("/adminjeep",[AdminController::class,"showadminjeep"]);
Route::get("/adminjeep1",[AdminController::class,"adminjeep1"]);

Route::get("/adminton",[AdminController::class,"adminton"]);
Route::get("/adminton",[AdminController::class,"showadminton"]);

Route::get("/adminpickup",[AdminController::class,"adminpickup"]);

Route::get("/deleteuser/{id}",[AdminController::class,"deleteuser"]);


//
Route::get("/adminrequest",[AdminController::class,"adminrequest"]);
Route::post("/adminrequest",[MtncoController::class,"uploadrequest"]);
Route::get("/adminrequest",[AdminController::class,"getrequest"]);
Route::post("/editrequest",[AdminController::class,"uploadrequest"]);
Route::get("/adminrequest",[AdminController::class,"show"]);
Route::get("/editrequest/{id}",[AdminController::class,"editrequest"]);
Route::post("/edit",[AdminController::class,"edit"]);
Route::get("/deleterequest/{id}",[AdminController::class,"deleterequest"]);

Route::get("/approved-request/{id}",[AdminController::class,"approvedRequest"]);
Route::get("/declined-request/{id}",[AdminController::class,"declinedRequest"]);
Route::get("/admin-schedule-lists",[AdminController::class,"adminScheduleList"]);


//
// Predictions
Route::get("/admin-predictions",[AdminController::class,"predictions"]);



Route::get("/admin-drivers",[AdminController::class,"adminDriverList"]);

//







Route::get("/jeeplist",[MtncoController::class,"jeeplist"]);
Route::get("/ton",[MtncoController::class,"ton"]);
Route::get("/pickuplist",[MtncoController::class,"pickuplist"]);
Route::get("/jeep1",[MtncoController::class,"jeep1"]);
Route::get("/addjeep",[MtncoController::class,"addjeep"]);
Route::get("/add3ton",[MtncoController::class,"add3ton"]);
Route::get("/addpickup",[MtncoController::class,"addpickup"]);
Route::get("/addvehicle",[MtncoController::class,"addvehicle"]);


//requestlist
Route::get("/requestlist",[MtncoController::class,"requestlist"]);
Route::post("/requestlist",[MtncoController::class,"upload"]);
Route::get("/addrequest",[MtncoController::class,"getrequest"]);
Route::post("/addrequest",[MtncoController::class,"upload"]);
Route::get("/requestlist",[MtncoController::class,"show"]);
//

// Predictions
Route::get("/predictions",[MtncoController::class,"predictions"]);

// schedules
Route::get("/schedule-lists",[MtncoController::class,"scheduleList"]);



// Vehical Route For user
Route::get("/mtnco/vehicle-list/{type}",[MtncoController::class,"vehicleList"]);
Route::get("/mtnco/vehicle-add/{type}",[MtncoController::class,"vehicleAdd"]);
Route::get("/vdra-record-add/{id}",[MtncoController::class,"vdraRecordAdd"]);


//driver
Route::get("/drivers",[MtncoController::class,"drivers"]);
Route::post("/drivers",[MtncoController::class,"uploaddriver"]);
Route::get("/adddriver",[MtncoController::class,"getdriver"]);
Route::post("/adddriver",[MtncoController::class,"uploaddriver"]);
Route::get("/drivers",[MtncoController::class,"showdriver"]);
//

//jeeplist
Route::get("/jeeplist",[MtncoController::class,"jeeplist"]);
Route::post("/jeeplist",[MtncoController::class,"uploadjeep"]);
Route::get("/addjeep",[MtncoController::class,"getjeep"]);
Route::post("/addjeep",[MtncoController::class,"uploadjeep"]);
Route::get("/jeeplist",[MtncoController::class,"showjeep"]);
//

//infolist
Route::get("/infolist",[MtncoController::class,"infolist"]);
Route::post("/infolist",[MtncoController::class,"uploadinfo"]);
Route::get("/addinfo",[MtncoController::class,"getinfo"]);
Route::post("/addinfo",[MtncoController::class,"uploadinfo"]);
Route::get("/jeep1",[MtncoController::class,"showinfo"]);

Route::post("/vehicles-edit/{id}",[MtncoController::class,"updateVehicle"]);


Route::post("/add-vdrarecord/store/{id}",[MtncoController::class,"addVdraRecordStore"]);




//

//tonlist
Route::get("/tonlist",[MtncoController::class,"tonlist"]);
Route::post("/tonlist",[MtncoController::class,"uploadton"]);
Route::get("/add3ton",[MtncoController::class,"getton"]);
Route::post("/add3ton",[MtncoController::class,"uploadton"]);
Route::get("/tonlist",[MtncoController::class,"showton"]);
//

//pikuplist
Route::get("/pickuplist",[MtncoController::class,"pickuplist"]);
Route::post("/pickuplist",[MtncoController::class,"uploadpickup"]);
Route::get("/addpickup",[MtncoController::class,"getpickup"]);
Route::post("/addpickup",[MtncoController::class,"uploadpickup"]);
Route::get("/pickuplist",[MtncoController::class,"showpickup"]);
//

Route::get("/addinfo",[MtncoController::class,"addinfo"]);

Route::get("/downloadvdra",[MtncoController::class,"downloadvdra"]);


Route::get("/search",[MtncoController::class,"search"]);

//editinfo
Route::get("/editinfo/{id}",[MtncoController::class,"editinfo"]);
Route::post("/edit/{id}",[MtncoController::class,"edit"]);
//

Route::get("/mtncohome2",[MtncoController::class,"mtncohome2"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
