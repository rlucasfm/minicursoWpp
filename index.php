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

<style type="text/css">
	.recentcomments a{
		display:inline !important;
		padding:0 !important;
		margin:0 !important;
	}
</style>

<style type="text/css">.parallax { 
    /* The image used */
    background-image: url("img_parallax.html");

    /* Full height */
    height: 100%; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>

<style type="text/css">
#comentarios_face{
	font-family: Arial;
	background-color: #F6F7F9;
	font-size: 14px;
	padding-top: 20px;
}

.titulo_comentario{
	font-weight: bold;
	border-bottom: 1px solid #E9EBEE;
	display: block;
	padding-bottom: 6px;
}

.perfil{
	display: block;
	padding-top: 10px;
	padding-bottom: 10px;
	line-height: 20px;
}

.perfil p{
	margin: 0;
	margin-left: 60px;
	margin-bottom: 0px;
}

.perfil img{
	width: 50px;
	height: 50px;
}

.perfil .nome{
	color: #365899;
	font-weight: bold;
}

.infos span{
	color: #4267B2;
	text-decoration: none;
}

.infos{
	font-size: 11px;
	color: #90949c;
}

.nome img{
	float: left;
	padding-right: 10px;
}

.perfil2{
	padding-left: 9px;
    border-left: 1px solid #E9EBEE;
    margin-left: 50px;
    padding-bottom: 0;
}

#cronos{
	height: auto;
	width: 100%;
	position: fixed;
	z-index: 1000;
	bottom: 0;
	background-image: url("https://randersonaraujo.com/estrutura/wp-content/b.png");
}

a.btn-time:link, 
a.btn-time:visited{
	margin-top: 10px;
	margin-bottom: 10px;
	display: inline-block;
}

.relogio{
	font-size: 24px;
	color: #FFF;
	display: inline-block;
	margin-top: 15px;
}

.relogio span{
    font-weight: bold;
    font-family: Montserrat, Arial, Helvetica;
    color: #f2e122;
    display: inline-block;
    font-size: 22px;
}

.relogio .cr{
	color: #FFF;
	display: inline-block;
}

#comb{
	display: block;
	max-width: 70%;
	margin: 0 auto;
	text-align: center;
}
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

<div class="fixed-width" style="padding: 20px !important;">

<div class="one-column column cols" id="le_body_row_4_col_1">

<div class="element-container cf" data-style="" id="le_body_row_4_col_1_el_1">
<div class="element"> 
<div class="op-custom-html-block">
<div id="comentarios_face">
<span class="titulo_comentario">34 comentários</span>
<div class="perfil"><span class="nome"><img src="https://randersonaraujo.com/estrutura/wp-content/uploads/2017/01/avatar92-13.jpg" alt=""/><strong>Rodrigo Cunha</strong> disse:</span>
<p><p>Super indico!!! <br>
Parabénspelo profissionalismo!!!<br>
Após fazer este treinamento, indiquei nossa equipe e...<br>
Vou deixar eles falarem!!</p>
<span class="infos">Responder · Curtir · Seguir · 40 min</span>
<div class="perfil perfil2"><span class="nome"><img src="https://randersonaraujo.com/estrutura/wp-content/uploads/2017/01/avatar92-23.jpg" alt=""/><strong>Pâmela Caroline</strong> disse:</span>
<p>Muito Bom, realmente vai do básico ao avançado! A cada dia aprendo mais com o curso!!!<br></p>
<span class="infos">Responder · Curtir · Seguir · 22 min </span></div>
<div class="perfil perfil2"><span class="nome"><img src="https://randersonaraujo.com/estrutura/wp-content/uploads/2017/01/avatar92-22-1.jpg" alt=""/><strong>Juliana Costa</strong> disse:</span>
<p> Curso excelente, indico a todos que querem uma renda online!</p>
<span class="infos">Responder · Curtir · Seguir · 28 min </span></div>

<div class="perfil perfil2"><span class="nome"><img src="https://randersonaraujo.com/estrutura/wp-content/uploads/2017/01/pamela.jpg" alt=""/><strong>João Vitor Monteiro</strong> disse:</span>
<p> Fiz minha primeira venda graças a este curso e comunidade no Telegram sempre me ajuda quando tenho dificuldades.. Indico de olhos fechados!</p>
<span class="infos">Responder · Curtir · Seguir · 30 min </span></div>

<div class="perfil perfil2"><span class="nome"><img src="https://randersonaraujo.com/estrutura/wp-content/uploads/2017/01/rebeca.jpg" alt=""/><strong>Matheus Dias</strong> disse:</span>
<p> Super indico!!! <br>
Apesar de trabalhar na área a 2 anos, precisava do conhecimento atualizado que tem neste curso, da pra perceber que os caras vivenciam na prática o que ensinam! Indico pra todo mundo!!</p>
<span class="infos">Responder · Curtir · Seguir · 37 min </span></div>

</div>
<div class="perfil"><span class="nome"><img src="https://randersonaraujo.com/estrutura/wp-content/uploads/2017/01/avatar92-9.jpg" alt=""/>Gustavo Silva:</span>
<p>Curso muito bom mesmo eu fiz foi maravilhoso! Super indico!</p>
<span class="infos">Responder · Curtir · Seguir · 43 min</span></div>
<div class="perfil"><span class="nome"><img src="https://randersonaraujo.com/estrutura/wp-content/uploads/2017/01/avatar92-7.jpg" alt=""/><strong>Fabio Flaverlei de Almeida</strong> disse:</span>
<p>Super indicado esse curso!! fiz e farei mil vezes !!!!!!</p>
<span class="infos">Responder · Curtir · Seguir · 50 min </span></div>
<div class="perfil"><span class="nome"><img src="https://randersonaraujo.com/estrutura/wp-content/uploads/2017/01/avatar92-6.jpg" alt=""/><strong>Sol Nascente</strong>disse:</span>
<p>Muito bom!!!</p>
<span class="infos">Responder · Curtir · Seguir · 1 dia </span></div>
<div class="perfil"><span class="nome"><img src="https://randersonaraujo.com/estrutura/wp-content/uploads/2017/01/avatar92-4.jpg" alt=""/><strong>Érika Lima</strong> disse:</span>
<p>O valor desse curso dava pra ser maior pelo conteúdo que é passado! Sério mesmo, vocês vão amar.</p>
<span class="infos">Responder · Curtir · Seguir · 2 dias </span></div>
<div class="perfil"><span class="nome"><img src="https://randersonaraujo.com/estrutura/wp-content/uploads/2017/01/avatar92.jpg" alt=""/><strong>Klea Souza</strong> disse:</span>
<p>Recomendo, esse curso tem a base pra quem tá começando!</p>
<span class="infos">Responder · Curtir · Seguir · 3 dias</span>
<div class="perfil perfil2"><span class="nome"><img src="https://randersonaraujo.com/estrutura/wp-content/uploads/2017/01/avatar92-10.jpg" alt=""/><strong>Herika Borges</strong> disse:</span>
<p>Esse valor do curso todo?</p>
<span class="infos">Responder · Curtir · Seguir · 3 dias </span></div>
<div class="perfil perfil2"><span class="nome"><img src="https://randersonaraujo.com/estrutura/wp-content/uploads/2017/01/avatar92.jpg" alt=""/><strong>Klea Souza</strong> disse:</span>
<p>Herika Borges, isso mesmo! Mas eu acho que não vai demorar aumentar porquê tá dado!</p>
<span class="infos">Responder · Curtir · Seguir · 2 sem </span></div>
<div class="perfil perfil2"><span class="nome"><img src="https://randersonaraujo.com/estrutura/wp-content/uploads/2017/01/avatar92-10.jpg" alt=""/><strong>Herika Borges</strong> disse:</span>
<p>Obrigada, vou me inscrever logo também kkkkk</p>
<span class="infos">Responder · Curtir · Seguir · 3 sem </span></div>
</div>
</div></div> </div></div></div></div>

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