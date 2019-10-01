<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller{

	private $em;

	public function __construct(){
		parent::__construct();
		$this->load->library('doctrine');
		$this->em = $this->doctrine->em;
	}

	public function index(){
		$this->load->view('head', array('tituloPagina' => "Login"));
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}

	public function efetuarLogin(){

	}
}