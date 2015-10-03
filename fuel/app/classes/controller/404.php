<?php


class Controller_404 extends Controller_Base
{
	public function action_index()
	{
		$this->template->title = '404';
		$this->template->content = View::forge('404', $this->data);
	}
}
