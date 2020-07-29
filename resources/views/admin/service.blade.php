@extends('layouts.master')

@section('title')
    Sevices
@endsection


@section('content')

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Take new complaints</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>
     	<form action="/add-services" method="POST">
        {{ csrf_field() }}
           <div class="modal-body">
           <div class="form-group">
          		<label >Customer Name:</label>
          <select class="form-control" name="bookid" style="height:3em;">
          @foreach( $bookings as $row )
               <option value='{{ $row->id }}'>{{ $row->name }}</option>
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
            <label for="phoneno" class="col-form-label">Mobile Number:</label>
            <input type="text" name="phoneno" class="form-control" id="phoneno">
          </div>
 
                              <div class="form-group">
            <label for="description" class="col-form-label">Description:</label>
            <textarea name="description" id="description" cols="30" rows="4" ></textarea>
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
                <h2 class="card-title">Customer Complaints</h2>
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Add Complaints</button>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="dataTable" class="table table-striped" >
                    <thead class=" text-primary">
                      <th>Customer Name</th>
                      <th>Mobile</th>
                      <th>Room No</th>
                      <th>Description</th>
                      <th>DELETE</th>
                    </thead>
                    <tbody>
                     @foreach ( $services as $row )
                      <tr>
                        <td>{{ $row->bookings['name'] }}</td>
                         <td>{{ $row->bookings['phone'] }}</td>
                          <td>{{ $row->rooms['roomno'] }}</td>
                          <td>{{ $row->description }}</td>
                         <td>
                         <form action="/service-delete/{{ $row->id }}" method="post">
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
