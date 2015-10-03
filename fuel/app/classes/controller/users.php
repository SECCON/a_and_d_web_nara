<?php

class Controller_Users extends Controller_Base
{
	public function before()
	{
		parent::before();

		if($this->template->user == null)
		{
			Response::redirect('signin');
		}
	}

	public function action_index()
	{
		$this->template->title = 'トップページ';
		$this->template->content = View::forge('index', $this->data);
	}
}
