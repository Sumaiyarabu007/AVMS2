
<!doctype html>
<html lang="en">
<head>
    <title>Jeeplist</title>
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
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5" style="top:20px;">
                    <h2 class="heading-section" style="color:black;">Jeep LIST</h2>
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
                                <td>Jeep1</td>
                                <td>1234</td>
                                <td>110km</td>
                                <td>123L</td>
                                <td><a href="{{url('/adminjeep1')}}">Read More</a></td>

                                
                            </tr>


                            <tr>
                                <td>2</td>
                                <td>107493</td>
                                <td>Jeep2</td>
                                <td>5678</td>
                                <td>60km</td>
                                <td>175L</td>
                                <td><a href>Read More</a></td>

                                
                                
                            </tr>


                            <tr>
                                <td>3</td>
                                <td>567832</td>
                                <td>Jeep3</td>
                                <td>9087</td>
                                <td>77km</td>
                                <td>100L</td>
                                <td><a href>Read More</a></td>
                                
                                
                            </tr>


                            <tr>
                                <td>4</td>
                                <td>073456</td>
                                <td>Jeep4</td>
                                <td>2834</td>
                                <td>77km</td>
                                <td>123L</td>
                                <td><a href>Read More</a></td>

                                
                            
                            </tr>
                            
                            </thead>





                        </table>
                    </div>
                </div>
            </div>
            <br>
            <br>
            
            

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

