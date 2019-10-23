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

	<?php
			$id = htmlspecialchars($_GET["id"]);
            {?>
				<!-- Cabeçalho -->
				<header>
					<div class="navbar-fixed">
						<nav>
						 	<div class="nav-wrapper blue darken-1">
						 		<ul id="nav-mobile" class="left">
						 			<li>
						 				<a href="detalharanking.php?id=<?= $id ?>">
						 					<i class="large material-icons left">arrow_back</i>
						 					VOLTAR
						 				</a>
						 			</li>
						 		</ul>
						 	</div>
						</nav>	
					</div>	 
				</header>
				<!-- Fim_Cabeçalho -->
	<?php 	}?>
	<?php
			$sql = "SELECT * FROM reviews, users WHERE reviews.idSite = $id";
            $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
            while($row = $result->fetch_assoc())
            {?>
				<section>
						<!-- Lista de Avaliações -->
						<ul class="collection">
							<li class="collection-item avatar">
								<i class="material-icons circle">person</i>
								<span class="title">
									<?= $row['nome'] ?>, <?= $row['idade'] ?>, <?= $row['estrelas'] ?> estrelas
								<span/>
								<p>"<?= $row['coment'] ?>"</p>
							</li>
						</ul>				
				</section>
				<!-- Fim_Lista de Avaliações -->
	<?php 	}?>

		<!-- Rodapé -->
		<footer>
			
		</footer>
		<!-- Fim_Rodapé -->

		<script type="text/javascript" src="js/materialize.min.js"></script>
	</body>
</html>