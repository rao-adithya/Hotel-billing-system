@extends('layouts.master')

@section('title')
    Edit Bookings
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title">Edit Rooms</h4>

	<form action="/updatereservation/{{ $bookings->id }}" method="get">
        {{ csrf_field() }}
         <div class="modal-body">
        
         <div class="form-group">
            <label for="name" class="col-form-label">Customer Name:</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $bookings->name }}">

        </div>
          <div class="form-group">
            <label for="phone" class="col-form-label">Contact Details:</label>
            <input type="text" name="phone" class="form-control" id="phone" value="{{ $bookings->phone }}">
                    <div class="form-group">
            <label for="email" class="col-form-label">E-mail ID:</label>
            <input type="text" name="email" class="form-control" id="email" value="{{ $bookings->email }}">
          </div>
         <div class="form-group">
              <label>Room Type</label>
              <select name="roomid"  class="form-control" style="height:3em;">
               @foreach($bookings->rooms as $row)
                <option value={{ $row['id'] }}> {{ $row['roomtype'] }} </option>
              </select>
               @endforeach
        </div>
          <div class="form-group">
            <label for="roomno" class="col-form-label">Room No:</label>
            <select name="roomid" value='$rooms' class="form-control" style="height:3em;">
            @foreach($bookings->rooms as $row)
            <option value= {{ $row['id'] }}> {{ $row['roomno'] }} </option>
            </select>
            @endforeach
          </div>
          <div class="form-group">
            <label for="address" class="col-form-label">Address:</label>
            <textarea id="address" rows="4" cols="30" name="address">{{ $bookings->address }}</textarea>
          </div>
          <div class="form-group">
            <label for="checkin" class="col-form-label">Check - in:</label>
            <input type="date" name="checkin" class="form-control" id="checkin" value="{{ $bookings->checkin }}">
          </div>
          <div class="form-group">
            <label for="checkout" class="col-form-label">Check - out:</label>
            <input type="date" name="checkout" class="form-control" id="checkout" value="{{ $bookings->checkout }}">
          </div>
      </div>
      <div class="modal-footer">
        <a href="{{ url('bookings') }}" class="btn btn-secondary">BACK</a>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>

			</div>
		</div>
	</div>
</div>
@endsection
