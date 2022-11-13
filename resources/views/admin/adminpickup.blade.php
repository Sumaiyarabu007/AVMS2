<!doctype html>
<html lang="en">
<head>
    <title>Jeep1 Info</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">

    @include("admin.admincss")

</head>
<body>
    

<div class="container-scroller" style="background-color:White">
    @include("admin.navbar")
    
    <section class="ftco-section">
    <form class="col-lg-4" type="get" action="{{url('/search')}}" method='GET'>
    <input class="form-control mr-sm-2" name="query" type="search" placeholder="Search Vehicle" style="background-color:White;">
    <button class="btn btn-success" type="submit">Search</button>
    
</form>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5" style="top:20px;">
                    <h2 class="heading-section" style="color:black;">PICKUP LIST</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrap">
                        <table class="table">
                            <thead class="thead-dark">
                                
                            <tr>
                            <th>Ser</th>
                                <th>V_ID</th>
                                <th>V_Name</th>
                                <th>License No.</th>
                                <th>Mileage</th>
                                <th>Fuel</th>
                                <th>Collection Date</th>
                                <th>Last Maint Date</th>
                                <th>Last Refuelling Date</th>
                                <th>Read</th>
                                 
                                   
                                 
                                   
                    

                            </tr>

                            @foreach($data as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->v_id}}</td>
                            <td>{{$data->v_name}}</td>
                         
                            <td>{{$data->license_number}}</td>
                            <td>{{$data->authorized_mileage}}</td>
                            <td>{{$data->authorized_fuel}}</td>
                            <td>{{$data->collection_date}}</td>
                            <td>{{$data->last_maintenance_date}}</td>
                            <td>{{$data->last_refuelling_date}}</td>
                            <td><a class="btn btn-success" href="{{url('/jeep1')}}">read</a></td>
                        

                        </tr>
                        @endforeach

                            </thead>





                        </table>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <a class="btn btn-success" href="{{url('/addpickup')}}">ADD PICKUP</a>
        </div>
    </section>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

@include("admin.adminscript")

</body>
</html>
