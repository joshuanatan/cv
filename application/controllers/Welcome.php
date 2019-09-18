<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		$this->load->view("req/head");
		$this->load->view("req/navbar");        
		$this->load->view("welcome/slideshow");
		$this->load->view("welcome/about");
		$this->load->view("welcome/belief");
		$this->load->view("welcome/project");
		$this->load->view("welcome/message");
		$this->load->view("req/footer");
		$this->load->view("req/script");
		$this->load->view("req/close");
	}
}
?>
