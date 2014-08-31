<?php

class SessionsController extends Basecontroller {
	public function create() {
		if (Auth::check()) 
			return Redirect::route('collections.index');
		return View::make('sessions.create');
	}
	public function store() {
		if (Auth::attempt(Input::only('username', 'password')))
			return Redirect::route('collections.index')->withNotification('You have successfully logged in!');
		return Redirect::back()->withInput();
	}
	public function destroy() {
		Auth::logout();
		return Redirect::route('collections.index')->withNotification('You have successfully logged out!');
	}
}