<?php

namespace Fuel\Migrations;

class Add_deleted_at_to_customers
{
	public function up()
	{
		\DBUtil::add_fields('customers', array(
			'deleted_at' => array('constraint' => 11, 'type' => 'int'),

		));
	}

	public function down()
	{
		\DBUtil::drop_fields('customers', array(
			'deleted_at'

		));
	}
}