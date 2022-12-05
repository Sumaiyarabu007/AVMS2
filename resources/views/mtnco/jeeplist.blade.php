
<!doctype html>
<html lang="en">
<head>
    <title>Jeeplist</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <link rel="stylesheet" href="css/style.css">
    <script src="jquery-3.6.0.min.js"></script>

    @include("mtnco.mtncocss")


</head>
<body>


<div class="container-scroller" style="background-color:White">
    @include("mtnco.navbar")

    <section class="ftco-section">
    <form class="col-lg-4" type="get" action="" method='GET'>
    <input class="form-control mr-sm-2" name="v_id" type="search" placeholder="Search Vehicle" style="background-color:White;">
    <button class="btn btn-success" type="submit">Search</button>

</form>
        <div class="container">
            <div class="row justify-content-center">


<br>
<br>
                <div class="col-md-6 text-center mb-5" style="top:20px;">
                    <h2 class="heading-section" style="color:black;">Jeep LIST</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrap">
                        <table class="table table-responsive">
                            <thead class="thead-dark">

                            <tr>
                                <th>Ser</th>
                                <th>V_ID</th>
                                <th>V_Name</th>
                                <th>License No.</th>
                                <th>KM Read</th>
                                <th>Fuel</th>
                                <th>Mileage/L</th>
                                <th>Last Maint</th>
                                <th>Next Maint</th>
                                <th>Last Refuelling</th>
                                <th>Collection</th>

                                <th>Action</th>
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
                            <td>{{$data->milage_per_leter}}</td>
                            <td>{{$data->last_maintenance_date}}</td>
                            <td>{{$data->next_maintenance_date}}</td>
                            <td>{{$data->last_refuelling_date}}</td>
                            <td>{{date("Y-m-d",strtotime($data->collection_date))}}</td>

                            <td>
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#update_maintance_{{$data->id}}">
                                    Maintanance
                                </button>
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#update_refueling_{{$data->id}}">
                                    Refueling
                                </button>

                            </td>

                            <td><a class="btn btn-success" href="{{url('/jeep1')}}">VDRA</a></td>


                            <!-- Modal -->
                            <div class="modal fade"  id="update_maintance_{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content" style="background: #fff;color:#000">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Update</h5>

                                    </div>
                                    <div class="modal-body">
                                        <form action="/vehicle/maintanance/{{$data->id}}" method="Post">
                                            @csrf

                                            <div class="form-group">
                                                <label for="">Present Maintanance Date</label>
                                                <input type="date"  value="{{$data->last_maintenance_date}}" name="last_maintenance_date"  required=""  placeholder="Present Maintanance Date">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Next Maintanance Date</label>
                                                <input type="date" class="" value="{{$data->next_maintenance_date}}" name="next_maintenance_date" id="" required=""  placeholder="Next Maintanance Date">
                                            </div>



                                            <button type="submit" class="btn btn-primary">Submit</button>
                                          </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                    </div>
                                </div>
                                </div>
                            </div>

                              <!-- Modal -->
                              <div class="modal fade"  id="update_refueling_{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content" style="background: #fff;color:#000">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Update</h5>

                                    </div>
                                    <div class="modal-body">
                                        <form action="/vehicle/refueling/{{$data->id}}" method="Post">
                                            @csrf


                                            <div class="form-group">
                                                <label for="">Refuelling</label>
                                                <input type="text" class="" id="" value="{{$data->authorized_fuel}}" name="authorized_fuel" required="" placeholder="Present Fuel">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Present Refuelling Date</label>
                                                <input type="date" class=""   id=""  name="present_refueling_date" required="" placeholder="Present Refuelling Date">
                                            </div>


                                            <button type="submit" class="btn btn-primary">Submit</button>
                                          </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                    </div>
                                </div>
                                </div>
                            </div>

                        </tr>
                        @endforeach




                            </thead>





                        </table>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <a class="btn btn-success" href="{{url('/addjeep')}}">ADD Jeep</a>


        </div>
    </section>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

@include("mtnco.mtncoscript")

<script type="text/javascript">

    $('#search').on('keyup',function()
    {

     $value=$(this).val();

     $.ajax({

type:'get',
url:'{{URL::to('search')}}',
data:{'search': $value},

success:function(data)
{
    console.log(data);
    $('#Content').html(data);

}

     });
    })

</body>
</html>
