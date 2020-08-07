<?php

final class Page {

	private $page_title;
	private $view_file_path;

	function __construct($page_title, $view_path) {

		$this->page_title = $page_title;
		$this->view_file_path = $view_path;

	}

	function display($extra_html = array()) {

		include_once $this->view_file_path;

	}

}
