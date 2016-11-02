<?php

$config = [
	'db' => [
		'dsn' => 'mysql:host=localhost;dbname=myproject',
		'username' => 'vagrant',
		'password' => 'vagrant'
	],
	'router' => [
		'/' => [
			'controller' => 'IndexController',
			'action' => 'indexAction'
		],
		'/about' => [
			'controller' => 'IndexController',
			'action' => 'aboutAction'
		],
		'/tasks/([a-zA-Z0-9]{1,})/([0-9]{1,})' => [
			'controller' => 'TaskController',
			'action' => 'indexAction',
			'parameters' => ['section', 'task']
		],
		'/contacts' => [
			'controller' => 'IndexController',
			'action' => 'contactsAction'
		],
		'/classestask/([0-9]{1,})' => [
			'controller' => 'ClassesTaskController',
			'action' => 'classesAction',
			'parameters' => ['section', 'task']
		]
	],
	'path_to_views' => '/src/app/tasksApp/view/'
];

return $config;
