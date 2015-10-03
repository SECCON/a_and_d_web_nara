<?php


class Controller_index extends Controller_Base
{
	public function action_index()
	{
		$this->template->title = 'トップページ';
		$this->template->content = View::forge('index', $this->data);
	}
}
