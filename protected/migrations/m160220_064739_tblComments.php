<?php

class m160220_064739_tblComments extends CDbMigration
{
	public function up()
	{
		$this->createTable('comment', array(
'id' => 'int(11)NOT NULL',
'id_type' => 'int(11) NOT NULL',
'content' => 'text NOT NULL',
'create_user_id' => 'int(11) DEFAULT NULL',
), 'ENGINE=InnoDB');
		$this->addPrimaryKey('PRIMARY','comment',array('id','id_type'));
	}
	

	public function down()
	{
		$this->dropTable('comment');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}