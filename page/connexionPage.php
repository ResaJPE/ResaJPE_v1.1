<?php include('template/head.php'); ?>

<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href=""><b><?= Config::APPLI_NAME ?></b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Connectez-vous</p>

        <form action="index.php?controle=connexion&action=connecter" method="POST">
            <div class="form-group has-feedback">
                <input type="text" name="login" class="form-control" placeholder="Identifiant">
                <span class="glyphicon glyphicon-tag form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="mdp" class="form-control" placeholder="Mot de passe">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
					<a href="?controle=inscription" class="text-center">Créer un compte</a>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <input type="submit" class="btn btn-primary btn-block btn-flat" value="Connexion">
                </div>
                <!-- /.col -->
            </div>
            <?php if(isset($alerte)){ ?>
            <br>
            <div class="alert alert-danger alert-dismissible" style="font-size:14px;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Oups!</h4>
                <?= $alerte ?>
            </div>
            <?php } ?>
            <?php if(isset($_SESSION['msg_success'])){ ?>
            <br>
            <div class="alert alert-success alert-dismissible" style="font-size:14px;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Bravo!</h4>
                <?= $_SESSION['msg_success']; ?>
            </div>
            <?php unset($_SESSION['msg_success']); } ?>
        </form>
    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });
</script>
</body>
</html>
