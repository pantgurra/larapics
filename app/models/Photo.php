<?php

class Photo extends Eloquent {
	protected $guarded = ['id'];
	public function collection() {
		return $this->belongsTo('Collection');
	}
	public static function find($id, $collection_name = null) {
		$photo = static::with('collection')->find($id);
		if ($collection_name and $photo->collection->collection_name !== $collection_name)
			throw new Illuminate\Database\Eloquent\ModelNotFoundException;
		return $photo;	
	}
	public function scopeSearch($query, $search) {
		return $query->where('title', 'LIKE', "%$search%");
	}
}

