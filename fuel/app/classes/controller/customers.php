<?php

class Controller_Customers extends Controller_Users
{

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
				["deleted_at", 0],
				["user_id", $this->template->user->id]
			],
			"order_by" => [
				["id", "desc"]
			],
			"limit" => $this->data["pager"]->per_page,
			"offset" => $this->data["pager"]->offset

		]);

		$this->template->title = '顧客一覧';
		$this->template->content = View::forge('customers/index', $this->data);
	}

	public function action_edit($id = 0)
	{
		$this->data["prefectures"] = Config::get("prefectures.names");

		$customer = Model_Customer::find($id, [
			"where" => [
				["deleted_at", 0]
			]
		]);

		if($customer == null)
		{
			$customer = Model_Customer::forge();
			$customer->user_id = $this->template->user->id;

			$this->template->title = '顧客登録';
		}
		else
		{
			$this->template->title = '顧客更新';
		}

		if(Input::post("email", null) !== null && Security::check_token())
		{

			$customer->email = Input::post("email", null);
			$customer->name = Input::post("name", null);
			$customer->kana = Input::post("kana", null);
			$customer->prefecture_id = (int)Input::post("prefecture_id", 0);
			$customer->tel = Input::post("tel", null);
			$customer->address = Input::post("address", null);
			$customer->zip_code = Input::post("zip_code", null);

			$customer->save();

			Response::redirect("customers");
		}

		$this->data["email"] = $customer["email"];
		$this->data["name"] = $customer["name"];
		$this->data["kana"] = $customer["kana"];
		$this->data["tel"] = $customer["tel"];
		$this->data["prefecture_id"] = $customer["prefecture_id"];
		$this->data["address"] = $customer["address"];
		$this->data["zip_code"] = $customer["zip_code"];

		$this->template->content = View::forge('customers/form', $this->data);
	}
}
