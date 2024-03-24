<?php

//session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">




    <head>
        <title>Impacta Soluções | Assistência Técnica</title>
	    <link rel="stylesheet" href="<?= INCLUDE_PATH ?>views/styleatendimento.css">
        <script src="https://kit.fontawesome.com/a9ebe7b7ef.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?= INCLUDE_PATH ?>views/style1.css">
	    <link rel="stylesheet" href="<?= INCLUDE_PATH ?>views/style.css">
    </head>

    <body>

    <header>
		<div class="container">
			<div class="menu-topo">
				
				<nav class="desktop">
					<ul>
						<li><a href="<?= INCLUDE_PATH ?>sobre">Sobre</a></li>
                        <li><a href=""> Login</a></li>
						<li><a href="<?= INCLUDE_PATH ?>atendimento">Chamado</a></li>
						<li><a href="<?= INCLUDE_PATH ?>home">Home</a></li>
					</ul>
				</nav>
				
				<div class="clear"></div>
			</div>
			<div class="chamada-header">
				<h2>Cadastrar</p>
				
				<form>
                    <input type="email" required="" placeholder="Seu nome...">
					<input type="email" required="" placeholder="e-mail...">
					<input type="submit" name="acao" value="Cadastrar!">
				</form>
			</div>
		</div>
	</header>
    </body>

</html>