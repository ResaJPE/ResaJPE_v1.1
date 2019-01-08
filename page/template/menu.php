<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			<a class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini"><b><?= Config::APPLI_NAME_SHORT ?></b></span>
			  <!-- logo for regular state and mobile devices -->
				<span class="logo-lg"><b><?= Config::APPLI_NAME ?></b></span> 
			</a>
			<!--<div>
				<p><?php echo Config::APPLI_NAME.' '.Config::APPLI_VERSION; ?></p>
			</div>
			<nav>
				<ul>
					<li><a href="../www/index.php?controle=parametres">Paramètres</a></li>
					<li><a href="../www/index.php?controle=connexion&action=deconnecter">Déconnexion</a></li>
				</ul>
			</nav>-->
			<nav class="navbar navbar-static-top">
			  <!-- Sidebar toggle button-->
			  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
				<i class="fas fa-bars"></i>
				<span class="sr-only">Activer menu</span>
			  </a>
			  <!-- Navbar Right Menu -->
			  <div class="navbar-custom-menu">
				<ul class="nav navbar-nav">
					<li>
						<a href="../www/index.php?controle=changelog"><i class="fas fa-exchange-alt"></i> Changelog</a>
					</li>
					<li>
						<a href="../www/index.php?controle=parametres"><i class="fas fa-cogs"></i> Paramètres</a>
					</li>
					<li>
						<a href="../www/index.php?controle=connexion&action=deconnecter"><i class="fas fa-sign-out-alt"></i> Déconnexion</a>
					</li>
				</ul>
			  </div>

			</nav>
		</header>
		<aside class="main-sidebar">
			<div class="user-panel">
				<div class="pull-left image">
				  <img src="dist/img/default.png" class="img-circle" alt="User Image">
				</div>
				<div class="pull-left info">
				  <p><?= $_SESSION['prenom'] ?> <?= strtoupper($_SESSION['nom']) ?></p>
				  <a href="#"><i class="fa fa-circle text-success"></i> En ligne</a>
				</div>
			  </div>
			<section class="sidebar">
				<!--<nav>
					<ul>
						<li><a href="../www/index.php?controle=accueil">Accueil</a></li>
						<li><a href="../www/index.php?controle=listes">Listes</a></li>
						<li><a href="../www/index.php?controle=reservation">Réserver une salle</a></li>
					</ul>
				</nav>-->
				<?php  //var_dump($_SESSION);
				//Si le user est un particulier
				if($_SESSION['type'] == 1){   ?>
				<ul class="sidebar-menu" data-widget="tree">
					<li class="header">NAVIGATION</li>
					<li class="active">
						<a href="../www/index.php?controle=accueil">
							<i class="fas fa-home"></i> <span>Accueil</span>
						</a>
					</li>
					<li>
						<a href="../www/index.php?controle=visites">
							<i class="fas fa-eye"></i> <span>Visites</span>
						</a>
					</li>
					<li>
						<a href="../www/index.php?controle=inscription">
							<i class="fas fa-plus"></i> <span>Inscription à une visite</span>
						</a>
					</li>
				</ul>
				<?php } 
				//Si le user est un membre du CCI
				elseif($_SESSION['type'] == 2){ ?>
					<ul class="sidebar-menu" data-widget="tree">
					<li class="header">NAVIGATION</li>
					<li class="active">
						<a href="../www/index.php?controle=accueil">
							<i class="fas fa-home"></i> <span>Accueil</span>
						</a>
					</li>
					<li>
						<a href="../www/index.php?controle=visites">
							<i class="fas fa-eye"></i> <span>Visites</span>
						</a>
					</li>
					<li>
						<a href="../www/index.php?controle=inscription">
							<i class="fas fa-plus"></i> <span>Demandes de visite</span>
						</a>
					</li>
				</ul>
					<?php }
					//Si le user est un le représentant d'une entreprise
					elseif($_SESSION['type'] == 3){ ?>
						<ul class="sidebar-menu" data-widget="tree">
					<li class="header">NAVIGATION</li>
					<li class="active">
						<a href="../www/index.php?controle=accueil">
							<i class="fas fa-home"></i> <span>Accueil</span>
						</a>
					</li>
					<li>
						<a href="../www/index.php?controle=visites">
							<i class="fas fa-eye"></i> <span>Visites de l'entreprise</span>
						</a>
					</li>
					<li>
						<a href="../www/index.php?controle=inscription">
							<i class="fas fa-plus"></i> <span>Requête de visite</span>
						</a>
					</li>
				</ul>
				<?php } ?>
		</aside>
		<div class="content-wrapper">
			<section class="content-header">
				<h1>
					<?= $titrePage ?>
				</h1>
			</section>
			<section class="content">
		
