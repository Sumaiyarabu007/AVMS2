

<!doctype html>
<html lang="en">
<head>
    <title>Drivers</title>
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
                            <th>Snk No</th>
                                <th>Rank</th>
                                <th>Name</th>
                
                                <th>Date of Birth</th>
                                
                                <th>License Expire Date</th>
                                <th>Able to Drive</th>
                                <th>Experience Yr</th>
                                <th>Image</th>
                                 
                                   
                    

                            </tr>

                            <tr>
                                <td>10548</td>
                                <td>Cpl</td>
                                <td>Alamin Islam</td>
                                <td>20.12.1990</td>
                                <td>12.03.2017</td>
                                <td>Jeep, Pick up, 3Ton</td>
                                <td>5yr</td>
                                
                                <td><img src="assets/images/me.jpeg" width="20px"></td>
                                </div>

                                
                            </tr>


                            <tr>
                                <td>10793</td>
                                <td>Lcpl</td>
                                <td>Momin Haque</td>
                                <td>20.04.1995</td>
                                <td>12.03.2018</td>
                                <td>Jeep, Pick up</td>
                                <td>3yr</td>
                                <td><img src="assets/images/me.jpeg" width="20px"></td>

                                
                            </tr>

                            <tr>
                                <td>10997</td>
                                <td>Snk</td>
                                <td>Shamim Shikder</td>
                                <td>15.09.1996</td>
                                <td>12.03.2020</td>
                                <td>Jeep</td>
                                <td>2yr</td>
                                <td><img src="assets/images/me.jpeg" width="20px"></td>

                                    
                                
                            </tr>

                           
                            
                            </thead>





                        </table>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <a class="btn btn-success" href="{{url('/adddriver')}}">ADD Driver</a>
            

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
