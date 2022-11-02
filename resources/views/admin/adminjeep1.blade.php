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
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5" style="top:20px;">
                    <h2 class="heading-section" style="color:black;">Jeep1</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrap">
                        <table class="table">
                            <thead class="thead-dark">
                                
                            <tr>
                                <th>Serial</th>
                                <th>Date</th>
                                <th>Authority</th>
                                <th>Destination</th>
                                <th>KM READING</th>
                                 <th>When out</th>
                                 <th>When in</th>
                                   
                                <th>Present Fuel</th>
                            

                            </tr>

                            <tr>
                                <td>1</td>
                                <td>01.10.22</td>
                                <td>Training</td>
                                <td>Firing range</td>
                                <td>77km</td>
                                <td>0730</td>
                                <td>1350</td>
                                <td>30L</td>
                              
                            </tr>


                            <tr>
                                <td>2</td>
                                <td>03.10.22</td>
                                <td>Ammenity</td>
                                <td>GEC circle</td>
                                <td>60km</td>
                                <td>1030</td>
                                <td>1850</td>
                                <td>12L</td>
                               
                            </tr>


                            <tr>
                                <td>3</td>
                                <td>04.10.22</td>
                                <td>Training</td>
                                <td>Firing range</td>
                                <td>77km</td>
                                <td>0730</td>
                                <td>1350</td>
                                <td>30L</td>
                                
                            </tr>


                            <tr>
                                <td>4</td>
                                <td>07.10.22</td>
                                <td>Training</td>
                                <td>Firing range</td>
                                <td>77km</td>
                                <td>0730</td>
                                <td>1350</td>
                                <td>30L</td>
                                
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

