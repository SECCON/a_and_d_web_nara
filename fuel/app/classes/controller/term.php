<?php


class Controller_term extends Controller_Base
{
	public function action_index()
	{
		$this->template->title = __("term");
		$this->template->content = View::forge('term', $this->data);
	}
}
