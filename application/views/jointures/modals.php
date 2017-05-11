<?php

  if(isset($_SESSION["logged"])  == TRUE ){

?>
 <!-- Modal Structure -->
  <div id="modalsign" class="modal">
    <div class="modal-content">
      <h4>Mon compte</h4> 
      <p>A bunch of text</p>
    </div>
    <div class="modal">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>
<?php
  }else {
?>
 <!-- Modal Structure -->
  <div id="modalsign" class="modal" style="width:70%;">
    <div class="modal-content">
      
  <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s6"><a class="active" href="#login">Login</a></li>
        <li class="tab col s6"><a href="#register">S'Enrengistrer</a></li>
      </ul>
    </div>



    <div id="login" class="col s12">
    <div class="row">
      <br>
      <center><h4 class="title-modal">Se connecter</h4></center>
      <div class="row">
         <?php echo validation_errors(); ?>
       <?php echo form_open('verifyLogin'); ?> 
          <input class="input-options col l5 offset-l1" type="text" name="username" placeholder="adresse email" style="color: black !important;">
          <input class="input-options col l5 offset-l1" type="password" name="password" placeholder="mot de passe">
          <center><button type="submit" class="btn-large red" value="Login">Submit</button></center>
        </form> 
      </div>
    </div>
    </div>

    <div id="register" class="col s12">
    <div class="row">
      <br>
      <center><h4 class="title-modal">S'enrengistrer</h4></center>

      <form action="" method="post">
        <div class="row">
          <input type="text" name="username" placeholder="Nom" class="col l5">
          <input type="text" name="password" placeholder="Prénom" class="col l5 offset-l2">
        </div>
        <div class="row">
          <input type="text" name="mail" placeholder="Addresse email" class="col l5">
          <input type="password" name="mdp" placeholder="Mot de passe" class="col l5 offset-l2">
        </div>
        <div class="row">
          <input type="text" name="numrue" placeholder="Numéro de rue" class="col l5">
          <input type="password" name="adresse" placeholder="Adresse" class="col l5 offset-l2">
        </div>
        <div class="row">
          <input type="text" name="departement" placeholder="Département" class="col l5">
          <input type="password" name="commune" placeholder="Commune" class="col l5 offset-l2">
        </div>
        <button type="submit" class="btn-large red" value="Submit">Submit</button>
      </form>
    </div>
 </div>
      
    </div>
    <div class="modal">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>



  <div id="moncompte" class="modal" style="width:40%;">
    <div class="modal-content">
      

      <center><h4 class="title-modal">Mon Compte</h4></center>

    
      
    </div>
    <div class="modal">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>

<?php

  }
?>