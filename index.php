<!doctype html> 
<html lang="pt-br" class="_1000 ">
<head> 
	<meta charset="utf-8" />
    
    <title>Mini Curso Gratuito de Marketing Digital</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	
    <meta name="classification" content="Mini Curso Gratuito de Marketing Digital" />
    <meta name="Description" content="Mini Curso Gratuito de Marketing Digital" />
    <meta name="Keywords" content="Randerson Araújo" />
    <meta name="robots" content="index, follow">
    <meta name="GOOGLEBOT" content="index, follow, all" />
    <meta name="author" content="Randerson Araújo" />
    <meta name="webmaster" content="Randerson Araújo" />
    <meta name="doc-class" content="Completed" />
    <meta name="doc-rights" content="Public" />
    <base  />
	<link rel="icon" type="image/png" href="media/img/favicon4f0a.png?5fafd792b05fe" /> 
    
	<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
	
	<link rel="stylesheet" type="text/css" href="media/css/estilosbad8.css?5fafd792b0601" />
	<link rel="stylesheet" type="text/css" href="media/css/home17ca.css?5fafd792b0602" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,600i,700,800">
  
    <meta property="og:locale" content="pt_br" />
	<meta property="og:title" content="Mini Curso Gratuito de Marketing Digital" />
	<meta property="og:url" content="" />
	<meta property="og:image" content="media/img/facebook.png"/> 
	<meta property="og:image:type" content="image/jpeg"/>
	<meta property="og:image:width" content="1200">
	<meta property="og:image:height" content="700">
	<meta property="og:description" content="Mini Curso Gratuito de Marketing Digital"/>
	<meta property="og:type" content="website"/>
	<meta property="og:site_name" content="Mini Curso Gratuito de Marketing Digital"/>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<body class="home padrao" projeto="1" versao="1" tipo="1" src="1.html">

<style type="text/css">
._320 .mobile{ display: block!important;}
._320 .desktop{ display: none!important;}

._640 .mobile,._1000 .mobile{ display: none!important;}
._640 .desktop,._1000 .desktop{ display: block!important;}
</style> 

<main>
	
	<section class="form">
		<h1>Nesta <b>Mentoria Gratuita</b> eu vou te mostrar de uma vez<b> Como Começar Seu Negócio Digital</b> Mesmo que Você Ainda Seja Iniciante.</b></h1>

		<link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat&family=Roboto&display=swap" rel="stylesheet">
     	<form id="form">
			<input class="formkit-input" id="nome" placeholder="Qual é o seu nome?" style="margin-top: 5px;" type="text" name="nome" required>			
			<input type="email" id="email" name="email" class="formkit-input" placeholder="Me conte o seu melhor e-mail!" style="margin-top: 5px;" required>			
			<button type="submit" id="form_submit" class="formkit-submit btn">Quero Assistir o Curso</button>						
			<h3 class="desktop">Conteúdo Atualizado</h3>
		</form>

        <?php if(isset($_GET["wpp"])){
            $wpp = $_GET["wpp"];
        	}else{
				$wpp = "";
			} ?>
		<script>
			$('#form').on('submit', (e) => {
				e.preventDefault();
				var email = $('#email').val();
				var nome = $('#nome').val();
				$.ajax({					
                    data: {email: email,nome: nome},
                    type: "post",
                    url: "postreq.php",
                    success: function(data){
                        console.log(data);
						location.href='curso.php?wpp=<?php echo $wpp; ?>';							
                    }
                })							
			})
		</script>
		
	</section>
	
	<section class="tvCaptura">
		<div class="faixa desktop">
			<span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 36"><polygon points="0 0 6.8 17.9 0 36 10 36 10 0 0 0"/></svg></span>
			<p>MINICURSO</p>
		</div>
    	<img src="media/img/ilustraCaptura.svg" class="captura desktop" alt=""/>
		<img src="media/img/ilustraMobile.svg" class="captura mobile" alt=""/>
    	<img src="media/img/professorTopo.png" class="imagemProfessor" alt=""/>
		
		<div class="detalhesAnimados">
			<div class="grupoDesenhos desenhosEsquerda">
									<span class="itemDesenho"><img src="media/img/iconAnimado.png" alt=""/></span>
									<span class="itemDesenho"><img src="media/img/iconAnimado.png" alt=""/></span>
									<span class="itemDesenho"><img src="media/img/iconAnimado.png" alt=""/></span>
									<span class="itemDesenho"><img src="media/img/iconAnimado.png" alt=""/></span>
									<span class="itemDesenho"><img src="media/img/iconAnimado.png" alt=""/></span>
									<span class="itemDesenho"><img src="media/img/iconAnimado.png" alt=""/></span>
									<span class="itemDesenho"><img src="media/img/iconAnimado.png" alt=""/></span>
									<span class="itemDesenho"><img src="media/img/iconAnimado.png" alt=""/></span>
									<span class="itemDesenho"><img src="media/img/iconAnimado.png" alt=""/></span>
									<span class="itemDesenho"><img src="media/img/iconAnimado.png" alt=""/></span>
									<span class="itemDesenho"><img src="media/img/iconAnimado.png" alt=""/></span>
									<span class="itemDesenho"><img src="media/img/iconAnimado.png" alt=""/></span>
									<span class="itemDesenho"><img src="media/img/iconAnimado.png" alt=""/></span>
									<span class="itemDesenho"><img src="media/img/iconAnimado.png" alt=""/></span>
									<span class="itemDesenho"><img src="media/img/iconAnimado.png" alt=""/></span>
									<span class="itemDesenho"><img src="media/img/iconAnimado.png" alt=""/></span>
									<span class="itemDesenho"><img src="media/img/iconAnimado.png" alt=""/></span>
									<span class="itemDesenho"><img src="media/img/iconAnimado.png" alt=""/></span>
									<span class="itemDesenho"><img src="media/img/iconAnimado.png" alt=""/></span>
									<span class="itemDesenho"><img src="media/img/iconAnimado.png" alt=""/></span>
									<span class="itemDesenho"><img src="media/img/iconAnimado.png" alt=""/></span>
									<span class="itemDesenho"><img src="media/img/iconAnimado.png" alt=""/></span>
							</div><!--detalhesAnimados-->

			<div class="grupoDesenhos desenhosDireita">
									<span class="itemDesenho"><img src="media/img/iconAnimado.png" alt=""/></span>
									<span class="itemDesenho"><img src="media/img/iconAnimado.png" alt=""/></span>
									<span class="itemDesenho"><img src="media/img/iconAnimado.png" alt=""/></span>
									<span class="itemDesenho"><img src="media/img/iconAnimado.png" alt=""/></span>
									<span class="itemDesenho"><img src="media/img/iconAnimado.png" alt=""/></span>
									<span class="itemDesenho"><img src="media/img/iconAnimado.png" alt=""/></span>
									<span class="itemDesenho"><img src="media/img/iconAnimado.png" alt=""/></span>
									<span class="itemDesenho"><img src="media/img/iconAnimado.png" alt=""/></span>
									<span class="itemDesenho"><img src="media/img/iconAnimado.png" alt=""/></span>
									<span class="itemDesenho"><img src="media/img/iconAnimado.png" alt=""/></span>
									<span class="itemDesenho"><img src="media/img/iconAnimado.png" alt=""/></span>
									<span class="itemDesenho"><img src="media/img/iconAnimado.png" alt=""/></span>
									<span class="itemDesenho"><img src="media/img/iconAnimado.png" alt=""/></span>
									<span class="itemDesenho"><img src="media/img/iconAnimado.png" alt=""/></span>
									<span class="itemDesenho"><img src="media/img/iconAnimado.png" alt=""/></span>
									<span class="itemDesenho"><img src="media/img/iconAnimado.png" alt=""/></span>
									<span class="itemDesenho"><img src="media/img/iconAnimado.png" alt=""/></span>
									<span class="itemDesenho"><img src="media/img/iconAnimado.png" alt=""/></span>
									<span class="itemDesenho"><img src="media/img/iconAnimado.png" alt=""/></span>
									<span class="itemDesenho"><img src="media/img/iconAnimado.png" alt=""/></span>
									<span class="itemDesenho"><img src="media/img/iconAnimado.png" alt=""/></span>
									<span class="itemDesenho"><img src="media/img/iconAnimado.png" alt=""/></span>
							</div><!--detalhesAnimados-->
		</div><!--detalhesAnimados-->
		
	</section><!-- tvCaptura-->
</main>
	
<section class="chamadas">
	<div class="barraBrancaMesa"></div><!--barraBrancaMesa-->
	<h3 class="mobile">Aulas <b>100% Atualizadas</b></h3>
	<ul>
		<li>
	    	<img src="media/img/icone1Chamadaee33.svg?ms" alt=""/>
			<p>Aprenda a <b>dominar o mercado digital</b> com um especialista do assunto.</p>
		</li>
		<li>
	    	<img src="media/img/icone2Chamadaee33.svg?ms" alt=""/>
			<p><b>Conhecimento tirado direto do campo de batalha</b>, fruto de 4 anos imerso no mercado.</p>
		</li>
		<li>
	    	<img src="media/img/icone3Chamadaee33.svg?ms" alt=""/>
			<p>Aulas atualizadas com as <b>últimas novidades, técnicas e estratégias</b> para vender todo dia na internet.</p>
		</li>
	</ul>
</section><!--chamadas-->
<footer style="background-color: #000;">
	<div class="centro">
		<a href="http://esquematiza.com.br/site-emergencia1/termos-de-uso/" target="_blank">Termos de uso</a>
		<a href="http://esquematiza.com.br/site-emergencia1/politicas-de-privacidade" target="_blank">Política de privacidade</a>
		<p style="color: white;">Copyright © 2020 Todos os direitos reservados </p>
	</div>
</footer>	
<script type='text/javascript' src="media/js/jquery4477.js?5fafd792b0672"></script>
<script type='text/javascript' src="media/js/configbe9d.js?5fafd792b0673"></script>
	
</body>
</html>