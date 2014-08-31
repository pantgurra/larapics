{{ Form::open(['route' => ['collections.photos.index', $collection->collection_name], 'files' => 'true', 'class'=>'form']) }}
	<div class="col-lg-12">
		<div class="input-file">
			{{ Form::hidden('collection_id', "{$collection->id}")}}
			{{ Form::file('image', ['class' => 'form-control']); }}
		</div>
		<div class="input-group">
			{{ Form::text('title', null, ['placeholder' => 'Image title', 'class' => 'form-control']); }}
			<span class="input-group-btn">
				{{ Form::submit('Upload image', ['class' => 'btn btn-success']);}}
			</span>
		</div>
	</div>
{{ Form::close() }}