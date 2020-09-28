<?php

class Page {

	function __construct($page_title, $view_path) {

		$this->page_title = $page_title;
		$this->view_file_path = $view_path;

	}

	function display($extra_html = array()) {

		include_once 'view/includes/header.php';
		include_once $this->view_file_path;
		include_once 'view/includes/footer.php';

	}

}
