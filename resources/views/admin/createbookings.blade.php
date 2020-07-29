@extends('layouts.master')

@section('title')
    Bookings
@endsection


@section('content')
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Make Reservation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>
     	<form action="/add-bookings" method="POST">
        {{ csrf_field() }}
           <div class="modal-body">
                   <div class="form-group">
            <label for="name" class="col-form-label">Customer Name:</label>
            <input type="text" name="name" class="form-control" id="name">
          </div>
                    <div class="form-group">
            <label for="phone" class="col-form-label">Mobile Number:</label>
            <input type="text" name="phone" class="form-control" id="phone">
          </div>
                    <div class="form-group">
            <label for="email" class="col-form-label">E-Mail ID:</label>
            <input type="text" name="email" class="form-control" id="email">
          </div>
         <div class="form-group">
          		<label >Room Type:</label>
          <select class="form-control" name="categoryid" style="height:3em;">
          @foreach( $categories as $row )
               <option value='{{ $row->id }}'>{{ $row->roomtype }}</option>
          @endforeach
          </select>
        </div>
          <div class="form-group">
          		<label >Room Number:</label>
          <select class="form-control" name="roomid" style="height:3em;">
          @foreach( $rooms as $row )
               <option value='{{ $row->id }}'>{{ $row->roomno }}</option>
          @endforeach
          </select>
          </div>
                    <div class="form-group">
                    <label>Floor</label>
          <select class="form-control" name="categoryid" style="height:3em;">
          @foreach( $categories as $row )
               <option value='{{ $row->id }}'>{{ $row->floor }}</option>
          @endforeach
          </select>
          </div>
                              <div class="form-group">
            <label for="address" class="col-form-label">Address:</label>
            <textarea name="address" id="address" cols="30" rows="4" ></textarea>
          </div>
                              <div class="form-group">
            <label for="checkin" class="col-form-label">Check In:</label>
            <input type="date" name="checkin" class="form-control" id="checkin" value="<?php echo date('Y-m-d'); ?>">
          </div>
             <div class="form-group">
            <label for="checkout" class="col-form-label">Check Out:</label>
            <input type="date" name="checkout" class="form-control" id="checkin">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>




 <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h2 class="card-title">Bookings</h2>
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Add Reservation</button>

              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table" id="dataTable">
                    <thead class=" text-primary">
                      <th>Customer Name</th>
                      <th>Contact</th>
                      <th>E-mail</th>
                      <th>Roomtype</th>
                      <th>Roomno</th>
                      <th>Address</th>
                      <th>Check-In</th>
                      <th>Check-Out</th>
                      <th>DELETE</th>
                    </thead>
                    <tbody>
                     @foreach ( $bookings as $row )
                      <tr>
                        <td>{{ $row->name }}</td>
                         <td>{{ $row->phone }}</td>
                          <td>{{ $row->email }}</td>
                          <td>{{ $row->categories['roomtype'] }}</td>
                          <td>{{ $row->rooms['roomno'] }}</td>
                          <td>{{ $row->address }}</td>
                          <td>{{ $row->checkin }}</td>
                          <td>{{ $row->checkout }}</td>
                         <td>
                         <form action="/booking-delete/{{ $row->id }}" method="post">
                             {{ csrf_field() }}
                             {{ method_field('DELETE') }}
                             <button type="submit" class="btn btn-danger">DELETE</button>
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
         </div>
        </div>

@endsection


@section('scripts')
<script>
$(document).ready( function () {
    $('#dataTable').DataTable();
} );
</script>
@endsection
