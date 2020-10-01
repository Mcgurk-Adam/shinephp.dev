<?php

require_once 'model/Page.php';

$page = new Page('Tutorials', 'view/tutorials.php');
$page->display();