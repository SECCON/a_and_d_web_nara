<?php


class Controller_top extends Controller_Users
{
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

		$this->template->title = __("top");
		$this->template->content = View::forge('top', $this->data);
	}
}
