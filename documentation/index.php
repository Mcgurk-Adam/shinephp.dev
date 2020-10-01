<?php

require_once 'model/Page.php';

$page = new Page('Tutorials', 'view/documentation.php');
$page->display();