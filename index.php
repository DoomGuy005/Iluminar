<?php include_once 'db/db.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
		<title>Iluminar - Índice</title>
		<link rel="stylesheet" href="css/materialize.css" media="screen,projection">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	</head>
	<body>
		
		<header>
			<div class="navbar-fixed" style="height: 120px;">
				<nav class="nav-extended blue darken-1">
					<div class="nav-wrapper">
						<a href="index.html" class="brand-logo"><img style="height: 59px;" src="img/logo.png"/></a>
					</div>
					<div class="nav-content">
						<ul class="tabs tabs-transparent">
							<li class="tab"><a href="#perfil">Perfil</a></li>
							<li class="tab"><a href="#ranking">Ranking</a></li>
							<!--<li class="tab"><a href="#colaboracoes">Colaborar</a></li>-->
						</ul>
					</div>
				</nav>
			</div>
		</header>
		
		<section id="perfil">
			<div class="row center-align">
					<img style="width: 100px; height: 120px; margin-top: 20px;" src="img/user.jpg" class="circle"/>
					<h4>
						Jherod Brendon
					</h4>
					<div class="row">
						<div class="col s12">
							<div class="card blue darken-1">
								<div class="card-content white-text">
									<span class="card-title">
											Minhas Informações
									</span>
									<p>
										"Eu sou o Jherod, e tenho um pequenino problema com telas brilhantes, por isso estou sempre usando o filtro de cor azul."
									</p>
								</div>
							</div>	
						</div>
					</div>
					

					<div class="row">
						<div class="col s12">
							<a href="#!" class="btn btn-large waves-effect blue darken-1">
								EDITAR INFORMAÇÕES
								<i class="material-icons left">create</i>
							</a>
						</div>
					</div>

					<div class="row">
						<div class="col s12">
							<a href="conquistas.html" class="btn btn-large waves-effect green darken-1">
								MINHAS CONQUISTAS
								<i class="material-icons left">emoji_events</i>
							</a>
						</div>
					</div>
					
					<div class="row">
						<a href="#!" class="btn btn-large waves-effect orange darken-1">
							MINHAS CONTRIBUIÇÕES
							<i class="material-icons left">people</i>
						</a>
					</div>
					
					<div class="row">
						<a href="#!" class="btn btn-large waves-effect red darken-1">
							SAIR DA CONTA
							<i class="material-icons left">cancel</i>
						</a>
					</div>
					
			</div>	
		</section>

		<section id="ranking">
				<?php
                	$sql = "SELECT * FROM sites AS sit INNER JOIN reviews as rev on sit.SiteId = rev.idSite ORDER BY rev.estrelas DESC";
                	$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                	while($row = $result->fetch_assoc())
                	{?>
	 					<div class="container col s12 row-align center">
								<a href="detalharanking.php?id=<?= $row['SiteId'] ?>" class="btn btn-large waves-effect blue darken-1" style="width: 100%; margin-top: 5px;">
								<?= $row['nome'] ?>
									<i class="medium material-icons left">emoji_events</i>
									<i class="medium material-icons left">emoji_events</i>
								</a>
						</div>
          	  <?php }?>
		</section>

		<footer>
		</footer>
		
		<script type="text/javascript" src="js/materialize.min.js"></script>
		<script type="text/javascript">
				M.AutoInit();
		</script>
	</body>
</html>