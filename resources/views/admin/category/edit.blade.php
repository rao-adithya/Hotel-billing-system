@extends('layouts.master')

@section('title')
    Edit Category
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title">Edit Category</h4>

	<form action="/editcategory-update/{{ $editcategory->id }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
      <div class="modal-body">
        
         <div class="form-group">
          <label for="roomtype" class="col-form-label">Room type:</label>
            <input type="text" name="roomtype" class="form-control" id="roomtype" value="{{ $editcategory->roomtype }}">
        </div>
                    <div class="form-group">
            <label for="floor" class="col-form-label">Floor:</label>
            <input type="text" name="floor" class="form-control" id="floor" value="{{ $editcategory->floor }}">
          </div>
          <div class="form-group">
            <label for="price" class="col-form-label">Price:</label>
            <input type="text" name="price" class="form-control" id="price" value="{{ $editcategory->price }}">
          </div>
        
      </div>
      <div class="modal-footer">
        <a href="{{ url('categories') }}" class="btn btn-secondary">BACK</a>
        <button type="submit" class="btn btn-primary">UPDATE</button>
      </div>
      </form>

			</div>
		</div>
	</div>
</div>
@endsection
