	<div class="container">
		<div class="row" style="margin-top: 20px;">
		  <div class="col" style="padding-left: 0px;">
			<h1 id="contact">Déconnexion</h1>
			<div class="col-1">
				<div class="custom-divider divider divider-small my-3"  style="margin-left: -20px;">
					<hr>
				</div>
			</div>
			<form method="POST" action="/routard/connexion/deconnect" class="needs-validation" novalidate>
			  <div class="form-row">
				  <input type="hidden" name="deco" value="deco" />
			  <?php
				echo '<div class="alert alert-success" role="alert">';
				echo "Bonjour ".$_SESSION["prenom"]." ".$_SESSION["nom"];
				echo '</div>';
			  ?>
			  </div>
				  

			  <input class="btn btn-primary" type="submit" value="Se déconnecter" />
			</form>
			<a href="#retour" style="float: right;"><i class="fas fa-chevron-up"></i></a>
		  </div>		 
		</div>
	</div>