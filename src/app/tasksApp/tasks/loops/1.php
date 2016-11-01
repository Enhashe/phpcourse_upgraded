<?php
function sayHelloWorld($count = 1)
{
	$result = NULL;
	for ($i = 0; $i < $count[0]; $i++) {
		$result .= 'Hello World!<br>';
	}
	return $result;
}

$description = 'Вывести 10 раз Hello World.';
//$inputData = '$count = 10';
//$result = sayHelloWorld(10);

function taskFunction($data, $dbConnection)
{
	$readyData = (!empty($data)) ? sayHelloWorld($data) : sayHelloWorld(1) ;
	return $readyData;
}