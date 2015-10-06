<?php

namespace Fuel\Migrations;

class Add_user_id_to_customers
{
	public function up()
	{
		\DBUtil::add_fields('customers', array(
			'user_id' => array('constraint' => 11, 'type' => 'int'),

		));
	}

	public function down()
	{
		\DBUtil::drop_fields('customers', array(
			'user_id'

		));
	}
}