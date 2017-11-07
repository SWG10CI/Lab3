<!DOCTYPE html>
<html>
  <head>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">
	<title>Preguntas</title>
    <link rel='stylesheet' type='text/css' href='estilos/style.css' />
	<link rel='stylesheet' 
		   type='text/css' 
		   media='only screen and (min-width: 530px) and (min-device-width: 481px)'
		   href='estilos/wide.css' />
	<link rel='stylesheet' 
		   type='text/css' 
		   media='only screen and (max-width: 480px)'
		   href='estilos/smartphone.css' />
  </head>
  <body>
  <div id='page-wrap'>
	<header class='main' id='h1'>
      		<span class="right"><a href="layout.html">Logout</a></span>
      		<span class="right" style="display:none;"><a href="/logout">Logout</a></span>
		<h2>Quiz: el juego de las preguntas</h2>
    </header>
	<nav class='main' id='n1' role='navigation'>
		<span><a href='layoutlogged.html'>Inicio</a></spam>
		<span><a href='pregunta.php'>Preguntas</a></spam>
		<span><a href='VerPreguntasConFoto.php'>Ver Preguntas</a></spam>
		<span><a href='creditoslogged.html'>Creditos</a></spam>
	</nav>
    <section class="main" id="s1">
    
	<div style="float: left; overflow: scroll; height: 300px; ">
		
		<?php

			$preguntas = simplexml_load_file('preguntas.xml');

			echo '<table border=1> <tr> <th> Enunciado </th><th> Complejidad </th> <th> Tema </th>
				</tr>';

			foreach ($preguntas->children() as $pregunta){

				echo '<tr>';
				echo	'<td>' . $pregunta->itemBody->p . '</td>' ;
				echo	'<td>' . $pregunta->attributes()->complexity . '</td>' ;
				echo	'<td>' . $pregunta->attributes()->subject . '</td>' ;
			echo '</tr>';

			}





		?>


	</div>
    </section>
	<footer class='main' id='f1'>
		<p><a href="http://es.wikipedia.org/wiki/Quiz" target="_blank">Que es un Quiz?</a></p>
		<a href='https://github.com/SWG10CI/Lab3'>Link GITHUB</a>
	</footer>
</div>
</body>
</html>
