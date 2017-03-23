<?php
// Fichier : application/controllers/Accueil.php

class Accueil extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->helper('url') ;
		$this->load->view('jointures/header') ;
		$this->load->view('accueil') ;
		$this->load->view('jointures/footer') ;	
	}
}
?>
