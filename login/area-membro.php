<?php
	session_start();
	include('verifica_login.php');
?>

<!DOCTYPE html>

<html lang="pt-br"> 	
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>Área do Membro | Centro Acadêmico de Computação UEL</title>
	<meta name="description" content="Centro Acadêmico de Computação - Ada Lovelace, órgão representante dos alunos de Ciência da Computação da Universidade Estadual de Londrina.">
	<meta name="robots" content="index, follow">
	<meta name="author" content="CACOMP - Ada Lovelace">
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/apexcharts@2.1.2" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
	<link rel="apple-touch-icon" sizes="180x180" href="https://i.imgur.com/DVYRNGr.png">
	<link rel="icon" type="img/png"  href="https://i.imgur.com/DVYRNGr.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>
<body id="area-membro">
	<div id="preloader">
		<div class="inner">
			<img src="https://i.imgur.com/XdA3d3M.gif" height="200px"><br><br>
		</div>
	</div>
	<div class="responsivo">
		<div class="logoheader">
				<a href="../index.html"><img src="https://i.imgur.com/JSlE9sM.png" alt="centro academico de computação uel"></a>
		</div>
		<div class="menu">
			<i class="fas fa-bars"></i>
		</div>
	</div>
	<nav>
		<div class="logoheader">
			<a href="../index.html"><img src="https://i.imgur.com/JSlE9sM.png" alt="centro academico de computação uel"></a>
		</div>
		<ul class="active">
				<li><a href="#financas">Finanças</a></li>
				<li><a href="#atas">Atas</a></li>
				<li><a href="#inventario">Inventário</a></li>
				<!-- <li><a href="#feedback">Feedback</a></li> -->
				<li><a style="color: white;"><i class="far fa-user"></i> Olá, <?php echo $_SESSION['usuario'];?></a></li>
				<li><a href="logout.php">Sair</a></li>
		</ul>
	</nav>
	<section class="bandeira-area-aluno">
			<div class="container">
				<div class="box" style="margin-top: 27vh">
					<div class="cac">
						<img src="https://i.imgur.com/Rj32KOy.png" alt="cacomp">
					</div>
					<div class="cac-carinha">
						<img src="https://i.imgur.com/oWg0aNV.png" alt="cacomp">
					</div>
				</div>
			</div>
	</section>
	<section id="financas">
		<h3>Finanças</h3>
		<div class="container">
			<div class="box">
				<div class="lado-esquerdo-fin">
					<img src="https://i.imgur.com/OcFztsT.png">
				</div>
				<div class="lado-direito-fin">
					<img src="https://i.imgur.com/A12Xr82.png">
				</div>
			</div>
		</div>
		<p>Movimentações financeiras detalhadas</p>
		<a href="../documentos/Financas_CACOMP.pdf" target="_blank"><button class="botao-financas">Ver mais</button></a>
	</section>
	<section id="atas">
	<h3>Atas</h3>
	<div class="container">
		<div class="box">
			<div class="lado-esquerdo-inventario">
				<h5>Ata da última assembleia</h5>
				<figure >
					<img src="https://i.imgur.com/GQc6Eu7.png" height="300px" style="border: solid white;" /><br><br>
					<p style="color: white;">Assembleia Geral 17/05/2019</p>
					<a href="../documentos/atas/Ata_Assembleia_17_05_19.pdf" target="_blank"><button class="botao-financas">Ver Mais</button></a>
				</figure>
			</div>
			<div class="lado-direito-inventario">
				<p>Outras atas</p>
				<a href="../documentos/Invetario_CACOMP.pdf" target="_blank"><button class="botao-financas">Ver Mais</button></a>
			</div>
		</div>
	</div>
	<section id="inventario">
	<h3>Inventário</h3>
	<div class="container">
		<div class="box">
			<div class="lado-esquerdo-inventario">
				<img src="../assets/cacomp.jpg">
				<span style="color: grey;">Sede do CACOMP</span>
			</div>
			<div class="lado-direito-inventario">
				<p>Visualizar arquivo com os itens do C.A.</p>
				<a href="../documentos/Invetario_CACOMP.pdf" target="_blank"><button class="botao-financas">Ver Mais</button></a>
			</div>
		</div>
	</div>
	<!--	<div class="container">
			<div class="box">
		 		<div class="invent-esquerda">
					 <img src="https://i.imgur.com/tyWsY6D.jpg" alt="CACOMP UEL">
					 <br>
				 </div>
				<div class="invent-direita">
				N° Plaqueta - Especificação<br><br>
				37709 - Escrivaninha de madeira<br>
				38058 - Mesa Madeira<br>
				48156 - Ventilador<br>
				59834 - Armário de Madeira<br>
				66558 - Estante Aço<br>
				97195 - Mesa Computador<br>
				97277 - Mesa Computador<br>
				97282 - Mesa Computador<br>
				97284 - Mesa Computador<br>
				104283 - Lousa de Madeira<br>
				114114 - Cadeira Estofada Fixa<br>
				116341 - Cadeira Madeira<br>
				116661 - Quadro Shimazu<br>
				118641 - Cadeira Estofada Fixa<br>
				125374 - Cadeira Estofada Fixa<br>
				12380 - Cadeira Estofada Fixa<br>
				12382 - Cadeira Estofada Fixa<br>
				125389 - Cadeira Estofada Fixa<br>
				125394 - Cadeira Estofada Fixa<br>
				143167 - Cadeira Estofada Giratória<br>
				153723 - Cadeira Estofada Giratória<br>
				153753 - Cadeira Estofada Giratória<br>
				153760 - Cadeira Estofada Giratória<br>
				153772 - Cadeira Estofada Giratória<br>
				153788 - Cadeira Estofada Giratória<br>
				<br>
				*Ajude o C.A. a continuar existindo!<br>
				Caso perceba que algo desapareceu entre em contato com a diretoria.<br>
				Não tire os itens de dentro do C.A.
				</div> 
			</div>
		</div> -->
	</section>
	<!-- <section id="feedback">
			<h3>Sugestões</h3>
			<p> Diga-nos oque você acha que seria interessante que fizessimos :)!</p>
			<form action="solicitacao.php" method="POST" >
					<input type="text" name="nome" placeholder="Nome">
					<input type="text"  name="assunto" placeholder="Tipo de Sugestões (Produtos, Solicitação)">
					<input type="text" name="mensagem" placeholder="Sugestão" rows="4" >
					<input type="submit" target="_blank" value="Enviar" style="background: white; color: black;">
			</form>
	</section> -->
	<footer >
		  	<p><strong>Copyright ©</strong> CACOMP UEL 2019.</p>
			<!-- <div id="footer">
				<section class="container-rodape flex">
					<div class="logo-container">
						<img src="https://i.imgur.com/NwwT1Bm.png" style="height: 140px;">
					</div>
					<div class="footer-tres">
							<h1>Redes Sociais</h1>
							<div class="meio">
								<a href="https://www.instagram.com/cacompuel/" class="btp" ><i class="fab fa-instagram"></i></a>
								<a href="https://www.facebook.com/CACOMPUEL/" class="btp"><i class="fab fa-facebook-f"></i></a>
								<a href="" class="btp"><i class="fab fa-github"></i></a>
							</div>
					</div>
					<div class="footer-tres">
							<h1>Menu</h1>
							<a href="index.html" style="color: white;">Home</a><br>
							<a href="sobre.html" style="color: white;">Sobre</a><br>
							<a href="eventos.html" style="color: white;">Eventos</a><br>
							<a href="diretoria.html" style="color: white;">Diretoria</a><br>
							<a href="guia.html" style="color: white;">Guia Calourx</a>
					</div>
					<div class="footer-tres">					
							<span>
							©CACOMP UEL 2019<br>
							Rodovia Celso Garcia Cid,<br>
							Pr 445 Km 380 s/n,<br>
							Campus Universitário,86057-970
							</span>
					</div>
				</section> -->
			</div>
			</footer>
			<script src="https://code.jquery.com/jquery-3.4.0.js"integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="crossorigin="anonymous"></script>
			<script src="scriptjquery.js"></script>
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
			<script text="text/javascript">
				$(window).on('load', function () {
					$('#preloader .inner').fadeOut();
					$('#preloader').delay(150).fadeOut('slow'); 
					$('body').delay(150).css({'overflow': 'visible'});
				})
			</script>
			<script text="text/javascript">
				$(window).on('scroll', function(){
					if($(window).scrollTop()){
						$('nav').addClass('black');
					}
					else{
						$('nav').removeClass('black');
					}
				})
				// $(document).ready(function(){
				// 	$(".menu i").on('click', function(){
				// 		$("nav ul").toggleClass("active");
				// 	});
				// });
			</script>
			<script>
				$(".menu i").click(function(){
					$("nav ul").toggleClass("active");
				});
				
		
		$(function() {
			$('.page-scroll a').bind('click', function(event) {
				var $anchor = $(this);
				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top
				}, 1500, 'easeInOutExpo');
				event.preventDefault();
			});
		});
		
		$(document).ready(function(){
			$(window).scroll(function(){
				if ($(this).scrollTop() > 100) {
					$('a[href="#top"]').fadeIn();
				} else {
					$('a[href="#top"]').fadeOut();
				}
			});
		
			$('a[href="#top"]').click(function(){
				$('html, body').animate({scrollTop : 0},800);
				return false;
			});
		});
			</script>
			
		</body>
		</html>