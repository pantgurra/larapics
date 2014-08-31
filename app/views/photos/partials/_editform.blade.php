<div class="edit">
	{{ Form::open(['method' => 'PATCH', 'route' => ['collections.photos.update',  $photo->id, $collection->collection_name], 'class' => 'form']) }}
		<div class="input-group">
			{{ Form::text('title', $photo->title, ['class' => 'form-control'])}}
			<span class="input-group-btn">
				{{ Form::submit('update', ['class' => 'btn btn-primary']) }}
			</span>
		</div>
	{{ Form::close() }}
</div>
<div class="delete">
	{{ Form::open(['method' => 'delete', 'route' => ['collections.photos.destroy', $photo->id, $collection->collection_name], 'class' => 'form']) }}
		{{ Form::submit('X', ['class' => 'btn btn-danger btn-xs']) }}
	{{ Form::close() }}
</div>