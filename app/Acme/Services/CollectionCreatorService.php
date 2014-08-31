<?php namespace Acme\Services;

use Acme\Validators\CollectionValidator;
use Acme\Validators\ValidationException;
use Collection;

class CollectionCreatorService {
	protected $validator;
	public function __construct(CollectionValidator $validator) {
		$this->validator = $validator;
	}
	public function make(array $attributes) {
		if($this->validator->isValid($attributes)) {
			Collection::create([
				'collection_name' => $attributes['collection_name']
			]);
			return true;
		}
		throw new ValidationException('Collection validation failed', $this->validator->getErrors());
	}
	public function update(array $attributes, $id) {
		if($this->validator->isValid($attributes)) {
			$collection = Collection::find($id);
			$collection->collection_name = $attributes['collection_name'];
			$collection->save();
			return true;
		}
		throw new ValidationException('Photo validation failed', $this->validator->getErrors());
	}
}