<?php

class Controller_Admin_Signin extends Controller_Base
{
	public function before()
	{
		parent::before();

		// check login
		if(Input::post("email", null) != null)
		{
			$email = Input::post("email", null);
			$password = md5(Input::post("password", null));

			$user = Model_User::find("first",[
				"where" => [
					["email", $email],
					["password", $password],
				]
			]);

			if($user != null)
			{
				$user = Model_User::find("first",[
					"where" => [
						["email", $email],
						["group_id", 100],
					],
					"order_by" => [
						["id", "asc"]
					]
				]);
			}

			if($user == null)
			{
				Response::redirect('/admin/signin?error=1');
			}
			else
			{
				$user->login_hash = sha1($user->id . time());
				$user->last_login = time();
				$user->save();

				Cookie::set("ad_user", $user->login_hash);

				Response::redirect('/');
			}
		}
	}

	public function action_index()
	{
		$this->template->title = 'ログイン';
		$this->template->content = View::forge('admin/signin');
	}
}
