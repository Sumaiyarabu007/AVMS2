

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
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center mb-5" style="top:20px;">
                    <h2 class="heading-section" style="color:black;">REQUEST LIST</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrap">
                        <table class="table">
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
                                <th>Comment</th>
                                <th>Send</th>

                            </tr>
                            </thead>

                            
                            @foreach($data as $data)
                        <tr>
                        <td>{{$data->id}}</td>
                            <td>{{$data->date}}</td>
                            <td>{{$data->vehicle_type}}</td>
                            <td>{{$data->v_id}}</td>
                            <td>{{$data->drivers_name}}</td>
                            <td>{{$data->second_seater_name}}</td>
                            <td>{{$data->authority}}</td>
                            <td>{{$data->destination}}</td>
                            <td>{{$data->km_reading}}</td>
                            <td>{{$data->start_time}}</td>
                            <td>{{$data->probable_end_time}}</td>
                            <td>{{$data->present_fuel}}</td>
                            <td>{{$data->last_maintenance_date}}</td>
                            <td>{{$data->comment}}</td>
                            <td><a  class="btn btn-success" href="{{url('/adminrequest')}}">Send</a></td>

                        </tr>
                        @endforeach







                        </table>
                    </div>
                </div>
            </div>

            <br>
            <br>
            
            <a class="btn btn-success" href="{{url('/addrequest')}}">ADD REQUEST</a>
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
