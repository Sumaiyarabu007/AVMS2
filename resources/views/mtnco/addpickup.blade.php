<!doctype html>
<html lang="en">
<head>
    <title>Add Jeep</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">

    @include("mtnco.mtncocss")

</head>
<body>
    
<div class="container-scroller" style="background-color:White" >
    @include("mtnco.navbar")
    
    <!-- ***** Reservation Us Area Starts ***** -->
<section class="section" id="reservation" style="position:relative; left:80px; top:-200px;" >
    <div class="container">
        <div class="row">
             
            <div class="col-lg-6">
                <div class="contact-form">
                <form id="contact" action="/pickuplist" method="post" enctype="multipart/form-data">

                      @csrf
                      <div class="row">
                        <div class="col-lg-12">
                            <h4>ADD PICKUP</h4>
                        </div>


                        
                        

                        <div class="col-lg-6 col-sm-12">
                        <h6 style="color:black;">V_ID</h6>
                          <fieldset>
                            <input name="v_id" type="text" placeholder="" required="">
                          </fieldset>
                        </div>

                        <div class="col-lg-6 col-sm-12">
                        <h6 style="color:black;">V_Name</h6>
                          <fieldset>
                            <input name="v_name" type="text" id="" placeholder="" required="">
                          </fieldset>
                        </div>

                        <div class="col-lg-6 col-sm-12">
                        <h6 style="color:black;">License Number</h6>
                          <fieldset>
                            <input name="license_number" type="text" id="" placeholder="" required="">
                          </fieldset>
                        </div>

                       

                        <div class="col-lg-6 col-sm-12">
                        <h6 style="color:black;">Authorized Mileage</h6>
                          <fieldset>
                          <input name="authorized_mileage" type="distance" id="distance" placeholder="" required="">
                        </fieldset>
                        
                        </div>

                        <div class="col-lg-6 col-sm-12">
                        <h6 style="color:black;">Authorized Fuel</h6>
                          <fieldset>
                          <input name="authorized_fuel" type="litre" id="litre" placeholder="" required="">
                        </fieldset>
                        
                        </div>

                       


                        <div class="col-lg-6">
<h6 style="color:black;">Collection Date</h6>
    <input type="date" name="collection_date" value="date-one" >
</div>
<div class="col-lg-6">
<h6 style="color:black;">Last Maintenance Date</h6>
    <input type="date" name="last_maintenance_date" value="date-two">
</div>

<div class="col-lg-6">
<h6 style="color:black;">Last Refuelling Date</h6>
    <input type="date" name="last_refuelling_date" value="date-three">
</div>
<br>
<br>                      

                        <div class="col-lg-12">
                          <fieldset>
                            <button type="submit" id="form-submit" class="main-button-icon">Submit</button>
                          </fieldset>
                        </div>

                       
                      </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Reservation Area Ends ***** -->


<!-- jQuery -->
<script src="assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/accordions.js"></script>
<script src="assets/js/datepicker.js"></script>
<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/imgfix.min.js"></script> 
<script src="assets/js/slick.js"></script> 
<script src="assets/js/lightbox.js"></script> 
<script src="assets/js/isotope.js"></script> 

<!-- Global Init -->
<script src="assets/js/custom.js"></script>
<script>

    $(function() {
        var selectedClass = "";
        $("p").click(function(){
        selectedClass = $(this).attr("data-rel");
        $("#portfolio").fadeTo(50, 0.1);
            $("#portfolio div").not("."+selectedClass).fadeOut();
        setTimeout(function() {
          $("."+selectedClass).fadeIn();
          $("#portfolio").fadeTo(50, 1);
        }, 500);
            
        });
    });

</script>

</div>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

@include("mtnco.mtncoscript")

</body>
</html>
