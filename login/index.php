
<?php
	session_start();
?>

<!DOCTYPE html>

<html lang="pt-br"> 	
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>Login | Centro Acadêmico de Computação UEL</title>
	<meta name="description" content="Centro Acadêmico de Computação - Ada Lovelace, órgão representante dos alunos de Ciência da Computação da Universidade Estadual de Londrina.">
	<meta name="robots" content="index, follow">
	<meta name="author" content="CACOMP - Ada Lovelace">
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
	<link rel="apple-touch-icon" sizes="180x180" href="https://i.imgur.com/DVYRNGr.png">
	<link rel="icon" type="img/png"  href="https://i.imgur.com/DVYRNGr.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>
<body>
	<div id="preloader">
		<div class="inner">
			<img src="https://i.imgur.com/XdA3d3M.gif" height="200px"><br><br>
		</div>
	</div> 
    <section id="login">
		<div class="logo-top">
			<a href="../index.html"><img src="https://i.imgur.com/JSlE9sM.png" alt="centro academico de computação uel" style="width:200px;"></a>
		</div>        
        <div id="caixa-login">
            <h1>Login</h1>
            <div class="solido"></div>
            <?php
            if(isset($_SESSION['nao_autenticado'])):
            ?>
            <div class="notification-problema">
            	<p>Usuário e/ou senha inválidos</p>
            </div>
            <?php 
        	endif;
        	unset($_SESSION['nao_autenticado']);
             ?>
            <form method="POST" action="login.php">
		        <div class="caixa-de-texto">
		            <i class="fas fa-user"></i>
		            <input type="text" placeholder="Usuário" name="usuario" value="">
		        </div>
		        <div class="caixa-de-texto">
		            <i class="fas fa-key"></i>
					<input type="password" id="input_senha" placeholder="Senha" name="senha" value="">
		        </div>
		        
		     <input class="botao-login" type="submit"  name="enviar" value="Entrar">
		    
		        <p>Ainda não tem login? <a href="../cadastro/index.php">Cadastre-se</a></p>
		        <p><a href="esqueci-minha-senha/recuperar-senha.php">Esqueceu sua senha?</a></p>
		    </form>
        </div>    
    </section>
	<footer >
		  	 <p><strong>Copyright ©</strong> CACOMP UEL 2019.</p>
			 
			</div>
			</footer>
			<script src="https://code.jquery.com/jquery-3.4.0.js"integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="crossorigin="anonymous"></script>
			<script src="scriptjquery.js"></script>
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
			<script text="text/javascript">
				$(window).on('load', function () {
					$('#preloader .inner').fadeOut();
					$('#preloader').delay(50).fadeOut('fast'); 
					$('body').delay(50).css({'overflow': 'visible'});
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