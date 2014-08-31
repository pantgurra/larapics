@extends('layouts.master')
@section('content')
<div class="navigationbar">
	<a href="/">
		Collections
	</a> // 
	<a href="/collections/{{$photo->collection->collection_name}}/photos">
		{{ $photo->collection->collection_name }}
	</a> //
	{{ $photo->title }}
</div>
<div class="photo-content">
	<img src="/images/{{$photo->image}}">
	@include('photos/partials/_disqus')
</div>
@stop