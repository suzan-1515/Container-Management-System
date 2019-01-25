@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    	<div class="col-md-12">
    		<h2>All Bookings</h2>
			<hr>
    	</div>
		<div class="col-md-2">
			<a href="{{url('/bookings/create')}}" class="btn btn-primary">Make New Booking</a>
		</div>
        <div class="col-md-10">
            <div class="panel panel-info">
                <div class="panel-heading">Bookings</div>                
                <table class="table">
                	<tr>
	                    <th>Id</th>
	                    <th>Customer name</th>
                        <th>Departure Date</th>
                        <th>Weight</th>
	                    <th>Quantities</th>
                        <th>Status</th>
	                    <th>Actions</th>
                    </tr>
                    @foreach ($bookings as $booking)                    	
                    <tr>
                    	<td>{{ $booking->id }}</td>
                    	<td>{{ $booking->customer->name }}</td>
                        <td>{{ $booking->schedule->departure_time->format('jS \\of F Y h:i:s A') }}</td>
                        <td>{{ $booking->weight }}</td>
                    	<td>{{ $booking->quantity }}</td>
                        <td>{{ $booking->status }}</td>
                    	<td>
                            <a href="{{url('/bookings')}}/{{ $booking->id }}/edit" class="btn btn-info btn-xs">Edit</a>
                    		<a href="{{url('/bookings')}}/{{ $booking->id }}" class="btn btn-primary btn-xs">View Booking</a>
                    		<a href="{{url('/bookings')}}/{{ $booking->id }}/delete" class="btn btn-danger btn-xs">Cancel</a>
                    	</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
