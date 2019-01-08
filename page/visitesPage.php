<?php
include('template/head.php');
include('template/menu.php');
?>
	 <?php if ($_SESSION['type'] == 1){ ?>
	 
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
					  <?php if($i['isAccepted']){ ?>
					  <tr>
							<td><?= $i['NomEntreprise'] ?></td>
							<td><?= $i['date'] ?></td>
							<?php if($i['etat'] == 1){ ?>
							<td><span class="label label-bleu"><?= $i['Etat']?></span></td>
							<?php }
								if($i['etat'] == 2){ ?>
							<td><span class="label label-vert"><?= $i['Etat']?></span></td>
							<?php }
								if($i['etat'] == 3){ ?>
							<td><span class="label label-rouge"><?= $i['Etat']?></span></td>
						<?php } ?>
							<td><?= $i['choixService'] ?></td>
							<td>	<div class="progress progress-xs">
									<div <?php 								
									visitesControle_controlBar($i); ?> >
									</div>
									</div>
							</td>
							<td style="text-align : center;"><a href = "index.php?controle=ficheReservation"class="btn btn-xs bg-blue btn-flat">Voir plus</a></td>
							
						</tr>
						<?php } 
						 } ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
<?php 
include('template/footer.php'); 
?> <?php } if($_SESSION['type'] == 2){ ?>

	 <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
				  <?php
				  $i = 0;
				  $visites = $listeVisites;
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
								if($i['etat'] == 3){ ?>
							<td><span class="label label-rouge"><?= $i['Etat']?></span></td>
						<?php } ?>
							
							?>
							<td><?= $i['choixService'] ?></td>
							<td>	<div class="progress progress-xs">
									<div <?php 								
									visitesControle_controlBar($i); ?> >
									</div>
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
<?php } if($_SESSION['type'] == 3){ ?>

	 <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
				  <?php
				  $i = 0;
				  $visites = $listeVisites;
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
								if($i['etat'] == 3){ ?>
							<td><span class="label label-rouge"><?= $i['Etat']?></span></td>
						<?php }
							
							?>
							<td><?= $i['choixService'] ?></td>
							<td>	<div class="progress progress-xs">
									<div <?php 								
									visitesControle_controlBar($i); ?> >
									</div>
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
<?php } ?>
