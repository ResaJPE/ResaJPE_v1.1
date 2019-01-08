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
                  <label for="inputPhone" class="col-sm-2 control-label">Tél.</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPhone" placeholder="Numéro de téléphone">
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