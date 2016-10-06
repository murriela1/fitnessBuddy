@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">User Info</div>

                <div class="panel-body">
                    <form action="/user/{{$user->id}}" method="POST">

                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                        Name: <input type="text" value="{{$user->name}}" />
                        Email: <input type='email' name='email' value='{{$user->email}}' />
                        <input type='submit' value='Update' />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection