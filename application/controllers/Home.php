<?php
// Fichier : application/controllers/Home.php

class Home extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$data = ['nom'=>'Dupont', 'prenom'=>'Marc'];
		$this->load->view('accueil') ;
		$this->load->view('liste', $data);
	}
}
?>