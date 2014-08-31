@extends('layouts.master')
@section('content')
<div class="navigationbar">
	Collections//
</div>
@if($collections->count())
	<ul class="pattern">
		@foreach($collections as $collection)
			<li class="image">
				<a href="collections/{{$collection->collection_name}}/photos">
					@if($collection->photos->count())
						<img src="/images/{{$collection->photos->first()->thumbnail}}";>
					@else
						<img src="/images/imageholder.png";>
					@endif
				</a>
				@if(Auth::check())
					@include('collections/partials/_editform')
				@else
					<span class="count">
						{{ $collection->photos->count() }}
					</span>
					<h2>
						<span>
							{{ $collection->collection_name }} <br/>
						</span>
					</h2>
				@endif
			</li>
		@endforeach
	</ul>
@else
	<h1>Sorry, no collections...</h1>
@endif
@if(Auth::check())
	@include('collections/partials/_footer')
@endif
@stop



