@extends('layouts.master')

@section('title')
    Edit Rooms
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title">Edit Rooms</h4>

	<form action="/editrooms-update/{{ $editrooms->id }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
      <div class="modal-body">
          <div class="form-group">
            <label for="roomno" class="col-form-label">Room No:</label>
            <input type="text" name="roomno" class="form-control" id="roomno" value="{{ $editrooms->roomno }}">
          </div>
      <div class="modal-footer">
        <a href="{{ url('rooms') }}" class="btn btn-secondary">BACK</a>
        <button type="submit" class="btn btn-primary">UPDATE</button>
      </div>
      </form>

			</div>
		</div>
	</div>
</div>
@endsection
