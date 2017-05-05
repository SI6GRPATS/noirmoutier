//aplication/models/Normoutier_model.php
<?php
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
        public function connectionAdherent($mail,$mdp) {
            //$connexion = connexionBD() ;
            
            //if($connexion !== FALSE){
        $requete  = "select nom,prenom" ;
		$requete .= " from Citoyen" ;
		$requete .= " and mail = '".$mail."'" ;
		$requete .= " and mdp = '".$mdp."'" ;
			
		$resultat = $this->query($requete) ;
			
		if($resultat->rowCount() == 1){
			$resultat->setFetchMode(PDO::FETCH_ASSOC) ;
			$enregistrement = $resultat->fetch() ;
			$compte["nom"] = $enregistrement["nom"] ;
			$compte["prénom"] = $enregistrement["prenom"] ;
                        return $compte ;
		}
                else {
                     return false;
                                        
                }
			
            /*}
            else {
		return FALSE ;
            }*/
        }

	public function listSports(){
	
		$query = $this->db->query('SELECT libelle FROM Sport');

		return $query->result();
	
	}	
    }
