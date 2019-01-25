@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-12">
             <h3>Search for available schedule</h3>
             <hr>
        </div>
        <div class="col-md-4">         
            <form action="{{url('/bookings/create')}}" method="get">
                <div class="form-group">    
                    <label for="departure_time">Departure time:</label>
                    <input type="text" class="form-control datetimepicker" name="departure_time" value="{{ $date }}">                    
                </div>
                <!-- <div class="form-group">    
                    <label for="weight">Total Weight (KG):</label>
                    <input type="text" class="form-control" name="weight" value="{{ $weight }}">                    
                </div>
                <div class="form-group">    
                    <label for="quantity">Quantity:</label>
                    <input type="text" class="form-control" name="quantity" value="{{ $quantity }}">                    
                </div> -->
                <input type="submit" class="btn btn-primary" value="Search">
            </form>
        </div>
        <div class="col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading">Available Dates</div>                  
                <table class="table">
                    <tr>
                        <th>Departure Time</th>
                        <th>Container Name</th>
                        <th>Port</th>
                        <th>WareHouse</th>
                        <th>Action</th>                        
                    </tr>
                    @foreach ($schedules as $schedule)
                    <tr class="{{ $date->format('Y-m-d') == $schedule->departure_time->format('Y-m-d') ? "success" : "" }}">
                        <td>{{ $schedule->departure_time->format('jS \\of F Y h:i:s A') }}</td>
                        <td>{{ $schedule->ship->name }}</td>
                        <td>{{ $schedule->departure_port }}</td>
                        <td>{{ $schedule->warehouse }}</td>
                        <td>
                            <a href="{{url('/bookings/create')}}/{{ $schedule->id }}" class="btn btn-primary">Book</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
