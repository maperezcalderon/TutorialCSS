<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name='description' content="Proyecto de la primera generacion"/>
	<title>Puls2014</title>
	<link rel="stylesheet" href="<?= $this->config->base_url()?>css/normalize.css">
	<link rel="stylesheet" href="<?= $this->config->base_url()?>css/estilos.css">
</head>
<body>
	<header>
		<figure id="logo">

			<img src='<?= $this->config->base_url()?>images/logo.png'>
		</figure>
		<h1>
			Puls2014: Comunidad de seguidores forofos de Michi
		</h1>
		<figure id="avatar">
			<img src='<?= $this->config->base_url()?>images/avatar.jpg'>
		</figure>	
	</header>
	<nav>
		<ul>
			<li><a href="#">Python'</a></li>
			<li><a href="#">Python</a></li>
			<li><a href="#">HTML5</a></li>
			<li><a href="#">Javascript</a></li>
			<li><a href="#">CSS3</a></li>
			<li><a href="#">Django</a></li>
			<li id="publicar_nav">
				<a href="#">Publicar</a>
			</li>
		</ul>
	</nav>
	<section id="contenido">
		<article class="item">
			<figure class="imagen_item">
				<img src="<?= $this->config->base_url()?>images/imagen.jpg">
			</figure>
			<h2 class="titulo_item">
				<a href="#">
					Título del articulo
				</a>
			</h2>
			<div class="autor_item">
				por <a href="#">Joana Muñoz</a>
			</div>
			<div class="datos_item">
				<a href="#" class="tag_item">pony</a>
				<span class="fecha_item">
					hace <strong>5</strong> min
				</span>
			</div>
			<div class="votacion">
				<a href="#" class="up"></a>
				720
				<a href="#" class="down"></a>
				<a href="#" class="comentarios_item">69</a>
				<a href="#" class="guardar_item"></a>
			</div>

		</article>
	</section>
	<footer>
		<p>
			<strong>
				Powered by Michi	
			</strong>
		</p>
		<p>
			mejorando.la 2014
		</p>
	</footer>
</body>
</html>