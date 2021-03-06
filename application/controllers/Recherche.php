<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recherche extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		$this->load->view('jointures/header');
		$data['gettab'] = $this->Noirmoutier_model->listSports();
		$data['sports'] = $this->Noirmoutier_model->listSports();
		$data['niveaux'] = $this->Noirmoutier_model->listNiveaux();
		$data['stages'] = $this->Noirmoutier_model->listStages();
		$this->load->view('recherche',$data);
		$this->load->view('jointures/footer');
		$this->load->view('jointures/modals');
	}
}

