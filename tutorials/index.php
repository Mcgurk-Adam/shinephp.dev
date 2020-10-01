<?php

require_once 'model/Page.php';

$page = new Page('Tutorials', 'view/tutorials.php');
$page->display(array(
	'side_title' => 'ShinePHP Tutorials',
	'side_nav_links' => array('something')
));