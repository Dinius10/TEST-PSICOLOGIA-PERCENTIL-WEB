<?php
error_reporting(0);

		$pregunta1 = $_POST['PreguntaUno'];
		$pregunta2 = $_POST['PreguntaDos'];
		$pregunta3 = $_POST['PreguntaTres'];
		$pregunta4 = $_POST['PreguntaCuatro'];
		$pregunta5 = $_POST['PreguntaCinco'];
		$pregunta6 = $_POST['PreguntaSeis'];
		$pregunta7 = $_POST['PreguntaSiete'];
		$pregunta8 = $_POST['PreguntaOcho'];
		$pregunta9 = $_POST['PreguntaNueve'];
		$pregunta10 = $_POST['PreguntaDiez'];
		$pregunta11 = $_POST['PreguntaOnce'];
		$pregunta12 = $_POST['PreguntaDoce'];
		$pregunta13 = $_POST['PreguntaTrece'];
		$pregunta14 = $_POST['PreguntaCatorce'];
		$pregunta15 = $_POST['PreguntaQuince'];
		$pregunta16 = $_POST['PreguntaDieciseis'];
		$pregunta17 = $_POST['PreguntaDiecisiete'];
		$pregunta18 = $_POST['PreguntaDieciocho'];
		$pregunta19 = $_POST['PreguntaDiecinueve'];
		$pregunta20 = $_POST['PreguntaVeinte'];
		$pregunta21 = $_POST['PreguntaVeintiuno'];
		$pregunta22 = $_POST['PreguntaVeintidos'];
		$pregunta23 = $_POST['PreguntaVeintitres'];
		$pregunta24 = $_POST['PreguntaVeinticuatro'];
		$pregunta25 = $_POST['PreguntaVeinticinco'];
		
	//sumar puntos---------------------------------------------
		$mensaje = "";
		$mensaje2 = "";
		$puntos = 0;

	if($pregunta1 == "d")
	{
		$puntos = $puntos + 1;
	}
	if($pregunta2 == "s")
	{
		$puntos = $puntos + 1;
	}
	if($pregunta3 == "s")
	{
		$puntos = $puntos + 1;
	}
	if($pregunta4 == "d")
	{
		$puntos = $puntos + 1;
	}
	if($pregunta5 == "s")
	{
		$puntos = $puntos + 1;
	}
	if($pregunta6 == "s")
	{
		$puntos = $puntos + 1;
	}
	if($pregunta7 == "d")
	{
		$puntos = $puntos + 1;
	}
	if($pregunta8 == "d")
	{
		$puntos = $puntos + 1;
	}
	if($pregunta9 == "s")
	{
		$puntos = $puntos + 1;
	}
	if($pregunta10 == "s")
	{
		$puntos = $puntos + 1;
	}
	if($pregunta11 == "d")
	{
		$puntos = $puntos + 1;
	}
	if($pregunta12 == "d")
	{
		$puntos = $puntos + 1;
	}
	if($pregunta13 == "s")
	{
		$puntos = $puntos + 1;
	}
	if($pregunta14 == "d")
	{
		$puntos = $puntos + 1;
	}
	if($pregunta15 == "s")
	{
		$puntos = $puntos + 1;
	}
	if($pregunta16 == "d")
	{
		$puntos = $puntos + 1;
	}
	if($pregunta17 == "d")
	{
		$puntos = $puntos + 1;
	}
	if($pregunta18 == "s")
	{
		$puntos = $puntos + 1;
	}
	if($pregunta19 == "s")
	{
		$puntos = $puntos + 1;
	}
	if($pregunta20 == "d")
	{
		$puntos = $puntos + 1;
	}
	if($pregunta21 == "d")
	{
		$puntos = $puntos + 1;
	}
	if($pregunta22 == "d")
	{
		$puntos = $puntos + 1;
	}
	if($pregunta23 == "s")
	{
		$puntos = $puntos + 1;
	}
	if($pregunta24 == "s")
	{
		$puntos = $puntos + 1;
	}if($pregunta25 == "d")
	{
		$puntos = $puntos + 1;
	}
	
	//puntos y resultados------------------------------------
     if ($puntos == 1)
	{
		$mensaje=" Percentil es: 0";
	} else if ($puntos == 2)
	{
		$mensaje=" Percentil es: 1";
	}else if ($puntos == 3)
	{
		$mensaje=" Percentil es: 2";
	}else if ($puntos == 4)
	{
		$mensaje=" Percentil es: 4";
	}else if ($puntos == 5)
	{
		$mensaje=" Percentil es: 6";

	} else if ($puntos == 6)
	{
		$mensaje=" Percentil es: 9";
	
	} else if ($puntos == 7)
	{
		$mensaje=" Percentil es: 11";
	
	} else if ($puntos == 8)
	{
		$mensaje=" Percentil es: 14";
	
	} else if ($puntos == 9)
	{
		$mensaje=" Percentil es: 19";
	
	} else if ($puntos == 10)
	{
		$mensaje=" Percentil es: 24";
	
	} else if ($puntos == 11)
	{
		$mensaje=" Percentil es: 31";
	
	} else if ($puntos == 12)
	{
		$mensaje=" Percentil es: 40";
	
	} else if ($puntos == 13)
	{
		$mensaje=" Percentil es: 48";
	
	} else if ($puntos == 14)
	{
		$mensaje=" Percentil es: 57";
	
	} else if ($puntos == 15)
	{
		$mensaje=" Percentil es: 66";
	
	} else if ($puntos == 16)
	{
		$mensaje=" Percentil es: 75";
	
	} else if ($puntos == 17)
	{
		$mensaje=" Percentil es: 81";
	
	} else if ($puntos == 18)
	{
		$mensaje=" Percentil es: 87";
	
	} else if ($puntos == 19)
	{
		$mensaje=" Percentil es: 91";
	
	} else if ($puntos == 20)
	{
		$mensaje=" Percentil es: 94";
	
	} else if ($puntos == 21)
	{
		$mensaje=" Percentil es: 96";
	
	} else if ($puntos == 22)
	{
		$mensaje=" Percentil es: 97";
	
	} else if ($puntos == 23)
	{
		$mensaje=" Percentil es: 98";
	
	} else if ($puntos == 24)
	{
		$mensaje=" Percentil es: 99";
	
	} else if ($puntos == 25)
	{
		$mensaje=" Percentil es: 99";
	}
	//--------------------------------------------------
	 if (($puntos <= 12)&&($puntos >= 1)) {
	   $mensaje2=" Es Reservado";
	}
	else {
	    $mensaje2=" Es Expansivo";
	}

    
	$Reservado_Expansivo = $puntos . $mensaje;

	//echo "Puntos Resultado: $puntos puntos(+) <br> Percentil $mensaje <br>";

     //$nombre = $_POST['nombre'];
	 session_start();
     $nomape = $_SESSION[ 'nomape'];

     $contenido="
     ...........II. RESERVADO & EXPANSIVO..........

     Nombre: $nomape
     Puntos: $Reservado_Expansivo
     Resultado: $mensaje2


     ....................................................................";


     $archivo=fopen("respuestas/$nomape.txt", "a+");
     fwrite($archivo,$contenido);
	
	
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/e077a1619a.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <title>TEST PERCENTIL</title>
</head>
<body>
<form class="contenedor" action="parte4.php" method="POST">
	<div class="libreta">
		<div class="titulo">
			<h3>PARTE 3 <br> PERCENTIL</h3>	
		</div>

		<div id="div1" class="preguntas">
			<h4>1. Me es fácil dejar a unos amigos para conocer a
			otros.</h4>
			<input required type="radio" class="form-control" name="PreguntaUno" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaUno" value="d">Diferente

			<h4>2. Mantengo mi manera de pensar y hablar
			aunque no guste a los otros.</h4>
			<input required type="radio" class="form-control" name="PreguntaDos" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaDos" value="d">Diferente

			<h4>3. Intento jugar lo mejor posible aunque tenga
			poco éxito en el juego.
			</h4>
			<input required type="radio" class="form-control" name="PreguntaTres" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaTres" value="d">Diferente

			<h4>4. Unas veces estudio y hago mis tareas muy bien,
			otras veces lo hago con poco interés.</h4>
			<input required type="radio" class="form-control" name="PreguntaCuatro" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaCuatro" value="d">Diferente

			<h4>5. Cuando sé que un trabajo me va a servir, lo
			hago aunque no me guste.</h4>
			<input required type="radio" class="form-control" name="PreguntaCinco" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaCinco" value="d">Diferente

			<h4>6. Me gustan los trabajos que exigen atención y
			esfuerzo.</h4>
			<input required type="radio" class="form-control" name="PreguntaSeis" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaSeis" value="d">Diferente

			<h4>7. Cambio fácilmente de opinión; después de
			haber decidido hacer una cosa, hago otra.</h4>
			<input required type="radio" class="form-control" name="PreguntaSiete" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaSiete" value="d">Diferente

			<h4>8. Me gusta ayudar a los demás, con tal que no
			me lleve demasiado tiempo.</h4>
			<input required type="radio" class="form-control" name="PreguntaOcho" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaOcho" value="d">Diferente

			<h4>9. No me desanimo fácilmente ante un problema
			difícil, dedico mucho tiempo a solucionarlo.</h4>
			<input required type="radio" class="form-control" name="PreguntaNueve" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaNueve" value="d">Diferente

			<h4>10. Actúo según lo que pienso, aun cuando
			encuentro ideas u opiniones diferentes.</h4>
			<input required type="radio" class="form-control" name="PreguntaDiez" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaDiez" value="d">Diferente

			<h4>11. Abandono fácilmente el juego cuando no sale a
			mi gusto.</h4>
			<input required type="radio" class="form-control" name="PreguntaOnce" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaOnce" value="d">Diferente

			<h4>12. Unas veces obedezco las reglas del colegio y
			otras apenas hago caso de ellas.
			</h4>
			<input required type="radio" class="form-control" name="PreguntaDoce" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaDoce" value="d">Diferente

			<h4>13. No me detienen ni alabanzas ni criticas cuando
			he decidido hacer algo.</h4>
			<input required type="radio" class="form-control" name="PreguntaTrece" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaTrece" value="d">Diferente

			<h4>14. Abandono las cosas que pienso hacer cuando
			encuentro demasiados obstáculos para
			realizarlos.</h4>
			<input required type="radio" class="form-control" name="PreguntaCatorce" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaCatorce" value="d">Diferente

			<h4>15. Termino las tareas que comienzo, aunque sean
			poco interesantes.</h4>
			<input required type="radio" class="form-control" name="PreguntaQuince" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaQuince" value="d">Diferente

			<h4>16. Necesito que me apoyen para continuar el
			trabajo y los estudios.
			</h4>
			<input required type="radio" class="form-control" name="PreguntaDieciseis" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaDieciseis" value="d">Diferente

			<h4>17. Tardo en decidirme cuando se trata de un
			trabajo difícil.</h4>
			<input required type="radio" class="form-control" name="PreguntaDiecisiete" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaDiecisiete" value="d">Diferente

			<h4>18. Cuando me decido a leer un libro,
			generalmente lo termino.
			</h4>
			<input required type="radio" class="form-control" name="PreguntaDieciocho" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaDieciocho" value="d">Diferente

			<h4>19. Me gustan las dificultades por el placer de
			superarlas.</h4>
			<input required type="radio" class="form-control" name="PreguntaDiecinueve" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaDiecinueve" value="d">Diferente

			<h4>20. Me desanimo fácilmente cuando un trabajo me
			resulta difícil.</h4>
			<input required type="radio" class="form-control" name="PreguntaVeinte" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaVeinte" value="d">Diferente

			<h4>21. Me dejo guiar demasiado por los otros, por
			miedo a desagradarles.</h4>
			<input required type="radio" class="form-control" name="PreguntaVeintiuno" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaVeintiuno" value="d">Diferente

			<h4>22. Las críticas me desaniman y hace que renuncie
			a mis metas.</h4>
			<input required type="radio" class="form-control" name="PreguntaVeintidos" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaVeintidos" value="d">Diferente

			<h4>23. Por un pequeño malestar no dejo de ir al
			colegio o al trabajo.</h4>
			<input required type="radio" class="form-control" name="PreguntaVeintitres" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaVeintitres" value="d">Diferente

			<h4>24. Cuando prometo asistir a una reunión, cumplo
			mi palabra.</h4>
			<input required type="radio" class="form-control" name="PreguntaVeinticuatro" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaVeinticuatro" value="d">Diferente

			<h4>25. Después de tomar una decisión cambio
			fácilmente de parecer.</h4>
			<input required type="radio" class="form-control" name="PreguntaVeinticinco" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaVeinticinco" value="d">Diferente
		</div>
	</div>
	
	<div class="botones">
	    
		<button ><div class="circulo"><span>>></span></div> <p>NEXT</p></button>
		
	</div>
</form>		

<script src="script.js"></script>
</body>
</html>