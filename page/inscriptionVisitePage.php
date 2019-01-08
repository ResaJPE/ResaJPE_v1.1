<?php
include('template/head.php');
include('template/menu.php');
?>
	 <?php if ($_SESSION['type'] == 1){ ?>
	 
		<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">S'inscrire à une visite</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputNom" class="col-sm-2 control-label">Nom</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNom" placeholder="Votre nom">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPrenom" class="col-sm-2 control-label">Prénom</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPrenom" placeholder="Prénom">
                  </div>
              	</div>
              	<div class="form-group">
                  <label for="inputTel" class="col-sm-2 control-label">Tél.</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputTel" placeholder="Numéro de téléphone">
                  </div>
              	</div>
                <div class="form-group">
                  <label for="inputmail" class="col-sm-2 control-label">Adresse e-mail</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputmail" placeholder="Adresse e-mail">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputadress" class="col-sm-2 control-label">Adresse</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputadress" placeholder="Adresse">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputCP" class="col-sm-2 control-label">Code Postal</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputCP" placeholder="Code postal">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputVille" class="col-sm-2 control-label">Ville</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputVille" placeholder="Ville">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputVisites" class="col-sm-2 control-label">Liste des visites disponibles</label>

                  <div class="col-sm-10">
                    <select class="form-control" id="inputVisites">
                      <?php
                      $liste = inscriptionVisiteControle_getVisites();
                      foreach ($liste as $i){
                        echo '<option value ='.$i["id"].'> Entreprise :'.$i["nomEntreprise"].'           Heure de début :'.$i["heureDebut"].'          Durée :'.$i["duree"].'              Date :'.$i["date"].'</option>';
                      }
                      ?>
                    </select>
                  </div>
                </div>



	 
<?php 
include('template/footer.php'); 
?> <?php } if($_SESSION['type'] == 2){ ?>

	 
<?php 
include('template/footer.php'); 
?>
<?php } if($_SESSION['type'] == 3){ ?>

	 
<?php 
include('template/footer.php'); 
?>
<?php } ?>