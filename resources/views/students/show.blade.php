@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h3>Profile</h3>
                </div>

                <div class="card-body">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>{{ $student->user->name}}</h4>
                        </div>
                        <div class="panel-body">
                            <p>{{ $student->user->email }}</p>
                            <p>{{ $student->weight }}</p>
                            <p>{{ $student->height }}</p>
                            <p>{{ $student->birthday_at }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
