<?php

class Model_Customer extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'user_id',
		'name',
		'kana',
		'email',
		'tel',
		'zip_code',
		'prefecture_id',
		'address',
		'deleted_at' => [
			"default" => 0
		],
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_update'),
			'mysql_timestamp' => false,
		),
	);

	protected static $_table_name = 'customers';

	public function safeDelete()
	{
		$this->deleted_at = time();
		$this->save();
	}

}
