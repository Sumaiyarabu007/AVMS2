

<!doctype html>
<html lang="en">
<head>
    <title>Predictions List</title>
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

            @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
             </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    {{ $errors->first() }}
                </div>
            @endif

            <div class="row justify-content-center">
                {{-- <div class="col-lg-6 text-center mb-5" style="top:20px; background:rgb(14, 247, 6)">
                </div> --}}

                <h2 class="heading-section" style="color:black;  background:rgb(14, 247, 6)">Predictions</h2>

            </div>




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
