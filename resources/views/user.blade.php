@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">User Info</div>

                <div class="panel-body">
                    <p> {{ $user->name }}</p>
                    <p> {{ $user->email }}</p>

                    <ul>
                        @foreach($meals as $meal)
                            <li>
                                <p>{{$meal->meal}}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection