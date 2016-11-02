<?php
/**
* 
*/
class MyClassInit
{
	public $result = 'MyClass class has initialized !';
	
	function __construct()
	{
		return $this->result;
	}
}


/*function taskFunction($data, $dbConnection)
{
	return $output = new MyClassInit();
}*/