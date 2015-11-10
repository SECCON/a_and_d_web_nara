<?php

class Controller_Admin_Customers extends Controller_Base
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

	}

	public function action_index()
	{
		if(Input::get("del_id", 0) != 0)
		{
			$del = Model_Customer::find(Input::get("del_id", 0));
			if($del != null)
			{
				$del->delete();
			}
		}

		$count = Model_Customer::count([
			"where" => [
				["deleted_at", 0]
			]
		]);

		$config= [
			'pagination_url'=>"",
			'uri_segment'=>"p",
			'num_links'=>9,
			'per_page'=>20,
			'total_items'=>$count,
		];

		$this->data["pager"] = Pagination::forge('mypagination', $config);

		$this->data["customers"] = Model_Customer::find("all", [
			"where" => [
				["deleted_at", 0]
			],
			"order_by" => [
				["id", "desc"]
			],
			"limit" => $this->data["pager"]->per_page,
			"offset" => $this->data["pager"]->offset

		]);

		$this->template->title = __("customers");
		$this->template->content = View::forge('admin/customers/index', $this->data);
	}

	public function action_detail($id = 0)
	{
		$this->data["prefectures"] = Config::get("prefectures.names");

		$this->data["customer"] = Model_Customer::find($id, [
			"where" => [
				["deleted_at", 0]
			]
		]);

		if($this->data["customer"] == null)
		{
			Response::redirect("admin/customers");
		}
		else
		{

		}

		$this->template->title = __("customer");
		$this->template->content = View::forge('admin/customers/detail', $this->data);
	}
}
