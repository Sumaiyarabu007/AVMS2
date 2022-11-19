

<!doctype html>
<html lang="en">
<head>
    <title>Drivers</title>
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
    <form class="col-lg-4" type="get" action="" method='GET'>
    <input class="form-control mr-sm-2" name="search_value" type="search" placeholder="Search Driver" style="background-color:White;">
    <button class="btn btn-success" type="submit">Search</button>

</form>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5" style="top:20px;">
                    <h2 class="heading-section" style="color:black;">DRIVERS LIST</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrap">
                        <table class="table">
                            <thead class="thead-dark">

                            <tr>
                            <th>Ser</th>
                            <th>Snk No</th>
                                <th>Rank</th>
                                <th>Name</th>

                                <th>Date of Birth</th>
                                <th>Moblie number</th>

                                <th>License Expire Date</th>
                                <th>Able to Drive</th>
                                <th>Experience Duration</th>
                                <th>Comment</th>




                            </tr>

                            @foreach($data as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->snk_no}}</td>
                            <td>{{$data->rank}}</td>

                            <td>{{$data->name}}</td>
                            <td>{{$data->date_of_birth}}</td>
                            <td>{{$data->mobile_number}}</td>
                            <td>{{$data->license_expire_date}}</td>
                            <td>{{$data->able_to_drive}}</td>
                            <td>{{$data->experience_duration}}</td>
                            <td>{{$data->comment}}</td>



                        </tr>
                        @endforeach

                            </thead>





                        </table>
                    </div>
                </div>
            </div>
            {{-- <br>
            <br>
            <a class="btn btn-success" href="{{url('/adddriver')}}">ADD Driver</a> --}}


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
