<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Doctrine\ORM\Mapping as ORM;

class Teste_model extends CI_Model{

	private $teste;

	public function __construct(){
		parent::__construct();
	}

}