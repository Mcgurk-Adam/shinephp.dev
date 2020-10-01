<?php

require_once 'model/Page.php';

$page = new Page('Tutorials', 'view/documentation.php');
$page->display(array(
	'side_title' => 'ShinePHP Documentation',
	'side_nav_links' => array(
		array('title' => 'ShinePHP 1.0.10', 'links' => array()),
		array('title' => 'ShinePHP 2.3.0', 'links' => array())
	)
));