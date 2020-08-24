<?php

require_once 'model/Page.php';

$page = new Page('Home', 'view/home.php');
$page->display();