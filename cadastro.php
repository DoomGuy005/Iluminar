<?php 
	include('signin.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
		<title>Iluminar - Cadastro</title>
		<link rel="stylesheet" href="css/materialize.css" media="screen,projection">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	</head>
	<body>
		<header>
			<nav>
			    <div class="nav-wrapper blue darken-1">
			      <a href="index.php" class="brand-logo"><img style="height: 59px;" src="img/logo.png"/></a>
			    </div>
			</nav>
		</header>
		<section>
			<div id="con1" class="row">
			<?php include('errors.php'); ?>
				<form class="col s12" action="signin.php" method="POST">
					<h5 class="center-align">
						Cadastro de Usuário
					</h5>
					<div class="row">
						<div class="input-field col s12 l6">
				          <input placeholder="Nome" id="nome1" name="nome" type="text" class="validate" required>
				          <label for="nome1">Nome</label>
				        </div>
				    </div>
				    <div class="row">
				        <div class="input-field col s12 l6">
				          <input id="nome2" placeholder="Sobrenome" name="sobrenome" type="text" class="validate" required>
				          <label for="nome2">Sobrenome</label>
				        </div>
					</div>
					<div class="row">
				        <div class="input-field col s12 l6">
				          <input id="idade" placeholder="Idade" name="idade" type="text" class="validate" required>
				          <label for="idade">Idade</label>
				        </div>
					</div>
					<div class="row">
						<div class="input-field col s12">
						  <input id="senha" type="password" name="senha" class="validate"  required>
						  <label for="senha">Senha</label>
						</div>
					  </div>
					<h5 class="center-align">
						Você possui alguma deficiência visual?
					</h5>
					<div class="row" align="center">
						<p>
					      <label>
					        <input value="1" name="radio" type="radio" required />
					        <span>Sim</span>
					      </label>

					      <label>
					        <input value="0" name="radio" type="radio"/>
					        <span>Não</span>
					      </label>
					    </p>
					</div>

					<div class="row" align="center">
						<button class="waves-effect waves-light btn-large blue darken-1 btn" name="submit" type="submit">
							SUBMETER
						    <i class="material-icons right">arrow_forward</i>
						  </button>
					</div>
				</form>
			</div>
		</section>
		<footer>
			
		</footer>
			<script type="text/javascript" src="js/materialize.min.js"></script>
			<script type="text/javascript">
				M.AutoInit();
			</script>
		</body>
</html>