<?php


class Controller_company extends Controller_Base
{
	public function action_index()
	{
		$this->template->title = '会社概要';
		$this->template->content = View::forge('company', $this->data);
	}
}
