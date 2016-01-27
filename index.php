<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lynxware - Freelancer Web Developer</title>

<!-- META -->
<meta name="keywords" 
	content="HTML, CSS, PHP, Java, Javascript, Free, Lancer, Freelancer, 
    páginas, Programador, Lynx, Ware, LynxWare, solução, solucao, trabalho, job, 
    desenvolvedor, desenvolvimento, development, developer, estilo, style, sheet, 
    programmer, game, creating, creator, mini-game, jogo, preço, comprar, price, 
    brasil, brazil, são paulo, sao, paulo, web, site, website, pedidos, 
    Sites Vitrine, Folhas de Estilo, Sites Elaborados, Sites com AJAX, Sistemas em PHP, Sistemas de Login, 
    Sistemas de Produtos, Programas Simples em Java, Classes e algoritmos em Java, Mini-Games em Java">
<meta name="description" content="Lynx Ware - Freelancer programador web e programador java">
<meta name="author" content="André Luiz Micheletti">
<!-- END META -->

<!-- Links -->
<link type="text/css" rel="stylesheet" href="style.css" />
<link rel="icon" href="images/lynx_icon.png" />
<link href='http://fonts.googleapis.com/css?family=Cuprum' rel='stylesheet' type='text/css'>
<!-- END Links -->

<!-- JQuery -->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!-- END JQuery -->

<script type="text/javascript" src="lynxscript.js"></script>

</head>

<body>

<div class="header">
	<a href="index.php"><div class="logo"><img src="images/header_drawn.png" /></div></a>
    <p style="float:right; line-height:45px; margin-right:20px; position:static;"> 
    Sua solução para programação web e java.
</div>

<div class="menu"><center>
	<div class="menu-content">
  
    	<a class="link-menu" href="javascript:carregar('inicio.php')"><div class="menu-item">Início</div></a>
    	<a class="link-menu" href="javascript:carregar('portfolio.php')"><div class="menu-item">Portfólio</div></a>
    	<a class="link-menu" href="javascript:carregar('pedido.php')"><div class="menu-item">Peça o seu</div></a>
    	<a class="link-menu" href="javascript:carregar('sobre.php')"><div class="menu-item">Sobre a Lynx</div></a>
    	<a class="link-menu" href="javascript:carregar('contato.php')"><div class="menu-item">Contato</div></a>
        
    </div>
</center></div>


<div class="site">

<div class="content">
    <div class="bracket-up"></div><br />
	<div class="content-usable" id="conteudo">
    	<style type="text/css">
		
		div.inicio {
			height:1300px;
			border-left:2px solid #000;
			color:#000;
		}
		
		img.icon {
			margin-bottom:-5px;
			margin-left:0px;
			margin-right:0px;
		}
		
		p.title {
			color:#000;
			font-size:48px;
			margin-left:20px;
			text-indent:40px;
			margin-bottom:50px;
			
		}
		
		p.sub-title {
			color:#000;
			font-size:38px;
			margin-left:20px;
			margin-top:60px;
			text-indent:80px;
			margin-bottom:25px;
		}
		
		div.text {
			width:900px;
			color:#000;
			font-size:28px;
			margin-left:60px;
			text-indent:20px;
		}
		
		a{
			color:#00004A;
			font-size:28px;	
			text-decoration:underline;
		}
		
		a:visited {
			color:#161616;
			font-size:28px;
			text-decoration:underline;	
		}
		
		a:hover {
			color:#000080;
			font-size:inherit;
			text-decoration:underline;
		}
		
		li{
			font-family: 'Cuprum', sans-serif;
			color:#000;
			font-size:inherit;
		}
		ul{
			font-family: 'Cuprum', sans-serif;
			color:#000;
			font-size:inherit;
		}
		
		</style>
		
		<div class="inicio">
			<br /><p class="title">Sua solução para programação Web e Java.</p>
			<div class="text">
			Bem-vindo(a) ao site da Lynxware. Explore o site para conhecer um pouco mais do meu trabalho...
			</div><br />
			<p class="sub-title">A LynxWare</p>
			<div class="text">
			Não é uma empresa real, é apenas um apelido para o site. Aqui eu exponho e vendo o meu trabalho de freelancer, principalmente
			em programação web (como php e html). Design não é meu forte, mas eu faço o possível para deixar o site interessante (veja esse,
			por exemplo).
			</div>
			<p class="sub-title" id="fazemos">O que fazemos</p>
			<div class="text">
			Aqui nós trabalhamos com diversos casos, e estamos sempre à disposição para trazer a solução para nosso cliente.<br /><br />
			Nós trabalhamos com pedidos de:<br /><br />
			<ul>
				<li>Sites Vitrine <img class="icon" src="images/html.png" /><img class="icon" src="images/css.png" /></li>
				<li>Folhas de Estilo <img class="icon" src="images/css.png" /></li>
				<li>Sites Elaborados 
					<img class="icon" src="images/html.png" />
					<img class="icon" src="images/css.png" />
					<img class="icon" src="images/php.png" />
				</li>
				<li>Sites com AJAX 
				<img class="icon" src="images/html.png" />
				<img class="icon" src="images/css.png" />
				<img class="icon" src="images/java.png" />
				</li><br />
				
				<li>Sistemas em PHP <img class="icon" src="images/php.png" /></li>
				<li>Sistemas de Login <img class="icon" src="images/php.png" /></li>
				<li>Sistemas de Produtos* <img class="icon" src="images/php.png" /></li><br />
				
				
				<li>Programas Simples em Java ** <img class="icon" src="images/java.png" /></li>
				<li>Classes e algoritmos em Java <img class="icon" src="images/java.png" /></li>
				<li>Mini-Games em Java <img class="icon" src="images/java.png" /></li>
			</ul>
			
			<br /><p style="margin-left:100px;color:#000">* Apenas cadastro no banco de dados de produtos, e não venda on-line de produtos. </p>
			<p style="margin-left:100px;color:#000"> ** Não faço programas de grande porte em java (ainda).
			 Olhe na minha página de <a href="javascript:carregar('portfolio.php')" style="font-size:18px;">portfólio</a> para ter uma idéia.</p>
			
			</div>
			
			
		</div>
			
		
		</div>
    </div>
    <br /><div class="bracket-down"></div>
</div>

<div class="footer">
	<div style='padding-left:36%; padding-right:30%'>
        <a class='facebook' href='https://www.facebook.com/lynxware' target='_blank'></a>
		<img src="images/lynx_icon.png" style='margin-bottom:-25px;height:54px;'/> 
        Criado por André Luiz Micheletti<br />
        <p style='color:rgb(153, 153, 153);padding-left:68px;'>@ 2015 All rights reserved</p>
	</div>
</div>

</div>
</body>
<?php

include('lynxact.php');

?>
</html>