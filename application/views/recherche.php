<?php
$urlassets = base_url('application/assets/');

if($_GET){
	$data = array('gettab'=>array('sport'=>$_GET['sports'],'niveau'=>$_GET['niveau']));
	print_r($data);
}

?>
      </div>
	  <br />
	  <br />
	  <br />
	  <div class="container">
		<form method="GET" action="">
		<div class="row">
			<div class="input-field col s6">
				<select name="sports">
					<option value="" disabled selected>Sport</option>
					<?php 
						foreach($sports as $row){ 
							?>
								<option value="<?php echo $row->libelle; ?>"><?php echo $row->libelle; ?></option>
							<?php
						}
					?>
            	</select>
				<label>Choisir son sport</label>
			</div>
			<div class="input-field col s6">
				<select name="niveau">
					<option value="" disabled selected>Niveau</option>
					<?php 
						foreach($niveaux as $row){ 
							?>
								<option value="<?php echo $row->niveau; ?>"><?php echo $row->niveau; ?></option>
							<?php
						}
					?>
				</select>
				<label>Choisir son niveau</label>
			</div>
		</div>

		<div class="row">
			<center><button value="submit" class="waves-effect waves-light btn"><i class="material-icons left">cloud</i>Chercher</button></center>
		</div>
		</form>

		<div class="row">
			<table class="bordered striped highlight centered responsive-table">
				<thead>
				<tr>
					<th>Salle</th>
					<th>Lieu</th>
					<th>Sport</th>
					<th>Niveau</th>
					<th>Début</th>
					<th>Fin</th>
					<th>S'inscrire</th>
				</tr>
				</thead>

				<tbody>
					<?php 
						foreach($stages as $row){
							?>
							<tr>
								<td> <?php echo $row->nomSalle; ?> </td>
								<td> <?php echo $row->lieuSalle; ?> </td>
								<td> <?php echo $row->libelle; ?> </td>
								<td> <?php echo $row->niveau; ?> </td>
								<td> <?php echo $row->dateDebut; ?> </td>
								<td> <?php echo $row->dateFin; ?> </td>
								<td><a href="#"><i class="material-icons">add</i></a></td>
							<?php
						}
					?>
				</tbody>
			</table>
		</div>
	  </div>
