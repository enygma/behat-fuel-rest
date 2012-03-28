<?php

class Controller_User extends Controller_Rest
{

	public function get_index()
	{
		// try to find our user record
		$user = Model_User::find('all',array(
			'where' => Input::get()
		));
		$this->response(array_shift($user));
	}

	// POSTing, so create a user
	public function post_index()
	{
		$user 		= new Model_User();
		$user->name = Input::post('name');
		$user->save();

		$this->response(array(
			'userId' => $user->id
		));
	}

	public function delete_index()
	{
		$result = 'false';

		// try to find our user record
		$user = Model_User::find('all',array(
			'where' => Input::get()
		));
		foreach($user as $u) {
			$status = $u->delete();
			$result = 'true';
		}

		$this->response(array(
			'status' => $result
		));
	}
	
}

?>