@extends('layouts.master')

@section('title')
    Rooms
@endsection


@section('content')
<head>
<style>
td,th{
    text-align:center;
}
</style>
</head>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Rooms</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>
      <form action="/add-rooms" method="POST">
        {{ csrf_field() }}
      <div class="modal-body">
        
         <div class="form-group">
          		<label >Room Type</label>
          <select class="form-control" name="categoryid" style="height:3em;">
          @foreach( $categories as $row )
               <option value='{{ $row->id }}'>{{ $row->roomtype }}</option>
          @endforeach
          </select>
        </div>
          <div class="form-group">
            <label for="roomno" class="col-form-label">Room No:</label>
            <input type="text" name="roomno" class="form-control" id="roomno">
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
                    <label>Price</label>
          <select class="form-control" name="categoryid" style="height:3em;">
          @foreach( $categories as $row )
               <option value='{{ $row->id }}'>{{ $row->price }}</option>
          @endforeach
          </select>
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
                <h2 class="card-title">Rooms</h2>
                <button type="button" class="btn btn-primary float-left" data-toggle="modal" data-target="#exampleModal">Add rooms</button>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="dataTable" class="table table-striped" >
                    <thead class=" text-primary">
                      <th>Room Type</th>
                      <th>Room Number</th>
                      <th>Floor</th>
                      <th>Price</th>
                      <th>EDIT Roomno</th>
                      <th>DELETE</th>
                    </thead>
                    <tbody>
                    @foreach ( $rooms as $row )
                      <tr>
                        <td>{{ $row->categories['roomtype'] }}</td>
                         <td>{{ $row->roomno }}</td>
                          <td>{{ $row->categories['floor'] }}</td>
                          <td>{{ $row->categories['price'] }}/- per night</td>
                         
                         <td "><a href="{{ url('editrooms/'.$row->id) }}" class="btn btn-success" >EDIT</a>
                          </td>
                          <td>
                         <form action="/room-delete/{{ $row->id }}" method="post">
                             {{ csrf_field() }}
                             {{ method_field('DELETE') }}
                             <button type="submit" class="btn btn-danger">DELETE</button>

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
