	<div class="container">
		<div class="row" style="margin-top: 20px;">
		  <div class="col" style="padding-left: 0px;">
			<h1 id="contact">Connexion</h1>
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
			<form method="POST" action="/routard/connexion" class="needs-validation" novalidate>
			  <div class="form-row">
				<div class="col-md-6 mb-3">
				  <label for="validationCustom01">Login</label>
				  <input type="text" name="login" class="form-control" id="validationCustom01" value="" required>
				  <div class="valid-feedback">
					Ok
				  </div>
				</div>
				<div class="col-md-6 mb-3">
				  <label for="validationCustom02">Mot de passe</label>
				  <input type="password" name="mdp" class="form-control" id="validationCustom02" value="" required>
				  <div class="valid-feedback">
					Ok
				  </div>
				</div>
			  </div>				  

			  <button class="btn btn-primary" type="submit">Se connecter</button>
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