<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {

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
	public function index(){
		$this->load->view('jointures/header');
		$this->load->view('accueil');
		$this->load->view('jointures/footer');
		$this->load->view('jointures/modals');
	}
	public function connection() {
            $mail = $this->input->get('mail');
            $mdp = $this->input->get('mdp');

            $resultat = $this->Noimoutier_model->connectionCitoyen($mail,$mdp);
            if($resultat==TRUE){
                $nom = $this->Noimoutier_model->getNomAdhrent($mail);
                start_session ;
                $_SESSION['Auth']['nom']=$nom;
                $this->load->view('accueil.php');
            }
	    else{
                $this->load->view('');
            }
        }
        
        public function inscription(){
        
		$nom=$this->input->get('nom');
		$prenom=$this->input->get('prenom');
		$mail=$this->input->get('mail');
		$mdp=$this->input->get('mdp');
		$num=$this->input->get('numRue');
		$adresse=$this->input->get('adresse');
		$dept=$this->input->get('dept');
		$commune=$this->input->get('commune');


		$newCitoyen=$this->Noirmoutier_model->addCitoyen($nom,$prenom,$mail,$mdp,$num,$adresse,$dept,$commune);

		if($newCitoyen){
		    $this->load->view('acceuil.php');

		}
		else{
		     $this->load->view('');
		}
}

