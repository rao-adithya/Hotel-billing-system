@extends('layouts.master')

@section('title')
    Categories
@endsection


@section('content')

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>
      <form action="/add-category" method="POST">
        {{ csrf_field() }}
      <div class="modal-body">
        
         <div class="form-group">
          <label for="roomtype" class="col-form-label">Roomtype:</label>
          <input type="text" name="roomtype" class="form-control" id="roomtype">

        </div>
                    <div class="form-group">
            <label for="floor" class="col-form-label">Floor:</label>
            <input type="text" name="floor" class="form-control" id="floor">
          </div>
          <div class="form-group">
            <label for="price" class="col-form-label">Price:</label>
            <input type="text" name="price" class="form-control" id="price">
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
                <h2 class="card-title">Room Categories</h2>
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Add Categories</button>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="dataTable" class="table table-striped" >
                    <thead class=" text-primary">
                      <th>Room Type</th>
                      <th>Floor</th>
                      <th>Price</th>
                      <th>Edit</th>
                      <th>DELETE</th>
                    </thead>
                    <tbody>
                    @foreach ( $categories as $row )
                      <tr>
                        <td>{{ $row->roomtype }}</td>
                          <td>{{ $row->floor }}</td>
                          <td>{{ $row->price }}/- per night</td>
                          <td><a href="{{ url('editcategory/'.$row->id) }}" class="btn btn-success">EDIT</a>
                          </td>
                         <td>
                         <form action="/category-delete/{{ $row->id }}" method="post">
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
