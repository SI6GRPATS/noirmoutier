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
            }else{
                
            }
        }
        
        public function inscription(){
        
		$nom=$this->input->post('nom');
		$prenom=$this->input->post('prenom');
		$mail=$this->input->post('mail');
		$mdp=$this->input->post('mdp');
		$num=$this->input->post('numRue');
		$adresse=$this->input->post('adresse');
		$dept=$this->input->post('dept');
		$commune=$this->input->post('commune');

		$sport=$this->input->post('sport');
		$niveau=$this->input->post('niveau');


		$newCitoyen=$this->noirmoutier_model->addCitoyen($nom,$prenom,$mail,$mdp,$num,$adresse,$dept,$commune);
		$newPratiquer=$this->noirmoutier_model->setPratiquer($sport,$mail,$nom,$prenom,$niveau);

		if($newCitoyen && $newPratiquer){
		    $this->load->view('Homepage');

		}else{
		     $this->load->view('vueAdhesionSite');
		}
   	 }
}

