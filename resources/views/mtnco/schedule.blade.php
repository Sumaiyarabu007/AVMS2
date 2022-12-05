

<!doctype html>
<html lang="en">
<head>
    <title>Schedule List</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

    @include("mtnco.mtncocss")

</head>
<body>

<div class="container-scroller" style="background-color:White;">
    @include("mtnco.navbar")
    <section class="ftco-section">
        <div class="container" style="overflow-x:auto;">

            @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
             </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    {{ $errors->first() }}
                </div>
            @endif

            <div class="row justify-content-center">
                <div class="col-lg-6 text-center mb-5" style="top:20px; background:rgb(14, 247, 6)">
                    <h2 class="heading-section" style="color:black;">Schedule List</h2>
                </div>


            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrap">
                        <table class="table table-striped">
                            <thead class="thead-dark">

                            <tr>
                                <th>VDRA</th>
                                <th>Ser</th>
                                <th>Date</th>
                                <th>Veh Type</th>
                                <th>V_ID</th>
                                <th>Driver</th>
                                <th>2nd Seater</th>
                                <th>Authority</th>
                                <th>Place</th>
                                <th>KM</th>

                                 <th>Start Time</th>
                                 <th>End Time</th>
                                 <th>Fuel</th>
                                {{-- <th>Last maint date</th> --}}
                                <th>Status</th>
                                <th>Comment</th>
                                {{-- <th>Send</th> --}}

                            </tr>
                            </thead>


                            @foreach($scheduleData as $data)
                                <tr>
                                    <td>
                                        @php
                                            $todayData = date('Y-m-d');
                                            // dd($todayData);
                                            $scheduleDate = $data->date;
                                            $checkRecord = App\Models\VdraRecord::where('shedule_id_vdra',$data->id)->first();
                                        @endphp
                                        @if(!$checkRecord && ($todayData == $scheduleDate))
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addVdraRecord_{{$data->id}}">
                                            VDRA
                                        </button>
                                        @elseif($checkRecord)
                                        <span style="color: rgb(12, 200, 247);">Shedule Completed</span>
                                        @else
                                        <span style="color: rgb(247, 40, 12);">Shedule Faild</span>
                                        @endif
                                    </td>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$data->date}}</td>
                                    <td>{{$data->vehicle->v_type}}</td>
                                    <td>{{$data->vehicle->v_id}}</td>
                                    <td>{{$data->driver->name}}</td>
                                    <td>{{$data->second_seater_name}}</td>
                                    <td>{{$data->authority}}</td>
                                    <td>{{$data->destination}}</td>
                                    <td>{{$data->km_reading}}</td>
                                    <td>{{$data->start_time}}</td>
                                    <td>{{$data->probable_end_time}}</td>
                                    <td>{{$data->present_fuel}}</td>
                                    {{-- <td>{{$data->last_maintenance_date}}</td> --}}
                                    <td class="bg-success">{{$data->status??'N/A'}}</td>
                                    <td>{{$data->comment??'N/A'}}</td>
                                    {{-- <td>
                                        <a  class="btn btn-success" href="{{url('/adminrequest')}}">Send</a>
                                    </td> --}}

                                      <!-- Modal -->
                                      <div class="modal fade"  id="addVdraRecord_{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                        <div class="modal-content" style="background: #fff;color:#000">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add VDRA</h5>

                                            </div>
                                            <div class="modal-body">
                                                <form action="/add-vdrarecord/store/{{$data->id}}" method="Post">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="">KM READING</label>
                                                        <input type="text" class="" name="km_reading_vdra" id="" required=""  placeholder="KM READING	">
                                                    </div>
                                                    {{-- <div class="form-group">
                                                        <label for="">Present Fuel</label>
                                                        <input type="text" class="" id="" name="present_fuel_vdra" required="" placeholder="Present Fuel">
                                                    </div> --}}
                                                    <div class="form-group">
                                                      <label for="">When In Time</label>
                                                      <input name="when_check_in_vdra" type="time" id="time" placeholder="when Out" required="">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">when Out Time</label>
                                                        <input name="when_check_out_vdra" type="time" id="time" placeholder="when In" required="">
                                                    </div>

                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                  </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                </tr>
                            @endforeach


                            </table>

                        </div>
                    </div>
                </div>

    {{-- <br>
    <br>

    <a class="btn btn-success" href="{{url('/addrequest')}}">ADD REQUEST</a> --}}


    </div>

    </section>


    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="assets/js/jquery.min.js}"></script>
    <script src="js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

@include("mtnco.mtncoscript")

</body>
</html>
