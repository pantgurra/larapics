<?php

use Acme\Services\PhotoCreatorService;

class PhotosController extends BaseController {
	protected $photoCreator;
	public function __construct(PhotoCreatorService $photoCreator) {
		$this->photoCreator = $photoCreator;
	}
	public function index($collection_name) {
		$query = Request::get('q');
		$collection = Collection::whereCollectionName($collection_name)->first();
		$photos = $query
		? Photo::with('collection')->whereCollectionId($collection->id)->search($query)->get()
		: Photo::with('collection')->whereCollectionId($collection->id)->get();
		return View::make('photos.index', compact('collection', 'photos'));
	}
	public function show($collection_name, $photoId) {
		$photo = Photo::find($photoId, $collection_name);
		return View::make('photos.show', compact('photo', 'collection_name'));
	}
	public function store() {	
		try {
			$this->photoCreator->make(Input::all());
		} 
		catch(Acme\Validators\ValidationException $e){
			return Redirect::back()->withErrors($e->getErrors(), 'create');
		}
		return Redirect::back()->withNotification('Photo successfully added!');
	}
	public function update($id) {
		$photo = Photo::find($id);
		try {
			$this->photoCreator->update(Input::all(), $photo->id);
		} 
		catch(Acme\Validators\ValidationException $e) {
			return Redirect::back()->withErrors($e->getErrors(), 'update');
		}
		return Redirect::back()->withNotification('Photo successfully updated!');
	}
	public function destroy($id) {
		$photo = Photo::find($id);
		$photo->delete();
		return Redirect::back()->withNotification('Photo successfully deleted!');
	}
}

