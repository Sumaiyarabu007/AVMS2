@extends('mtnco.jeeplist')
@section('content')


<table class="table">
                            <thead class="thead-dark">
                                
                            <tr>
                                <th>Ser</th>
                                <th>V_ID</th>
                                <th>V_Name</th>
                                <th>License No.</th>
                                <th>Mileage</th>
                                <th>Fuel</th>
                                <th>Collection Date</th>
                                <th>Last Maint Date</th>
                                <th>Last Refuelling Date</th>
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
                            <td>{{$data->collection_date}}</td>
                            <td>{{$data->last_maintenance_date}}</td>
                            <td>{{$data->last_refuelling_date}}</td>
                            <td><a class="btn btn-success" href="{{url('/jeep1')}}">VDRA</a></td>
                        

                        </tr>
                        @endforeach



                            
                            </thead>





                        </table>

@endsection

