

<!doctype html>
<html lang="en">
<head>
    <title>Add Driver</title>
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
                <form id="contact" action="/drivers" method="post" enctype="multipart/form-data">
                    @csrf
                      <div class="row">
                        <div class="col-lg-12">
                            <h4>ADD DRIVERS</h4>
                        </div>




                        
                        <div class="col-lg-6 col-sm-12">
                        <h6 style="color:black;">Snk No.</h6>
                          <fieldset>
                            <input name="snk_no" type="text" placeholder="" required="">
                          </fieldset>
                        </div>

                        <div class="col-lg-6 col-sm-12">
                           <h6 style="color:black;">Rank</h6>
                          <fieldset>
                          <select name="rank" id="rank">
                        <option value="Authority"></option>
                         <option name="Snk" id="SNK">Snk</option>
                         <option name="Lcpl" id="Lcpl">Lcpl</option>
                      <option name="Cpl" id="Cpl">Cpl</option>
                      <option name="Sgt" id="Sgt">Sgt</option>
                         </select>
       
                        </fieldset>
                       </div>

                        <div class="col-lg-6 col-sm-12">
                        <h6 style="color:black;">Name</h6>
                          <fieldset>
                            <input name="name" type="text" id="name" placeholder="" required="">
                          </fieldset>
                        </div>

                       

            
                        <div class="col-lg-6">
<h6 style="color:black;">Date of birth</h6>
    <input type="date" name="date_of_birth" value="date-one" >
</div>

<div class="col-lg-6 col-sm-12">
                        <h6 style="color:black;">Mobile Number</h6>
                          <fieldset>
                            <input name="mobile_number" type="text" id="year" placeholder="" required="">
                          </fieldset>
                        </div>

<div class="col-lg-6">
<h6 style="color:black;">License Expire Date</h6>
    <input type="date" name="license_expire_date" value="date-two" >
</div>

                        <div class="col-lg-6 col-sm-12">
                           <h6 style="color:black;">Able to Drive</h6>
                          <fieldset>
                          <select name="able_to_drive" id="able_to_drive">
                        <option value="Only Jeep" id="Only Jeep">Only Jeep</option>
                         <option name="Only 3Ton" id="Only 3Ton">Only 3Ton</option>
                         <option name="Only Pickup" id="Only Pickup">Only Pickup</option>
                         <option name="Jeep, Pickup" id="Jeep, Pickup">Jeep, Pickup</option>
                      <option name="Jeep, Pickup,3Ton" id="Jeep, Pickup,3Ton">Jeep, Pickup,3Ton</option>
                         </select>
       
                        </fieldset>
                       </div>

                       <div class="col-lg-6 col-sm-12">
                        <h6 style="color:black;">Experience Duration</h6>
                          <fieldset>
                            <input name="experience_duration" type="text"  placeholder="" required="">
                          </fieldset>
                        </div>

                        <br> 
                        <div class="col-lg-6 col-sm-12">
    <h6 style="color:black;">Comments</h6>
      <fieldset>
        <textarea name="comment" rows="6" id="message" placeholder="" required=""></textarea>
      </fieldset>
    </div>
    <div class="col-lg-12">
      <fieldset>
        <button type="submit" id="form-submit" value="submit" class="main-button-icon">Submit</button>
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
