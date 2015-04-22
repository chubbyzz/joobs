<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout() {
		View::share('user', User::current());
		if (!is_null($this->layout)) {
			$this->layout = View::make($this->layout);
		}
	}

}
