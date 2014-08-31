<?php

use Acme\Services\CollectionCreatorService;

class CollectionsController extends BaseController {
	protected $collectionCreator;
	public function __construct(CollectionCreatorService $collectionCreator) {
		$this->collectionCreator = $collectionCreator;
	}
	public function index() {
		$query = Request::get('q');
		$collections = $query
			? Collection::with('photos')->search($query)->orderBy('id', 'desc')->get()
			: Collection::with('photos')->orderBy('id', 'desc')->get();
		return View::make('collections.index', compact('collections'));
	}
	public function store() {
		try {
			$this->collectionCreator->make(Input::all());
		} 
		catch(Acme\Validators\ValidationException $e) {
			return Redirect::back()->withErrors($e->getErrors(), 'create');
		}
		return Redirect::back()->withNotification('Collection succesfully created!');
	}
	public function update($id) {
		$collection = Collection::find($id);
		try {
			$this->collectionCreator->update(Input::all(), $collection->id);
		} 
		catch(Acme\Validators\ValidationException $e) {
			return Redirect::back()->withErrors($e->getErrors(), 'update');
		}
		return Redirect::back()->withNotification('Collection succesfully updated!');
	}
	public function destroy($id) {
		$collection = Collection::find($id);
		$collection->delete();
		return Redirect::back()->withNotification('Collection successfully deleted!');
	}
}
