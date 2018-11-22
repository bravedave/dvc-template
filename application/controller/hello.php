<?php
/*
	David Bray
	BrayWorth Pty Ltd
	e. david@brayworth.com.au

	This work is licensed under a Creative Commons Attribution 4.0 International Public License.
		http://creativecommons.org/licenses/by/4.0/
	*/

class hello extends Controller {
	protected function posthandler() {
		$action = $this->getPost('action');

		if ( 'gibblegok' == $action) { \Json::ack( $action); }
		else { \Json::nak( $action); }

	}

	protected function _index() {
		$this->render([
			'title' => 'hello world',
			'primary' => 'hello',
			'secondary' =>'blank'
		]);

	}

	function index() {
		$this->isPost() ?
			$this->postHandler() :
			$this->_index();

	}

	function info() {
		/* default setting
		 * in case you forget to disable this on a production server
		 * - only running on localhost
		 */
		if ( Request::ServerIsLocal()) {
			$this->render([
				'title' => 'hello world',
				'primary' => 'info',
				'secondary' =>'blank'
			]);

		}

	}

}
