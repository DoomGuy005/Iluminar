<?php include_once 'db/db.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
		<title>Iluminar - Ranking</title>
		<link rel="stylesheet" href="css/materialize.css" media="screen,projection">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	</head>
	<body>

		<header>
				<nav>
				 	<div class="nav-wrapper blue darken-1">
				 		<ul id="nav-mobile" class="left">
				 			<li>
				 				<a href="index.php">
				 					<i class="large material-icons left">arrow_back</i>
				 					VOLTAR PARA O RANKING
				 				</a>
				 			</li>
				 		</ul>
				 	</div>
				</nav>		 
		</header>
		<?php
			$id = htmlspecialchars($_GET["id"]);
        	$sql = "SELECT * FROM sites WHERE SiteId = $id";
            $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
            while($row = $result->fetch_assoc())
            {?>
            	<section>
                	<div class="row center-align">
							<h4>
								<?= $row['nome'] ?>
							</h4>
					</div>
					<div class="row center-align">
						<h5>
							<div class="container center-align">
								<div class="input-field col s12">
									<label for="url">URL (Endereço)</label>
									<input id="url" type="text" style="text-align: center;" value="<?= $row['url'] ?>" disabled="true" name="url" class="active">
								</div>	
							</div>
						</h5>
					</div>
					<div class="row center-align">
						<a href="<?= $row['url'] ?>" class="btn btn-large waves-effect blue darken-1">
							VISITAR SITE
							<i class="material-icons right">search</i>
						</a>
					</div>
					<div class="row center-align">
						<a href="comentarios.php?id= <?= $id ?>" class="btn btn-large waves-effect blue darken-1">
							AVALIAÇÕES
							<i class="material-icons right">arrow_forward</i>
						</a>
					</div>
				</section>
      <?php }?>
		
		
		<footer>	
		</footer>

		<script type="text/javascript" src="js/materialize.min.js"></script>
	</body>
</html>