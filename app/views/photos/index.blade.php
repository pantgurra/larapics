@extends('layouts.master')
@section('content')
<div class="navigationbar">
	<a href="/">Collections</a>//{{ $collection->collection_name }}
</div>
@if($photos->count())
	<ul class="pattern">
		@foreach($photos as $photo)
			<li class="image">
				<a href="photos/{{$photo->id}}">
					<img src="/images/{{$photo->thumbnail}}">
				</a>
				@if(Auth::check())
					@include('photos/partials/_editform')
				@else 
					<h2>
						<span class="title">
							{{ $photo->title }}
						</span>
					</h2>
				@endif
			</li>
		@endforeach
	</ul>
@else
	<h1>Sorry, no photos...</h1>
@endif
@if(Auth::check())
	@include('photos/partials/_footer')
@endif
@stop
