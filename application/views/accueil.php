<?php
$urlassets = base_url('application/assets/');
?>
		<div class="slider">
			<ul class="slides">
			<li>
				<img src="<?php echo $urlassets; ?>images/1.jpeg"> <!-- random image -->
				<div class="caption center-align">
				<h3>This is our big Tagline!</h3>
				<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
				</div>
			</li>
			<li>
				<img src="<?php echo $urlassets; ?>images/2.jpeg"> <!-- random image -->
				<div class="caption left-align">
				<h3>Left Aligned Caption</h3>
				<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
				</div>
			</li>
			<li>
				<img src="<?php echo $urlassets; ?>images/3.jpeg"> <!-- random image -->
				<div class="caption right-align">
				<h3>Right Aligned Caption</h3>
				<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
				</div>
			</li>
			<li>
				<img src="<?php echo $urlassets; ?>images/4.jpeg"> <!-- random image -->
				<div class="caption center-align">
				<h3>This is our big Tagline!</h3>
				<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
				</div>
			</li>
			</ul>
		</div>
      </div>
	  <br />
	  <br />
	  <br />
	  <div class="container">
		<div class="row">
			<div class="input-field col s6">
				<select>
				<option value="" disabled selected>Sport</option>
				<option value="1">Tennis</option>
				<option value="2">Volley-Ball</option>
				<option value="3">Hand-Ball</option>
				<option value="2">Basket-Ball</option>
				<option value="3">Saut en hauteur</option>
				<option value="2">Aviron</option>
				<option value="3">Canne de combat</option>
				
				</select>
				<label>Choisir son sport</label>
			</div>
			<div class="input-field col s6">
				<select>
				<option value="" disabled selected>Niveaux</option>
				<option value="1">Débutant</option>
				<option value="2">Intermédiaire</option>
				<option value="3">Professionnelle</option>
				</select>
				<label>Choisir son niveau</label>
			</div>
		</div>

		<div class="row">
			<center><a class="waves-effect waves-light btn"><i class="material-icons left">cloud</i>Chercher</a></center>
		</div>

		<div class="row">
			<table class="bordered striped highlight centered responsive-table">
				<thead>
				<tr>
					<th>Stage</th>
					<th>Début</th>
					<th>Fin</th>
					<th>Salle</th>
					<th>S'inscrire</th>
				</tr>
				</thead>

				<tbody>
				<tr>
					<td>Academic football</td>
					<td>17/07/17</td>
					<td>30/08/17</td>
					<td>Jean Jaures</td>
					<td><a href="#"><i class="material-icons">add</i></a></td>
				</tr>
				<tr>
					<td>Academic football</td>
					<td>17/07/17</td>
					<td>30/08/17</td>
					<td>Jean Jaures</td>
					<td><a href="#"><i class="material-icons">add</i></a></td>
				</tr>
				<tr>
					<td>Academic football</td>
					<td>17/07/17</td>
					<td>30/08/17</td>
					<td>Jean Jaures</td>
					<td><a href="#"><i class="material-icons">add</i></a></td>
				</tr>
				<tr>
					<td>Academic football</td>
					<td>17/07/17</td>
					<td>30/08/17</td>
					<td>Jean Jaures</td>
					<td><a href="#"><i class="material-icons">add</i></a></td>
				</tr>
				</tbody>
			</table>
		</div>
	  </div>
