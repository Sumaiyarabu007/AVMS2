

<!doctype html>
<html lang="en">
<head>
    <title>Request List</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
                <div class="col-lg-6 text-center mb-5" style="top:20px; background:yellow">
                    <h2 class="heading-section" style="color:black;">Pending Request List</h2>
                </div>
                {{-- <div class="col-lg-6 text-center mb-5" style="top:20px;">
                    <a class="btn btn-success" href="{{url('/addrequest')}}">ADD REQUEST</a>
                </div> --}}

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrap">
                        <table class="table table-striped">
                            <thead class="thead-dark">

                            <tr>
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
                                <th>Last maint date</th>
                                <th>Status</th>
                                <th>Comment</th>
                                {{-- <th>Send</th> --}}

                            </tr>
                            </thead>


                            @foreach($pendingData as $data)
                                <tr>
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
                                    <td class="bg-warning">{{$data->status??'N/A'}}</td>
                                    <td>{{$data->comment??'N/A'}}</td>
                                    {{-- <td>
                                        <a  class="btn btn-success" href="{{url('/adminrequest')}}">Send</a>
                                    </td> --}}

                                </tr>
                        @endforeach


                        </table>

                    </div>
                </div>
            </div>




        </div>
        <br>
        <br>

        <a class="btn btn-success" href="{{url('/addrequest')}}">ADD REQUEST</a>
        <br><br><br>

        <div class="container" style="overflow-x:auto;">


            <div class="row justify-content-center">
                <div class="col-lg-6 text-center mb-5" style="top:20px; background:red">
                    <h2 class="heading-section" style="color:#fff;">Declined Request List</h2>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrap">
                        <table class="table table-striped">
                            <thead class="thead-dark">

                            <tr>
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
                                <th>Delete</th>

                            </tr>
                            </thead>
                            @foreach ($declinedData as $row)

                                <tr>
                                    <td style="color:red">{{$loop->iteration}}</td>
                                    <td style="color:red">{{$row->date}}</td>
                                    <td style="color:red">{{$row->vehicle->v_type}}</td>
                                    <td style="color:red">{{$row->vehicle->v_id}}</td>
                                    <td style="color:red">{{$row->driver->name}}</td>
                                    <td style="color:red">{{$row->second_seater_name}}</td>
                                    <td style="color:red">{{$row->authority}}</td>
                                    <td style="color:red">{{$row->destination}}</td>
                                    <td style="color:red">{{$row->km_reading}}</td>
                                    <td style="color:red">{{$row->start_time}}</td>
                                    <td style="color:red">{{$row->probable_end_time}}</td>
                                    <td style="color:red">{{$row->present_fuel}}</td>
                                    {{-- <td style="color:red">{{$row->last_maintenance_date}}</td> --}}
                                    <td style="color:red">{{$row->status??'N/A'}}</td>
                                    <td style="color:red">{{$row->comment??'N/A'}}</td>
                                    {{-- <td>
                                        <a  class="btn btn-success" href="{{url('/adminrequest')}}">Send</a>

                                    </td> --}}
                                    <td>
                                        <a  class="btn btn-danger" href="{{url('/deleterequest/'.$row->id)}}">Delete</a>

                                    </td>

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

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

@include("mtnco.mtncoscript")

</body>
</html>
