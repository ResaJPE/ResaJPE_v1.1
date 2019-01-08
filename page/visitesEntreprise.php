<?php
include('template/head.php');
include('template/menu.php');
?>
	 
	 
	 <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
				  <?php
				  $i = 0;
				  $visites = visitesData_getAll();
				  //var_dump($nbVisites);
				  echo '<tr>
						<th>Entreprise</th>
						<th>Date</th>
						<th>Status</th>
						<th>Organisation</th>
						<th>Affluence</th>
						<th></th>
						</tr>';
				  foreach ($visites as $i){ ?>
					  
						<tr>
							<td><?= $i['NomEntreprise'] ?></td>
							<td><?= $i['date'] ?></td>
							<?php if($i['etat'] == 1){ ?>
							<td><span class="label label-bleu"><?= $i['Etat']?></span></td>
							<?php }
								if($i['etat'] == 2){ ?>
							<td><span class="label label-vert"><?= $i['Etat']?></span></td>
							<?php }
							
							?>
							<td><?= $i['choixService'] ?></td>
							<td>	<div class="progress progress-xs">
									<div <?php 								
									//On importe le nombre de réservations pour la visite
									$nbInscrits = visitesData_getNbVisitesForId($i['id']);
									$nbMaxInscrits = visitesData_getMaxInscrits($i['id']);
									$value = ($nbInscrits[0]['NbVisites']/$nbMaxInscrits[0]['nbPlacesMax'])*100;
									//Si value est inférieur à 30
									if($value<30){
										echo 'class="progress-bar progress-bar-vert" style = "width:'.$value.'%"';

									}
									//Si value est compris en 30 et 60
									elseif($value<70 AND $value>30){
										echo 'class="progress-bar progress-bar-orange" style = "width:'.$value.'%"';
									}
									//Si value est supérieur à 70
									elseif($value>70){
										echo 'class="progress-bar progress-bar-rouge" style = "width:'.$value.'%"';
									}
									  ?> ></div>
									</div>
							</td>
							<td style="text-align : center;"><a href = "index.php?controle=ficheReservation"class="btn btn-xs bg-blue btn-flat">Voir plus</a></td>
							
						</tr>
					  
				  <?php }
				    
				  ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
<?php 
include('template/footer.php'); 
?>
