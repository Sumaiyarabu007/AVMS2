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
<form class="col-lg-2" type="get" action="{{url('/search')}}" method='GET'>
    <input class="form-control mr-sm-2" name="query" type="search" placeholder="Search Vehicle" style="background-color:White;">
    <button class="btn btn-success" type="submit">Search</button>
</form>
<section class="section" id="reservation" style="position:relative; left:-200px; top:-80px;" >


<ul>
<li>
                <a class="btn btn-success" href="{{url('/addjeep')}}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
                    <span class="menu-title">Add Jeep</span>
                </a>
            </li>
            <br>

            <li>
                <a class="btn btn-success" href="{{url('/add3ton')}}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
                    <span class="menu-title">Add 3Ton</span>
                </a>
            </li>

            <br>
            
            <li>
                <a class="btn btn-success" href="{{url('/addpickup')}}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
                    <span class="menu-title">Add Pickup</span>
                </a>
            </li>
<br>

            <li>
                <a class="btn btn-success" href="{{url('/addinfo')}}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
                    <span class="menu-title">Add VDRA</span>
                </a>
            </li>
</ul>
</section>
           
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
