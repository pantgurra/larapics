<?php

class Collection extends Eloquent {
	protected $fillable = ['collection_name'];
	public function photos() {
		return $this->hasMany('Photo')->orderBy('id', 'desc');
	}
	public function scopeSearch($query, $search) {
		return $query->where('collection_name', 'LIKE', "%$search%");
	}
}