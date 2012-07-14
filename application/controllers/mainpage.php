<?php
class Mainpage extends CI_Controller{

	var $language;

	function __construct(){
		parent::__construct();
		$this->language = isset($_GET['hl']) ? $_GET['hl'] : 'trad_chinese';
	}
	
	function index(){
	
		//Language file
		$this->lang->load('main', $this->language);
		$string = array();
		$string = $this->lang->language;
	
		$this->load->view('mainpage', $string);
	}

}

?>