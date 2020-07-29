@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hello</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!<br><br>
                    <a href="http://127.0.0.1:8000/" class="btn btn-success">GO TO HOME</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
