{{ Form::open(['route' => 'collections.index', 'class' => 'form']) }}
  <div class="col-lg-12">
    <div class="input-group">
      {{ Form::text('collection_name', null, ['placeholder' => 'Name of collection','class' => 'form-control']) }}
      <span class="input-group-btn">
        {{ Form::submit('Add Collection', ['class' => 'btn btn-success', 'type' => 'button']) }}
      </span>
    </div>
  </div>
{{ Form::close() }}


	
	