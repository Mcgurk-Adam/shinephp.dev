<?php

require_once 'model/Page.php';

$page = new Page('Tutorials', 'view/documentation.php');
$page->display(array(
	'side_title' => 'ShinePHP Documentation',
	'side_nav_links' => array(
		array(
			'title' => 'ShinePHP 1.0.10',
			'links' => array(
				array(
					'title' => 'Crud',
					'href' => '/documentation/1.0.10/crud/'
				),
				array(
					'title' => 'HttpRequest',
					'href' => '/documentation/1.0.10/httprequest/'
				),
				array(
					'title' => 'HandleData',
					'href' => '/documentation/1.0.10/handledata/'
				),
			)
		),
		array(
			'title' => 'ShinePHP 2.3.0', 
			'links' => array()
		)
	)
));