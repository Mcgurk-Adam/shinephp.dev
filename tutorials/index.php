<?php

require_once 'model/Page.php';

$page = new Page('Tutorials', 'view/tutorials.php');
$page->display(array(
	'side_title' => 'ShinePHP Tutorials',
	'side_nav_links' => array(
		array(
			'title' => 'ShinePHP 1.0.10',
			'links' => array(
				array(
					'title' => 'Setup your database connection',
					'href' => '/tutorials/1.0.10/setup-database-connection/'
				),
				array(
					'title' => 'Run a SELECT statement in the database',
					'href' => '/tutorials/1.0.10/read-data-from-database/'
				),
				array(
					'title' => 'Run a SELECT statement in the database with PDO variables',
					'href' => '/tutorials/1.0.10/read-data-from-database-pdo/'
				),
				array(
					'title' => 'Run an UPDATE statement with PDO variables',
					'href' => '/tutorials/1.0.10/execute-update-statement/'
				),
			)
		),
		array(
			'title' => 'ShinePHP 2.3.0', 
			'links' => array()
		)
	)
));