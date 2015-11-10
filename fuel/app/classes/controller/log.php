<?php

class Controller_Log extends Controller_Users
{

	public function action_index()
	{

		$count = Model_Log::count([]);

		$config= [
			'pagination_url'=>"",
			'uri_segment'=>"p",
			'num_links'=>9,
			'per_page'=>100,
			'total_items'=>$count,
		];

		$this->data["pager"] = Pagination::forge('mypagination', $config);

		$logs = Model_Log::find("all", [
			"order_by" => [
				["id", "desc"]
			],
			"limit" => $this->data["pager"]->per_page,
			"offset" => $this->data["pager"]->offset

		]);

		$this->template->title = __("access_log");
		$view = View::forge('log', $this->data);
		$view->set_safe("logs", $logs);
		$this->template->content = $view;
	}
}
