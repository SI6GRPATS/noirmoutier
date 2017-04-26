<?php

  if(isset($_SESSION["logged"])  == TRUE ){

?>
 <!-- Modal Structure -->
  <div id="modalsign" class="modal">
    <div class="modal-content">
      <h4>Mon compte <?php $_SESSION["mail"] ?></h4> 
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
        <input type="text" name="mail" placeholder="addresse email">
        <input type="password" name="mdp" placeholder="mot de passe">
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