<?php
declare(strict_types=1);

require_once 'model/Page.php';

$page = new Page('Home', 'view/home.php');
$page->display();