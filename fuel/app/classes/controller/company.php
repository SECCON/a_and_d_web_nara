<?php


class Controller_company extends Controller_Base
{
	public function action_index()
	{
		$this->template->title = __("company");
		$this->template->content = View::forge('company', $this->data);
	}
}
