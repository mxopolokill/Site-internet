<!-- Vue -->
	<div class="container">
		<div class="row" style="margin-top: 20px;">
			<div class="col" style="padding-left: 0px;">
				<h1 id="iti" style="color:#301558;">Notre sélection <?=$conjonction?><?=$type["libtype"]?>s de <?=$ville["nomville"]?></h1>
				<div class="col-1">
					<div class="custom-divider divider divider-small" style="margin-left: -20px;">
					<hr>
					</div>
				</div>
			</div>
		</div>
		<?php
		$i=1;
		foreach ($hrds as $hrd) {
		?>
		<div class="row">
			<div class="col">
				<div class="card mb-3">
					<div class="row">
						<div class="col-md-4">
						  <div id="carouselExampleIndicators<?=$i?>" class="carousel slide" data-ride="carousel">
							  <ol class="carousel-indicators">
								<li data-target="#carouselExampleIndicators<?=$i?>" data-slide-to="0" class="active"></li>
								<li data-target="#carouselExampleIndicators<?=$i?>" data-slide-to="1"></li>
							  </ol>
							  <div class="carousel-inner">
								<div class="carousel-item active">
								  <img src="/routard/img/<?=$hrd["image"]?>" class="d-block w-100" alt="<?=$hrd["alt"]?>">
								</div>
								<div class="carousel-item">
								  <img src="/routard/img/<?=$hrd["image2"]?>" class="d-block w-100" alt="<?=$hrd["nom"]?>">
								</div>
							  </div>
							  <a class="carousel-control-prev" href="#carouselExampleIndicators<?=$i?>" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							  </a>
							  <a class="carousel-control-next" href="#carouselExampleIndicators<?=$i?>" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							  </a>
						  </div>
						</div>
						<div class="col-md-6">
						  <div class="card-body" style="padding-top:10px;">
							<h2 class="card-title"><?=$hrd["nom"]?></h2>
							<p class="card-text" style="font-size:25px;">Hôtel de tourisme 3 étoiles</p>
							<p class="card-text" style="font-size:20px;"><small class="text-muted">Hôtel simple, chambres lumineuses, restaurant, bar et Wi-Fi/parking gratuits.</small></p>
						  </div>
						</div>
						<div class="col-md-2" style="background-color:#301558;">
						  <div class="card-body" style="padding-top:20px;">
							<p style="color:white;"><i class="bi bi-telephone"> +33471022222</i></p>
							<p style="color:white;"><i class="bi bi-envelope"> <?=$hrd["rue"]?><br><?=$hrd["cp"]?> <?=$hrd["villehrd"]?></i></p>
							<p style="color:white;">Mail : <a href="https://all.accor.com/hotel/0972/index.fr.shtml?dateIn=&nights=&compositions=1&stayplus=false#origin=ibis" alt="Page de l'hôtel">Hôtel Ibis Le Puy en Velay Centre</a></p>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
			$i++;
		}
		?>
	</div>