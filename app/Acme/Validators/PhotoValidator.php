<?php namespace Acme\Validators;

class PhotoValidator extends Validator {
	protected static $rules = [
		'title' => 'required|unique:photos',
		'collection_id' => 'required',
		'image' => 'required|image'
	];
	protected static $updateRules = [
		'title' => 'required|unique:photos',
	];
}