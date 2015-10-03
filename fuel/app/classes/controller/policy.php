<?php


class Controller_policy extends Controller_Base
{
	public function action_index()
	{
		$this->template->title = 'プライバシーポリシー';
		$this->template->content = View::forge('policy', $this->data);
	}
}
