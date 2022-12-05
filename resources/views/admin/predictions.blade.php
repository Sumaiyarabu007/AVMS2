

<!doctype html>
<html lang="en">
<head>
    <title>predictions List</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">

    @include("admin.admincss")

</head>
<body>

<div class="container-scroller" style="background-color:White;">
    @include("admin.navbar")
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

            <div class="row col-sm-12 justify-content-center">

                <h1 class="p-3 mb-2 bg-success text-white"> Prediction</h1>
                <div class="row col-sm-12 shadow-lg p-3 mb-5 bg-white rounded">
                    <div class="col-sm-6 shadow-lg p-3 mb-5 bg-white rounded">
                      <div class="card" style="background: rgba(233, 227, 227, 0.842)">
                        <div class="card-body">
                            <div class="card-header">
                                <h5 class="text-black">Fule Consumption/L</h5>

                            </div>
                            <table class="table table-bordered text-black">
                                <tr>
                                    <th>S.I</th>
                                    <th>Name</th>
                                    <th>mailage</th>

                                </tr>
                                    @php
                                    $milagePrediction = app\Models\Vehicle::orderBy('milage_per_leter','desc')->get();

                                    @endphp
                                 @foreach ($milagePrediction as $row)

                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$row->v_name}}</td>
                                        {{-- <td>{{$milagePerLiter = App\Models\VdraRecord::milage_per_liter($row->id)}}</td> --}}
                                        <td>{{$row->milage_per_leter}}</td>


                                    </tr>

                                @endforeach

                            </table>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-6 shadow-lg p-3 mb-5 bg-white rounded">
                        <div class="card" style="background: rgba(233, 227, 227, 0.842)">
                          <div class="card-body">
                              <div class="card-header">
                                  <h5 class="text-black">Monthly Used</h5>

                              </div>
                              <table class="table table-bordered text-black">
                                  <tr>
                                      <th>S.I</th>
                                      <th>Name</th>
                                      <th>KM</th>
                                  </tr>

                                  @foreach ($monthlyUsed as $item)

                                  <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->v_name??''}}</td>
                                    <td>{{intval($item->total_km??0)}}</td>
                                  </tr>
                                  @endforeach

                              </table>
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-6 shadow-lg p-3 mb-5 bg-white rounded">
                        <div class="card" style="background: rgba(233, 227, 227, 0.842)">
                          <div class="card-body">
                              <div class="card-header">
                                  <h5 class="text-black">Maintenace</h5>

                              </div>
                              <table class="table table-bordered text-black">
                                  <tr>
                                      <th>S.I</th>
                                      <th>Name</th>
                                      <th>Date</th>
                                  </tr>

                                  @foreach ($getJeepLists as $list)

                                  <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$list->v_name??''}}</td>
                                    <td>{{$maintanceDate = App\Models\VdraRecord::maintenance_date_prediction($list->id)}}</td>
                                  </tr>
                                  @endforeach

                              </table>
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-6 shadow-lg p-3 mb-5 bg-white rounded">
                        <div class="card" style="background: rgba(233, 227, 227, 0.842)">
                          <div class="card-body">
                              <div class="card-header">
                                  <h5 class="text-black">Refueling</h5>

                              </div>
                              <table class="table table-bordered text-black">
                                  <tr>
                                      <th>S.I</th>
                                      <th>Name</th>
                                      <th>Date</th>
                                  </tr>

                                  @foreach ($getJeepLists as $r)

                                  <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$r->v_name??''}}</td>
                                    <td>{{$refuelingDate = App\Models\VdraRecord::refueling_date_prediction($r->id)}}</td>
                                  </tr>
                                  @endforeach

                              </table>
                          </div>
                        </div>
                      </div>

                  </div>

            </div>




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
