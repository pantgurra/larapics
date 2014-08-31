<?php namespace Acme\Services;

use Acme\Validators\PhotoValidator;
use Acme\Validators\ValidationException;
use Photo;
use Input as I;

class PhotoCreatorService {
	protected $validator;
	public function __construct(PhotoValidator $validator) {
		$this->validator = $validator;
	}
	public function make(array $attributes) {
		if (I::file('image')) {
			$file = I::file('image');
			$image = time() . '-' . $file->getClientOriginalName();
			$thumbnail = time() . 'tn-' . $file->getClientOriginalName();
		}
		if($this->validator->isValid($attributes)) {
			Photo::create([
				'title' => $attributes['title'],
				'collection_id' => $attributes['collection_id'],
				'image' => $image,
				'thumbnail' => $thumbnail
			]);
			resize_photo($file, $image, $thumbnail);
			return true;
		}
		throw new ValidationException('Photo validation failed', $this->validator->getErrors());
	}
	public function update(array $attributes, $id) {
		if($this->validator->isUpdateValid($attributes)) {
			$photo = Photo::find($id);
			$photo->title = $attributes['title'];
			$photo->save();
			return true;
		}
		throw new ValidationException('Photo validation failed', $this->validator->getErrors());
	}
}
