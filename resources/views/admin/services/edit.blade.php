@extends('layouts.master')

@section('title')
    Services
@endsection

@section('content')

<div class="row">
	<div class="col-md-8">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title">Add Services</h4>

	<form action="/add-services" method="post">
        {{ csrf_field() }}
      <div class="modal-body">
        
          <div class="form-group">
            <label for="name" class="col-form-label">Customer Name:</label>
          <select class="form-control" name="name" style="height:3em;">
          @foreach( $bookings as $row )
               <option value='{{ $row->id }}'>{{ $row->name }}</option>
          @endforeach
          </select>
          </div>
          <div class="form-group">
            <label for="phone" class="col-form-label">Contact Details:</label>
            <input type="text" name="phone" class="form-control" id="phone">
          <div class="form-group">
            <label for="roomno" class="col-form-label">Room No:</label>
          <select class="form-control" name="roomid" style="height:3em;">
          @foreach( $rooms as $row )
               <option value='{{ $row->id }}'>{{ $row->roomno }}</option>
          @endforeach
          </select>
          </div>
               <div class="form-group">
              <label>Floor</label>
              <select name="floor"  class="form-control" style="height:3em;">
                <option value="standard">Standard</option>
                <option value="deluxe">Deluxe</option>
                    <option value="executive">Executive</option>
              </select>
        </div>
          <div class="form-group">
            <label for="time" class="col-form-label">Time:</label>
            <input type="datetime" name="time" class="form-control" id="time">
          </div>
      </div>
      <div class="modal-footer">
        <a href="{{ url('service') }}" class="btn btn-secondary">BACK</a>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>

			</div>
		</div>
	</div>
</div>
@endsection



