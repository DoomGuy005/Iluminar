<?php 
	include_once 'db/db.php'; 
	session_start();
?>
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
			$sql = "SELECT r.coment, r.estrelas, u.nome, u.idade,r.idSite FROM reviews r INNER JOIN users u ON r.idUser = u.UserId WHERE r.idSite = $id";
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

	<div class="fixed-action-btn">
		<a class="btn-floating btn-large blue darken-1 modal-trigger" href="#modal">
			<i class="large material-icons">add</i>
		</a>
	</div>
	
	<!-- Modal do comentário -->

	<div id="modal" class="modal modal-fixed-footer">
			<h5 style="text-align: center;">Adicionar avaliação</h5>
			<div class="modal-content">
				<form class="col s12" action="criacomentario.php?siteid=<?php echo $id ?>" method="POST">
					<div class="input-field col s12">
							<select id="estrelas" name="estrelas">
								<option value="1" selected>1 Estrela</option>
								<option value="2">2 Estrelas</option>
								<option value="3">3 Estrelas</option>
								<option value="4">4 Estrelas</option>
								<option value="5">5 Estrelas</option>
							</select>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<textarea placeholder="Escreva seu comentário aqui!" id="com" name="com" class="materialize-textarea"></textarea>
						</div>
					</div>	
			</div>
					<div class="modal-footer">
						<button type="submit" class="waves-effect btn-flat green">
							Criar avaliação 
						</button>
				</form>
					</div>
		</div>
		<!-- Rodapé -->
		<footer>
			
		</footer>
		<!-- Fim_Rodapé -->
		<script type="text/javascript" src="js/materialize.min.js">	
		</script>
		<script type="text/javascript">
		M.AutoInit();
			document.addEventListener('DOMContentLoaded', function() {
				var elems = document.querySelectorAll('.fixed-action-btn');
				var instances = M.FloatingActionButton.init(elems,  {
					hoverEnabled: false
				});
			});
			document.addEventListener('DOMContentLoaded', function() {
				var elems = document.querySelectorAll('.modal');
				var instances = M.Modal.init(elems, options);
			});
			document.addEventListener('DOMContentLoaded', function() {
				var elems = document.querySelectorAll('select');
				var instances = M.FormSelect.init(elems, options);
			});
		</script>
	</body>
</html>