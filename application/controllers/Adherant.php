fichier : application/controllers/ctrlAdherent.php*/
<?php
    class Adherent extends CI_Controller {
        
    
        
        public function connection($mail,$mdp) {
            
        

                if(isset($mail) && isset($mdp) && $mail != "" && $mdp != ""){
                        $this->load->database('noirmoutier');

                        $adherent = $this->noirmoutier_model->connectionAdherent($mail,$mdp);

                        if(count($adherent) !== false){
                            session_start();
                            $_SESSION = $adherent;
                            $this->load->view('acceuil') ;
                        }
                        else{
                            $data = ['connection'=>FALSE];
                            $this->load->view('connection') ;
                        }
                }
    
        }
    }                       
?>
