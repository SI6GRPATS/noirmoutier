<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Noirmoutier_model extends CI_Model {
        
        public function __construct() {
            parent::__construct();
             
            $this->load->database('noirmoutier');
        }
        /*public function connectionDB() {
            $dsn = "mysql:host=localhost;dbname=noirmoutier";
            $user = "root" ;
            $mdp = "mysql" ;
            
            $option = array (PDO_ATTR_INIT_COMMAND => "set name utf8"); 
            
            $connexion = new PDO ($dsn,$user,$mdp,$option);
            return $connexion ;
        }
        */
        public function connectionCitoyen($mail,$mdp) {
            if($this->db->select('mdp')
               ->where(array ('mail'=>$mail,'mdp'=>$mdp))
               ->get('Citoyen')->num_rows() == 1) {
            	return TRUE;
            } 
            else  {
            return FALSE; 
            } 
        }
	
	public function getNomAdhrent($mail) {
           $nom = $this->db->select('nom')->where(array('mail'=>$mail));
            return $nom ;
        }
	
	public function addCitoyen($nom,$prenom,$mail,$mdp,$num,$adresse,$dept,$commune){
    
                $addCitoyen = array(
                     'nom' => '$nom',
                     'prenom' => '$prenom',
                     'mail' => '$mail',
                     'mdp' => '$mdp',
                     'numRue'=>'$num',
                     'adresse'=>'$adresse',
                     'departement'=>'$dept',
                     'commune'=>'$commune'
             );
             $verifInsertCitoyen=$this->db->insert('Citoyen', $addCitoyen);

             if($verifInsertCitoyen){
                 return true;
             }else{
                 return false;
             }

        function login($username, $password){
            
            $this -> db -> select('mail, mdp');
            $this -> db -> from('Citoyen');
            $this -> db -> where('mail', $username);
            $this -> db -> where('mdp', $password);
            $this -> db -> limit(1);

            $query = $this -> db -> get();

            if($query -> num_rows() == 1)
            {
                return $query->result();
            }
            else
            {
                return false;
            }
  
        }

	public function listSports(){
	
		$query = $this->db->query('SELECT libelle FROM Sport');

		return $query->result();
	
	}

    public function listNiveaux(){
	
		$query = $this->db->query('SELECT niveau FROM Niveau');

		return $query->result();
	
	}

    public function listStages(){
	
		$query = $this->db->query('SELECT * FROM Stage INNER JOIN Sport ON Stage.idSport = Sport.id INNER JOIN Niveau ON Stage.idNiveauStage = Niveau.id ORDER BY nomSalle desc');

		return $query->result();
	
	}


}
