<?php namespace Acme\Validators;

class CollectionValidator extends Validator {
	protected static $rules = [
		'collection_name' => 'required|unique:collections'
	];
}