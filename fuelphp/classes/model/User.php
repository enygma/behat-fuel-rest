<?php

class Model_User extends \Orm\Model
{
	protected static $_properties = array('name','id');
	protected static $table_name = 'user';
}

?>