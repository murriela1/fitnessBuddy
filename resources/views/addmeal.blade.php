@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Add A Meal</div>

                <div class="panel-body">
                    <form action="/users/{{ $user->id }}/meals" method="POST">
                    	Name of Meal: <input type="text" />
                    	Calories: <input type="integer" />
                    	<input type="submit" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection