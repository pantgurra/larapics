@if (Session::has('notification'))
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
		{{ Session::get('notification') }}
	</div>
@endif
{{ $errors->create->first('collection_name', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>:message</div>') }}
{{ $errors->update->first('collection_name', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>:message</div>') }}
{{ $errors->create->first('image', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>:message</div>') }}
{{ $errors->create->first('title', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>:message</div>') }}
{{ $errors->update->first('title', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>:message</div>') }}