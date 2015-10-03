<?php


class Controller_term extends Controller_Base
{
	public function action_index()
	{
		$this->template->title = '利用規約';
		$this->template->content = View::forge('term', $this->data);
	}
}
