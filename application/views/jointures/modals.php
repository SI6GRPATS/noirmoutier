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
  <div id="modalsign" class="modal" style="width:40%;">
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

      <form action="" method="post">
        <input class="input-options" type="text" name="mail" placeholder="adresse email">
        <input class="input-options" type="password" name="mdp" placeholder="mot de passe">
        <button type="submit" class="btn-large red" value="Submit">Submit</button>
      </form>
    </div>
    </div>

    <div id="register" class="col s12">
    <div class="row">
      <br>
      <center><h4 class="title-modal">S'enrengistrer</h4></center>

      <form action="" method="post">
        <div class="row">
          <input type="text" name="nom" placeholder="Nom" class="col l5">
          <input type="text" name="prenom" placeholder="Prénom" class="col l5 offset-l2">
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

<?php

  }
?>