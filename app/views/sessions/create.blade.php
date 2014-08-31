@extends('layouts.master')
@section('content')
<div class="login">
{{ Form::open(['route' => 'sessions.store', 'class' => 'form']) }}
	<div class="form-group">
		{{ Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Username']) }}
	</div>
	<div class="form-group">
		{{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
	</div>
	<div class="form-group">
		{{ Form::submit('Log In', ['class' => 'btn btn-primary']) }}
	</div>
{{ Form::close() }}
</div>
@stop