<!doctype html>
<html lang="en">
<head>
    <title>Jeep1 Info</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">

    @include("mtnco.mtncocss")

</head>
<body>
    

<div class="container-scroller" style="background-color:White">
    @include("mtnco.navbar")
    
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section" style="color:black;">PICKUP LIST</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrap">
                        <table class="table">
                            <thead class="thead-dark">
                                
                            <tr>
                                <th>Serial</th>
                                <th>V_ID</th>
                                <th>V_Name</th>
                                <th>License Number</th>
                                <th>Authorized Mileage</th>
                                <th>Authorized Fuel</th>
                                <th>...</th>
                                 
                                   
                    

                            </tr>

                            <tr>
                                <td>1</td>
                                <td>011022</td>
                                <td>jeep1</td>
                                <td>1234</td>
                                <td>110km</td>
                                <td>123l</td>
                                <td><a href="{{url('/jeep1')}}">Read More</a></td>

                                
                            </tr>


                            <tr>
                                <td>2</td>
                                <td>03.10.22</td>
                                <td>Ammenity</td>
                                <td>GEC circle</td>
                                <td>60km</td>
                                <td>123l</td>
                                <td><a href>Read More</a></td>

                                
                                
                            </tr>


                            <tr>
                                <td>3</td>
                                <td>04.10.22</td>
                                <td>Training</td>
                                <td>Firing range</td>
                                <td>77km</td>
                                <td>123l</td>
                                <td><a href>Read More</a></td>
                                
                                
                            </tr>


                            <tr>
                                <td>4</td>
                                <td>07.10.22</td>
                                <td>Training</td>
                                <td>Firing range</td>
                                <td>77km</td>
                                <td>123l</td>
                                <td><a href>Read More</a></td>

                                
                            
                            </tr>
                            
                            </thead>





                        </table>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <a href="{{url('/addjeep')}}">ADD Jeep</a>
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

