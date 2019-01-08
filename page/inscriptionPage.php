<?php include('template/head.php'); ?>

<body class="hold-transition register-page">
<div class="register-box">
	<div class="register-logo">
		<a href=""><b><?= Config::APPLI_NAME ?></b></a>
	</div>
	<div class="register-box-body">
		<p class="login-box-msg"><?= $titrePage ?></p>
		<form action="index.php?controle=inscription&action=inscrire" method="post">
			<div class="form-group input-group">
			   <span class="input-group-addon"><i class="fas fa-pencil-alt"></i></span>
			   <input type="text" name="prenom" class="form-control" placeholder="Prénom">
			</div>
			<div class="form-group input-group">
			   <span class="input-group-addon"><i class="fas fa-signature"></i></span>
			   <input type="text" name="nom" class="form-control" placeholder="Nom">
			</div>
			<div class="form-group input-group">
			   <span class="input-group-addon"><i class="fas fa-passport"></i></span>
			   <input type="text" name="identifiant" class="form-control" placeholder="Identifiant">
			</div>
			<div class="form-group input-group">
			   <span class="input-group-addon"><i class="fas fa-key"></i></span>
			   <input type="password" name="pw" class="form-control" placeholder="Mot de passe">
                  </div>
                  <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fas fa-key"></i></span>
                        <input type="password" name="pw2" class="form-control" placeholder="Mot de passe (confirmation)">
                  </div>
                  <div class="form-group">
                        <div style="text-align: center;">
                              <label>Vous êtes ?</label>
                        </div>
                        <label>
                              <input type="radio" name="type" value="1" class="minimal-red" checked>
                              Un visiteur
                        </label><br>
                        <label>
                              <input type="radio" name="type" value="3" class="minimal-red">
                              Une entreprise
                        </label>
                  </div>
                  <div class="row">
                        <div class="col-xs-8">
                              <a href="?controle=connexion" class="text-center">J'ai déjà un compte</a>
                        </div>
                        <div class="col-xs-4">
                              <button type="submit" class="btn btn-primary btn-block btn-flat">Confirmer</button>
                        </div>
                  </div>
                  <?php if(isset($alerte)){ ?>
                  <br>
                  <div class="alert alert-danger alert-dismissible" style="font-size:14px;">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="icon fa fa-ban"></i> Oups!</h4>
                        <?= $alerte ?>
                  </div>
                  <?php } ?>
            </form>
      </div>
</div>
<script src="./style/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="./style/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="./style/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="./plugins/input-mask/jquery.inputmask.js"></script>
<script src="./plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="./plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- SlimScroll -->
<script src="./style/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="./plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="./style/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="./dist/js/adminlte.min.js"></script>
<script>
	$(function () {
		$('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
	});
</script>
</body>
</html>
