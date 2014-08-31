<?php

function resize_photo($file, $name, $thumbnail) {
	$manipulated_image = Image::make($file->getRealPath());
	$manipulated_image->resize(900, null, function($constraint) {
		$constraint->aspectRatio();
		$constraint->upsize();
	})	->save(public_path() . '/images/' . $name)
		->crop(300,300)
		->save(public_path() . '/images/' . $thumbnail);
}