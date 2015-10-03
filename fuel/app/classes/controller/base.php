<?php


class Controller_Base extends Controller_Template
{
	public $data = [];

	public function before()
	{
		// logout
		if((int)Input::get("logout", 0) == 1)
		{
			Cookie::delete("ad_user");
			Response::redirect('signin');
		}

		parent::before();
		$this->template->user = Model_User::find("first", [
			"where" => [
				["login_hash", Cookie::get("ad_user")],
				["deleted_at", 0],
			]
		]);
	}
}
