<!-- Vue -->
	<div class="container">
		<div class="row" style="margin-top: 20px;">
			<div class="col" style="padding-left: 0px;">
				<h1 id="iti" style="color:#301558;">Administration des villes</h1>
				<div class="col-1">
					<div class="custom-divider divider divider-small" style="margin-left: -20px;">
					<hr>
					</div>
				</div>
			</div>
		</div>
		<table class="table table-striped">
		  <thead>
			<tr>
			  <th scope="col">id</th>
			  <th scope="col"></th>
			  <th scope="col">Nom ville</th>
			  <th scope="col">Action</th>
			</tr>
			<tbody>
			<?php
			foreach ($villes as $ville) {
				echo "<tr>";
				echo "<td scope='row'>".$ville["id"]."</td>";
				echo "<td><img width=50 src='/routard/img/ville/".$ville["blason"]."' / ></td>";
				echo "<td>".$ville["nomville"]."</td>";
				echo "<td>";
				echo " <a href='/routard/villeadmin/ajoutmaj/".$ville["id"]."'><i class='fas fa-edit'></i></a> ";
				echo " <a href='/routard/villeadmin/suppr/".$ville["id"]."' onclick=\"return confirm('Voulez vous vraiment supprimer cette ville?');\"><i class='fas fa-trash-alt'></i></a>"; 
				echo "</td>";
				echo "</tr>";
			}
			echo "<tr>";
			echo "<td scope='row'><a href='/routard/villeadmin/ajoutmaj'><i class='fas fa-plus'></i></a></td>";
			echo "<td>...</td>";
			echo "<td>...</td>";
			echo "</tr>";
			?>
			</tbody>
		  </thead>
		</table>		
	</div>
	
	