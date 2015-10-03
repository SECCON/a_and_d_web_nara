<?php

class Controller_Admin extends Controller_Base
{
	public function before()
	{
		parent::before();
		$this->template = View::forge("admin/template");

		$this->template->user = Model_User::find("first", [
			"where" => [
				["login_hash", Cookie::get("ad_user")],
				["deleted_at", 0],
				["group_id", 100]
			]
		]);

		if($this->template->user == null)
		{
			Response::redirect('/admin/signin');
		}
	}

	public function action_index()
	{
		$this->data["topics"] = Model_Topic::find("all", [
			"where" => [
				["deleted_at", 0],
			],
			"order_by" => [
				["id", "desc"]
			],
			"limit" => 5
		]);

		$this->data["inquiries"] = Model_Inquiry::find("all", [
			"where" => [
				["deleted_at", 0]
			],
			"order_by" => [
				["id", "desc"]
			],
			"limit" => 5

		]);

		$this->template->title = 'ダッシュボード';
		$this->template->content = View::forge('admin/index', $this->data);
	}
}
