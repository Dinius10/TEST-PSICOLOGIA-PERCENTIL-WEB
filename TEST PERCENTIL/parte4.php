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
	if(($puntos == 1) || ($puntos == 5))
	{
		$mensaje="0";

	} else if ($puntos == 6)
	{
		$mensaje=" Percentil es: 1";
	
	} else if ($puntos == 7)
	{
		$mensaje=" Percentil es: 1";
	
	} else if ($puntos == 8)
	{
		$mensaje=" Percentil es: 2";
	
	} else if ($puntos == 9)
	{
		$mensaje=" Percentil es: 5";
	
	} else if ($puntos == 10)
	{
		$mensaje=" Percentil es: 7";
	
	} else if ($puntos == 11)
	{
		$mensaje=" Percentil es: 10";
	
	} else if ($puntos == 12)
	{
		$mensaje=" Percentil es: 14";
	
	} else if ($puntos == 13)
	{
		$mensaje=" Percentil es: 20";
	
	} else if ($puntos == 14)
	{
		$mensaje=" Percentil es: 26";
	
	} else if ($puntos == 15)
	{
		$mensaje=" Percentil es: 32";
	
	} else if ($puntos == 16)
	{
		$mensaje=" Percentil es: 40";
	
	} else if ($puntos == 17)
	{
		$mensaje=" Percentil es: 54";
	
	} else if ($puntos == 18)
	{
		$mensaje=" Percentil es: 63";
	
	} else if ($puntos == 19)
	{
		$mensaje=" Percentil es: 73";
	
	} else if ($puntos == 20)
	{
		$mensaje=" Percentil es: 81";
	
	} else if ($puntos == 21)
	{
		$mensaje=" Percentil es: 88";
	
	} else if ($puntos == 22)
	{
		$mensaje=" Percentil es: 94";
	
	} else if ($puntos == 23)
	{
		$mensaje=" Percentil es: 96";
	
	} else if ($puntos == 24)
	{
		$mensaje=" Percentil es: 98";
	
	} else if ($puntos == 25)
	{
		$mensaje=" Percentil es: 99";
	}
	//------------------------------------------------------------
	 if (($puntos <= 12)&&($puntos >= 1)) {
	   $mensaje2=" Es Inconstante";
	}
	else {
	    $mensaje2=" Es Perseverante";
	}
	
	$Inconstante_Perseverante = $puntos . $mensaje;

	//echo "Puntos Resultado: $puntos puntos(+) <br> Percentil $mensaje <br>";

     //$nombre = $_POST['nombre'];
     session_start();
     $nomape = $_SESSION[ 'nomape'];

     $contenido="
     ........III. INCONSTANTE & PERSEVERANTE........

     Nombre: $nomape
     Puntos: $Inconstante_Perseverante
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
<form class="contenedor" action="parte5.php" method="POST">
	<div class="libreta">
		<div class="titulo">
			<h3>PARTE 4 <br> PERCENTIL</h3>	
		</div>

		<div id="div1" class="preguntas">
			<h4>1. No puedo tener muchos amigos entre mis
			compañeros de clase.</h4>
			<input required type="radio" class="form-control" name="PreguntaUno" value="s">Semejante 
			<input required type="radio" class="form-control" name="PreguntaUno" value="d">Diferente

			<h4>2. No me importa saber que otros hablan mal de
			mí.</h4>
			<input required type="radio" class="form-control" name="PreguntaDos" value="s">Semejante 
			<input required type="radio" class="form-control" name="PreguntaDos" value="d">Diferente

			<h4>3. Los días de vacación, prefiero quedarme en
			casa en vez de salir de paseo.</h4>
			<input required type="radio" class="form-control" name="PreguntaTres" value="s">Semejante 
			<input required type="radio" class="form-control" name="PreguntaTres" value="d">Diferente

			<h4>4. Prefiero escribirle a mi profesor que ir a decirle
			lo que pienso.
			</h4>
			<input required type="radio" class="form-control" name="PreguntaCuatro" value="s">Semejante 
			<input required type="radio" class="form-control" name="PreguntaCuatro" value="d">Diferente

			<h4>5. Cuando me llaman la atención me afecta poco y
			las olvido pronto.
			</h4>
			<input required type="radio" class="form-control" name="PreguntaCinco" value="s">Semejante 
			<input required type="radio" class="form-control" name="PreguntaCinco" value="d">Diferente

			<h4>6. Converso fácilmente con los desconocidos.</h4>
			<input required type="radio" class="form-control" name="PreguntaSeis" value="s">Semejante 
			<input required type="radio" class="form-control" name="PreguntaSeis" value="d">Diferente

			<h4>7. Me gusta reflexionar y solucionar mis
			dificultades sin ayuda de otros.</h4>
			<input required type="radio" class="form-control" name="PreguntaSiete" value="s">Semejante 
			<input required type="radio" class="form-control" name="PreguntaSiete" value="d">Diferente

			<h4>8. Prefiero los juegos tranquilos (cartas, damas) y
			no los que tienen mucho movimiento (pelota o
			fútbol).</h4>
			<input required type="radio" class="form-control" name="PreguntaOcho" value="s">Semejante 
			<input required type="radio" class="form-control" name="PreguntaOcho" value="d">Diferente

			<h4>9. Hago fácilmente amistad con los compañeros
			nuevos.</h4>
			<input required type="radio" class="form-control" name="PreguntaNueve" value="s">Semejante 
			<input required type="radio" class="form-control" name="PreguntaNueve" value="d">Diferente

			<h4>10. Me gusta prestar servicios en clase, tales como
			ayudar al profesor y a los compañeros.</h4>
			<input required type="radio" class="form-control" name="PreguntaDiez" value="s">Semejante 
			<input required type="radio" class="form-control" name="PreguntaDiez" value="d">Diferente

			<h4>11. Cuando me equivoco en clase, me siento mal e
			inquieto.</h4>
			<input required type="radio" class="form-control" name="PreguntaOnce" value="s">Semejante 
			<input required type="radio" class="form-control" name="PreguntaOnce" value="d">Diferente

			<h4>12. Prefiero leer una historia que verla en la
			pantalla o en el escenario.
			</h4>
			<input required type="radio" class="form-control" name="PreguntaDoce" value="s">Semejante 
			<input required type="radio" class="form-control" name="PreguntaDoce" value="d">Diferente

			<h4>13. Me gustan los juegos que exigen mucha
			actividad y ejercitan mis fuerzas físicas.</h4>
			<input required type="radio" class="form-control" name="PreguntaTrece" value="s">Semejante 
			<input required type="radio" class="form-control" name="PreguntaTrece" value="d">Diferente

			<h4>14. Después de visitar a un amigo pienso mucho en
			qué palabras amables tendría que haberle
			dicho.</h4>
			<input required type="radio" class="form-control" name="PreguntaCatorce" value="s">Semejante 
			<input required type="radio" class="form-control" name="PreguntaCatorce" value="d">Diferente

			<h4>15. Me gusta llamar la atención o que me hagan
			bromas inocentes en clase.</h4>
			<input required type="radio" class="form-control" name="PreguntaQuince" value="s">Semejante 
			<input required type="radio" class="form-control" name="PreguntaQuince" value="d">Diferente

			<h4>16. Prefiero soñar en los éxitos, a esforzarme por
			conseguirlos.</h4>
			<input required type="radio" class="form-control" name="PreguntaDieciseis" value="s">Semejante 
			<input required type="radio" class="form-control" name="PreguntaDieciseis" value="d">Diferente

			<h4>17. Prefiero guardar mis penas para mi solo en vez
			de contarlas a otros.</h4>
			<input required type="radio" class="form-control" name="PreguntaDiecisiete" value="s">Semejante 
			<input required type="radio" class="form-control" name="PreguntaDiecisiete" value="d">Diferente

			<h4>18. Prefiero comenzar rápido un trabajo en vez de
			pensar mucho en su realización.</h4>
			<input required type="radio" class="form-control" name="PreguntaDieciocho" value="s">Semejante 
			<input required type="radio" class="form-control" name="PreguntaDieciocho" value="d">Diferente

			<h4>19. Cuando me equivoco, soy el primero en reírme
			y lo olvido pronto.</h4>
			<input required type="radio" class="form-control" name="PreguntaDiecinueve" value="s">Semejante 
			<input required type="radio" class="form-control" name="PreguntaDiecinueve" value="d">Diferente

			<h4>20. Me gusta pensar en actividades agradables que
			sean difíciles de hacer.</h4>
			<input required type="radio" class="form-control" name="PreguntaVeinte" value="s">Semejante 
			<input required type="radio" class="form-control" name="PreguntaVeinte" value="d">Diferente

			<h4>21. Si tengo algún rato libre prefiero pasarlo en
			casa en vez de salir a la calle.</h4>
			<input required type="radio" class="form-control" name="PreguntaVeintiuno" value="s">Semejante 
			<input required type="radio" class="form-control" name="PreguntaVeintiuno" value="d">Diferente

			<h4>22. Pienso mucho, pero no me gusta comunicar
			mis pensamientos.</h4>
			<input required type="radio" class="form-control" name="PreguntaVeintidos" value="s">Semejante 
			<input required type="radio" class="form-control" name="PreguntaVeintidos" value="d">Diferente

			<h4>23. Generalmente estoy de buen humor y contento
			con lo que sucede.</h4>
			<input required type="radio" class="form-control" name="PreguntaVeintitres" value="s">Semejante 
			<input required type="radio" class="form-control" name="PreguntaVeintitres" value="d">Diferente

			<h4>24. Si alguien me causa dolor, lo olvido pronto y no
			le guardo rencor.</h4>
			<input required type="radio" class="form-control" name="PreguntaVeinticuatro" value="s">Semejante 
			<input required type="radio" class="form-control" name="PreguntaVeinticuatro" value="d">Diferente

			<h4>25. Me lastiman mucho las burlas y no las olvido
			fácilmente.</h4>
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