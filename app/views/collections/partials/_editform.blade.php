<div class="delete">
	{{ Form::open(['method' => 'delete', 'route' => ['collections.destroy', $collection->id], 'class' => 'form']) }}
		{{ Form::submit('X', ['class' => 'btn btn-danger btn-xs']) }}
	{{ Form::close() }}
</div>
<div class="edit">
	{{ Form::open(['method' => 'PATCH', 'route' => ['collections.update', $collection->id], 'class' => 'form'])}}
   		<div class="input-group">
			{{ Form::text('collection_name', $collection->collection_name, ['class' => 'form-control'])}}								
			<span class="input-group-btn">
				{{ Form::submit('update', ['class' => 'btn btn-primary']) }}
			</span>
    	</div>
    {{ Form::close() }}
</div>