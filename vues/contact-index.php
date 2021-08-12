	<div class="container">
		<div class="row" style="margin-top: 20px;">
		  <div class="col" style="padding-left: 0px;">
			<h1 id="contact">Contact</h1>
			<div class="col-1">
				<div class="custom-divider divider divider-small my-3"  style="margin-left: -20px;">
					<hr>
				</div>
			</div>
			<?php 
			if (isset($message["success"])) {
				echo '<div class="alert alert-success" role="alert">';
				echo $message["success"];
				echo '</div>';
			} else {
				if (isset($message["danger"])) {
					echo '<div class="alert alert-danger" role="alert">';
					echo $message["danger"];
					echo '</div>';
				}
			?>
			<form method="POST" action="/routard/contact" class="needs-validation" novalidate>
			  <div class="form-row">
				<div class="col-md-6 mb-3">
				  <label for="validationCustom01">Nom</label>
				  <input type="hidden" name="id" >
				  <input type="text" name="nom" class="form-control" id="validationCustom01" value="" required>
				  <div class="valid-feedback">
					Ok
				  </div>
				</div>
				<div class="col-md-6 mb-3">
				  <label for="validationCustom02">Prénom</label>
				  <input type="text" name="prenom" class="form-control" id="validationCustom02" value="" required>
				  <div class="valid-feedback">
					Ok
				  </div>
				</div>
			  </div>				  
			  <div class="form-row">
				<div class="col-md-12 mb-6">
				  <label for="validationCustom01">Rue</label>
				  <input type="text" name="rue" class="form-control" id="validationCustom01" value="" required>
				  <div class="valid-feedback">
					Ok
				  </div>
				</div>
			  </div>
			  <div class="form-row">
			    <div class="col-md-3 mb-3">
				  <label for="validationCustom05">Code Postal</label>
				  <input type="text" name="cp" class="form-control" id="validationCustom05" required>
				  <div class="invalid-feedback">
					Veuillez saisir le Code Postal
				  </div>
				</div>
				<div class="col-md-6 mb-3">
				  <label for="validationCustom03">Ville</label>
				  <input type="text" name="ville" class="form-control" id="validationCustom03" required>
				  <div class="invalid-feedback">
					Veuillez saisir la ville
				  </div>
				</div>
				<div class="col-md-3 mb-3">
				  <label for="validationCustom04">Sexe</label>
				  <select name="sexe" class="custom-select" id="validationCustom04" required>
					<option selected disabled value="">Choisissez...</option>
					<option value="H">Homme</option>
					<option value="F">Femme</option>
				  </select>
				  <div class="invalid-feedback">
					Veuillez saisir le sexe.
				  </div>
				</div>
			  </div>
			  <div class="form-row">
				<div class="col-md-6 mb-3">
				  <label for="validationCustom01">Téléphone</label>
				  <input type="text" name="tel" class="form-control" id="validationCustom01" value="" required>
				  <div class="valid-feedback">
					Ok
				  </div>
				</div>
				<div class="col-md-6 mb-3">
				  <label for="validationCustom02">Email</label>
				  <input type="text" name="email" class="form-control" id="validationCustom02" value="" required>
				  <div class="valid-feedback">
					Ok
				  </div>
				</div>
			  </div>
			  <div class="form-row">
				<div class="col-md-12 mb-3">
					<label for="exampleFormControlTextarea1">Message</label>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
				</div>
				<div class="valid-feedback">
					Ok
				</div>
			  </div>
			  <div class="form-group">
				<div class="form-check">
				  <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
				  <label class="form-check-label" for="invalidCheck">
					Accepter les conditions sur le RGPD
				  </label>
				  <div class="invalid-feedback">
					Vous devez cocher les CGU du RGPD.
				  </div>
				</div>
			  </div>
			  <button class="btn btn-primary" type="submit">Valider</button>
			</form>
			<?php }?>

			<script>
			// Example starter JavaScript for disabling form submissions if there are invalid fields
			(function() {
			  'use strict';
			  window.addEventListener('load', function() {
				// Fetch all the forms we want to apply custom Bootstrap validation styles to
				var forms = document.getElementsByClassName('needs-validation');
				// Loop over them and prevent submission
				var validation = Array.prototype.filter.call(forms, function(form) {
				  form.addEventListener('submit', function(event) {
					if (form.checkValidity() === false) {
					  event.preventDefault();
					  event.stopPropagation();
					}
					form.classList.add('was-validated');
				  }, false);
				});
			  }, false);
			})();
			</script>
			<a href="#retour" style="float: right;"><i class="fas fa-chevron-up"></i></a>
		  </div>		 
		</div>
	</div>