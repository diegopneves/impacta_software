<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= INCLUDE_PATH ?>views/style1.css">
	<link rel="stylesheet" href="<?= INCLUDE_PATH ?>views/style.css">
	<script src="https://kit.fontawesome.com/a9ebe7b7ef.js" crossorigin="anonymous"></script>
	<title>Impacta Soluções | Assistência Técnica</title>
	<meta charset="utf-8">
	
	
</head>
<body>
	<header>
		
		<div class="container">
			<div class="menu-topo">
				<div class=impacta></div>
				
				<nav class="desktop">
					<ul>
						<li><a href="<?= INCLUDE_PATH ?>sobre">Sobre</a></li> 
						<li><a href="<?= INCLUDE_PATH ?>cadastro">Cadastro</a></li>
						<li><a href=""> Login</a></li>						
						<li class="btn-nav"><a href="<?= INCLUDE_PATH ?>atendimento">Chamado</a></li>
					</ul>
				</nav>
				
				<div class="clear"></div>
			</div>
			<div class="chamada-header">
				<h2>Resolvemos o seu problema<br />para você produzindo mais</h2>
				<p>Com as melhores soluções para sua empresa, melhor serviço do Brasil.</p>
				
				<form>
					<input type="email" required="" placeholder="Seu e-mail...">
					<input type="submit" name="acao" value="Quero saber mais!">
				</form>
			</div>
		</div>
	</header>

	<section class="descricao-home">
        <div class="container">
            <h1>Impacta Soluções | Assistência Técnica</h1><br><br>
        </div>         
    </section>

	<section class="descricao-impacta">
		<div class="container"><br>
		<p>Área de TI tem um papel fundamental no bom funcionamento de uma empresa, e a <b>Impacta Soluções</b> cuida da infraestrutura de tecnologia e dar suporte a todos os setores, de forma que as demandas relacionadas com hardware e software sejam resolvidas o quanto antes. 
Afinal, não é nada fácil gerenciar uma série de solicitações que foram feitas por e-mail, telefone e chat.</p>
		</div>
	</section>

	<section class="descricao-impacta2">
		<div class="container">
			<div class="texto-descricao">
				<h3>Nós somos uma agência digital. Trabalhamos seu posicionamento, conteúdo e estética, sempre focado em conversão.</h3>
				<p>Converse com a nossa equipe ainda hoje e crie um plano para o seu negócio!</p>
			</div>

			
			<div class="clear"></div>
		</div>
	</section>

	<section class="descricao-impacta3">
		
	</section>

	<section class="servicos">
		<div class="container">
			<div class="title-servicos">
				<h3>Como podemos ajudar sua empresa<br /><i class=" fa fa-angle-down"></i></h3>
			</div>
			<div class="flex-servicos">

			<div class="space-servico">
				<div class="box-servico">
				<img src="images/img4.jpg" />	
						<div class="box-servico-wraper">
							<h2>Assistência técnica</h2>
							<p>Todos os serviços de TI estão disponíveis 24 horas por dia, 7 dias por semana, excetuando-se manutenções programadas.</p>
							<a href="#">Orçamento</a>
						</div>
				</div>
			</div>


			<div class="space-servico">
				<div class="box-servico">
				<img src="images/img5.jpg" />	
						<div class="box-servico-wraper">
							<h2>Assistência Técnica via Suporte Remoto</h2>
							<p>O atendimento ao cliente remoto funciona por meio de ferramentas de comunicação a distância (telefone, e-mail e chat).</p>
							<a href="#">Orçamento</a>
						</div>
				</div>
			</div><!

			<div class="space-servico">
				<div class="box-servico">
				<img src="images/img6.jpg" />	
						<div class="box-servico-wraper">
							<h2>Consultoria de TI</h2>
							<p>Precisa de ajuda e planejamento para seu negócio? Fale com a Impacta Soluções.</p>
							<a href="#">Orçamento</a>
						</div>
				</div>
			</div>				

			
			</div>
		</div>
	</section>

	<section class="portfolio">
		<div class="container">
			<h2>Algumas empresas que tivemos a oportunidade de atuar.</h2>
			<div class="empresas">
				<div class="empresa-single">
					<img src="images/bianchini.png" />
				</div>
				<div class="empresa-single">
					<img src="images/rancho.png" />
				</div><
				<div class="empresa-single">
					<img src="images/hoepcke.png" />
				</div><!
				<div class="empresa-single">
					<img src="images/monguilhott.png" />
				</div>
			</div>
		</div>
	</section>

	<section class="formulario">
		<div class="container">
			<h2>Um orçamento ou alguma dúvida?</h2>
			<form>
				<input type="text" name="nome" placeholder="Nome..." required>
				<input type="text" name="email" placeholder="E-mail..." required>
				<input type="text" name="telefone" placeholder="Telefone..." required>
				<textarea name="mensagem" placeholder="Sua mensagem..."></textarea>
				<input type="submit"  name="acao" value="Enviar!">
			</form>
		</div>
	</section>

	<footer>
		<div class="container">
			<div class="box-footer">
				<h2>Endereço</h2>
				<p>Rua Cubatão, 726 - Vila Mariana, São Paulo - SP, 04013-002 Brasil</p>
			</div>
			<div class="box-footer">
				<h2>Telefone</h2>
				<p>(11) 5593-5344</p>
			</div>
			<div class="box-footer">
				<h2>Receba nossas news</h2>
				<form>
					<input placeholder="E-mail..." type="text" /><button type="submit"><i class="fa fa-paper-plane-o"></i></button>
				</form>
			</div>
			<div class="clear"></div>
		</div>
	</footer>

	

	</body>
</html>