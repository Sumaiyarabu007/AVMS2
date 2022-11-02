<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>VDRA</h1>

<table id="customers">
  <tr>
                                <th>Serial</th>
                                <th>Date</th>
                                <th>Authority</th>
                                <th>Destination</th>
                                <th>KM READING</th>
                                 <th>When out</th>
                                 <th>When in</th>
                                   
                                <th>Present Fuel</th>
                                <th>Rmks</th>
  </tr>
                        @foreach($downloadvdra as $data)
                        <tr>
                        <td>{{$data->id}}</td>
                            <td>{{$data->date}}</td>
                            <td>{{$data->authority}}</td>
                            <td>{{$data->destination}}</td>
                            <td>{{$data->km_reading}}</td>
                            <td>{{$data->when_out}}</td>
                            <td>{{$data->when_in}}</td>
                            
                            <td>{{$data->present_fuel}}</td>
                            
                            <td>{{$data->comment}}</td>

                        </tr>
                        @endforeach

  
</table>

</body>
</html>

