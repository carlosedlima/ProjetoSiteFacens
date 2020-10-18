<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
	<?php
		include_once("elements/head.html");
	?>
	<body class="landing is-preload">
	
			<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
				<header id="header" class="alt">
					<?php
						include_once("elements/menu.php");
					?>

					<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2>PetHelper</h2>
							<p>Para donos de animais usuários de smartphone e computadores,<br>
								 que buscam maior praticidade em encontrar e realizar um agendamento em uma clínica veterinária. 
							</p>
							<ul class="actions special">
								<li><a href="#" class="button primary">Cadastre-se Agora</a></li>
							</ul>
						</div>
						<a href="#one" class="more scrolly">Saiba Mais</a>
					</section>

					<!-- One -->
					<section id="one" class="wrapper style1 special">
						<div class="inner">
							<header class="major">
								<h2>O PetHelper é uma aplicação web que oferecerá a conexão entre o usuário e as clínicas,
									<br>atendendo assim a necessidade de ser um sistema eficiente e com alta qualidade.</h2>
						</div>
					</section>

					<!-- Two -->
					<section id="two" class="wrapper alt style2">
						<section class="spotlight">
							<div class="image"><img src="images/pic01.jpg" alt="" /></div><div class="content">
								<h2>Encontrar Clinicas</h2>
								<p>Facilidade na hora de buscar as clinicas mais proximas de você.</p>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="images/pic02.jpg" alt="" /></div><div class="content">
								<h2>Avaliação</h2>
								<p>Você vai poder avaliar as clinicas, de forma com que os outros usuarios possam saber de sua qualidade.</p>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="images/pic03.jpg" alt="" /></div><div class="content">
								<h2>Atendimento de Emergência</h2>
								<p>Solicitar um atendimento de emergência de maneira rapida e fácil.</p>
							</div>
						</section>
					</section>

					<!-- CTA -->
					<section id="cta" class="wrapper style4">
						<div class="inner">
							<header>
								<h2>Possui uma clinica?</h2>
								<p>Se você é um dono de uma clínica veterinária, clique aqui e cadastre-se agora!</p>
							</header>
							<ul class="actions stacked">
								<li><a href="#" class="button fit primary">Cadastre Aqui</a></li>
								<li><a href="#" class="button fit">Entre Aqui</a></li>
							</ul>
						</div>
					</section>

					<!-- Footer -->
					<?php
						include_once("elements/footer.html");
					?>
			</div>

		<!-- Scripts -->
			<?php
				include_once("elements/scripts.html");
			?>

	</body>
</html>