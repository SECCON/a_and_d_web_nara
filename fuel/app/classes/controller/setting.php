<?php

class Controller_Setting extends Controller_Users
{

	public function action_index()
	{
		if($this->template->user == null)
		{
			Response::redirect(404);
		}

		$this->data["errors"] = [];

		$this->data["prefectures"] = Config::get("prefectures.names");

		if(Input::post("email", null) !== null && Security::check_token())
		{
			if(count($this->data["errors"]) == 0)
			{
				$this->template->user->email = Input::post("email", null);
				if(Input::post("password", null) != null)$this->template->user->password = md5(Input::post("password", null));
				$this->template->user->name = Input::post("name", null);
				$this->template->user->kana = Input::post("kana", null);
				$this->template->user->prefecture_id = (int)Input::post("prefecture_id", 0);
				$this->template->user->address = Input::post("address", null);
				$this->template->user->zip_code = Input::post("zip_code", null);
				$this->template->user->tel = Input::post("tel", null);

				if(move_uploaded_file($_FILES['file']['tmp_name'], DOCROOT."/files/" . $_FILES['file']['name']))
				{
					$this->template->user->logo = $_FILES['file']['name'];
				}

				$this->template->user->save();
			}
		}

		$this->data["email"] = $this->template->user["email"];
		$this->data["name"] = $this->template->user["name"];
		$this->data["kana"] = $this->template->user["kana"];
		$this->data["prefecture_id"] = $this->template->user["prefecture_id"];
		$this->data["address"] = $this->template->user["address"];
		$this->data["zip_code"] = $this->template->user["zip_code"];
		$this->data["tel"] = $this->template->user["tel"];
		$this->data["logo"] = $this->template->user["logo"];

		$this->template->title = __("account_setting");
		$this->template->content = View::forge('setting', $this->data);
	}
}
