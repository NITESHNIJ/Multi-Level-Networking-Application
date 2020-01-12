<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
	  parent:: __construct();
		$this->load->helper('url_helper');
	}
	public function index()
	{
		//$this->load->view('welcome_message');
		$this->load->view('head');
		$this->load->view('body');
	}
	public function add_package(){
		$this->load->view('add_in_package');
	}

	public function view_package(){
		$this->load->view('view_package');
	}

	public function register_page(){
		$this->load->view('register_user_page');
	}

	public function manage_country(){
		$this->load->view('manage_country');
	}

	public function display(){
		$this->load->view('display');
	}
}
