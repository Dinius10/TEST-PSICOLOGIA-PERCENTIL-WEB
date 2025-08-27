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
	if(($puntos == 1) || ($puntos == 3))
	{
		$mensaje="0";

	} else if ($puntos == 4)
	{
		$mensaje=" Percentil es: 1";

	} else if ($puntos == 5)
	{
		$mensaje=" Percentil es: 2";

	} else if ($puntos == 6)
	{
		$mensaje=" Percentil es: 3";
	
	} else if ($puntos == 7)
	{
		$mensaje=" Percentil es: 4";
	
	} else if ($puntos == 8)
	{
		$mensaje=" Percentil es: 5";
	
	} else if ($puntos == 9)
	{
		$mensaje=" Percentil es: 7";
	
	} else if ($puntos == 10)
	{
		$mensaje=" Percentil es: 12";
	
	} else if ($puntos == 11)
	{
		$mensaje=" Percentil es: 16";
	
	} else if ($puntos == 12)
	{
		$mensaje=" Percentil es: 20";
	
	} else if ($puntos == 13)
	{
		$mensaje=" Percentil es: 25";
	
	} else if ($puntos == 14)
	{
		$mensaje=" Percentil es: 30";
	
	} else if ($puntos == 15)
	{
		$mensaje=" Percentil es: 40";
	
	} else if ($puntos == 16)
	{
		$mensaje=" Percentil es: 52";
	
	} else if ($puntos == 17)
	{
		$mensaje=" Percentil es: 65";
	
	} else if ($puntos == 18)
	{
		$mensaje=" Percentil es: 76";
	
	} else if ($puntos == 19)
	{
		$mensaje=" Percentil es: 86";
	
	} else if ($puntos == 20)
	{
		$mensaje=" Percentil es: 90";
	
	} else if ($puntos == 21)
	{
		$mensaje=" Percentil es: 96";
	
	} else if ($puntos == 22)
	{
		$mensaje=" Percentil es: 98";
	
	} else if ($puntos == 23)
	{
		$mensaje=" Percentil es: 99";
	
	} else if ($puntos == 24)
	{
		$mensaje=" Percentil es: 99";
	
	} else if ($puntos == 25)
	{
		$mensaje=" Percentil es: 99";
	}
	//------------------------------------------------------------
	 if (($puntos <= 12)&&($puntos >= 1)) {
	   $mensaje2=" Es Introvertido";
	}
	else {
	    $mensaje2=" Es Extrovertido";
	}
	
    $Introvertido_Extravertido = $puntos . $mensaje;

	//echo "Puntos Resultado: $puntos puntos(+) <br> Percentil $mensaje <br>";

     //$nombre = $_POST['nombre'];
	 session_start();
     $nomape = $_SESSION[ 'nomape'];


     $contenido="
     ......IV. INTROVERTIDO & EXTRAVERTIDO......

     Nombre: $nomape
     Puntos: $Introvertido_Extravertido
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
<form class="contenedor" action="parte6.php" method="POST">
	<div class="libreta">
		<div class="titulo">
			<h3>PARTE 5 <br> PERCENTIL</h3>	
		</div>

		<div id="div1" class="preguntas">
			<h4>1. Desconfío de mi cuando tengo que hablar
			delante de mis compañeros de clase.
			</h4>
			<input required type="radio" class="form-control" name="PreguntaUno" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaUno" value="d">Diferente

			<h4>2. Confío en el triunfo cuando comienzo algún
			trabajo.</h4>
			<input required type="radio" class="form-control" name="PreguntaDos" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaDos" value="d">Diferente

			<h4>3. Cuando hay que hacer algo, me decido con
			rapidez.</h4>
			<input required type="radio" class="form-control" name="PreguntaTres" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaTres" value="d">Diferente

			<h4>4. Dudo de mi capacidad, cuando se me pide
			ayuda.
			</h4>
			<input required type="radio" class="form-control" name="PreguntaCuatro" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaCuatro" value="d">Diferente

			<h4>5. Si un compañero me pide que le preste algo, lo
			hago sin dudar.</h4>
			<input required type="radio" class="form-control" name="PreguntaCinco" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaCinco" value="d">Diferente

			<h4>6. No necesito pensar mucho tiempo para
			decidirme.</h4>
			<input required type="radio" class="form-control" name="PreguntaSeis" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaSeis" value="d">Diferente

			<h4>7. Me asusto fácilmente en presencia de mis
			superiores.</h4>
			<input required type="radio" class="form-control" name="PreguntaSiete" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaSiete" value="d">Diferente

			<h4>8. Frente a una tarea difícil, dudo antes de
			decidirme a realizarla.</h4>
			<input required type="radio" class="form-control" name="PreguntaOcho" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaOcho" value="d">Diferente

			<h4>9. Cuando cometo un error, reconozco mi
			equivocación.</h4>
			<input required type="radio" class="form-control" name="PreguntaNueve" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaNueve" value="d">Diferente

			<h4>10. Cuando termino una tarea y sé que lo hice bien,
			no me dejo desanimar con la crítica.</h4>
			<input required type="radio" class="form-control" name="PreguntaDiez" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaDiez" value="d">Diferente

			<h4>11. Me falta la seguridad que observo en mis
			compañeros y no confío mucho en mi mismo.</h4>
			<input required type="radio" class="form-control" name="PreguntaOnce" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaOnce" value="d">Diferente

			<h4>12. Generalmente procuro evitarla presencia de
			personas autoritarias.
			</h4>
			<input required type="radio" class="form-control" name="PreguntaDoce" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaDoce" value="d">Diferente

			<h4>13. No me desanimo cuando los otros no quieren
			aceptar mis ideas.</h4>
			<input required type="radio" class="form-control" name="PreguntaTrece" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaTrece" value="d">Diferente

			<h4>14. No me atrevo a organizar nada por miedo de
			que salga mal.</h4>
			<input required type="radio" class="form-control" name="PreguntaCatorce" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaCatorce" value="d">Diferente

			<h4>15. Doy a conocer mis razones y defiendo mis ideas
			con seguridad, cuando estoy en lo correcto.</h4>
			<input required type="radio" class="form-control" name="PreguntaQuince" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaQuince" value="d">Diferente

			<h4>16. Creo que para triunfar en la vida necesito más
			ayuda de los demás.</h4>
			<input required type="radio" class="form-control" name="PreguntaDieciseis" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaDieciseis" value="d">Diferente

			<h4>17. La vergüenza no me deja actuar y hacer el bien
			que quisiera.</h4>
			<input required type="radio" class="form-control" name="PreguntaDiecisiete" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaDiecisiete" value="d">Diferente

			<h4>18. Prefiero hacer las cosas por mi cuenta antes
			que seguir siempre a los demás.</h4>
			<input required type="radio" class="form-control" name="PreguntaDieciocho" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaDieciocho" value="d">Diferente

			<h4>19. Me parece que la mayor parte de mis amigos
			tienen confianza en mí.</h4>
			<input required type="radio" class="form-control" name="PreguntaDiecinueve" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaDiecinueve" value="d">Diferente

			<h4>20. Me falta valor y decisión que aseguran el triunfo
			en el juego.</h4>
			<input required type="radio" class="form-control" name="PreguntaVeinte" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaVeinte" value="d">Diferente

			<h4>21. No ambiciono conseguir un puesto elevado en
			la sociedad.</h4>
			<input required type="radio" class="form-control" name="PreguntaVeintiuno" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaVeintiuno" value="d">Diferente

			<h4>22. Me parece que mis compañeros son más
			hábiles que yo.</h4>
			<input required type="radio" class="form-control" name="PreguntaVeintidos" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaVeintidos" value="d">Diferente

			<h4>23. Ante la dificultad no dudo en arriesgarme si
			tengo posibilidades de éxito.</h4>
			<input required type="radio" class="form-control" name="PreguntaVeintitres" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaVeintitres" value="d">Diferente

			<h4>24. Si me invitan a participar en un juego difícil
			acepto sin dudar.</h4>
			<input required type="radio" class="form-control" name="PreguntaVeinticuatro" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaVeinticuatro" value="d">Diferente

			<h4>25. Muchas veces pienso que no tengo tanto
			talento como la mayor parte de mis
			compañeros.</h4>
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