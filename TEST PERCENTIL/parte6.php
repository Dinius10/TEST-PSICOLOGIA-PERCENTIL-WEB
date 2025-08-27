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
		$mensaje=" Percentil es: 3";
	
	} else if ($puntos == 8)
	{
		$mensaje=" Percentil es: 5";
	
	} else if ($puntos == 9)
	{
		$mensaje=" Percentil es: 8";
	
	} else if ($puntos == 10)
	{
		$mensaje=" Percentil es: 12";
	
	} else if ($puntos == 11)
	{
		$mensaje=" Percentil es: 17";
	
	} else if ($puntos == 12)
	{
		$mensaje=" Percentil es: 23";
	
	} else if ($puntos == 13)
	{
		$mensaje=" Percentil es: 31";
	
	} else if ($puntos == 14)
	{
		$mensaje=" Percentil es: 40";
	
	} else if ($puntos == 15)
	{
		$mensaje=" Percentil es: 44";
	
	} else if ($puntos == 16)
	{
		$mensaje=" Percentil es: 51";
	
	} else if ($puntos == 17)
	{
		$mensaje=" Percentil es: 56";
	
	} else if ($puntos == 18)
	{
		$mensaje=" Percentil es: 61";
	
	} else if ($puntos == 19)
	{
		$mensaje=" Percentil es: 65";
	
	} else if ($puntos == 20)
	{
		$mensaje=" Percentil es: 72";
	
	} else if ($puntos == 21)
	{
		$mensaje=" Percentil es: 80";
	
	} else if ($puntos == 22)
	{
		$mensaje=" Percentil es: 86";
	
	} else if ($puntos == 23)
	{
		$mensaje=" Percentil es: 91";
	
	} else if ($puntos == 24)
	{
		$mensaje=" Percentil es: 95";
	
	} else if ($puntos == 25)
	{
		$mensaje=" Percentil es: 99";
	}
	//------------------------------------------------------------
	 if (($puntos <= 12)&&($puntos >= 1)) {
	   $mensaje2=" Es Desconfiado";
	}
	else {
	    $mensaje2=" Es Confiado";
	}	
	
	
    $Desconfiado_Confiado = $puntos . $mensaje;

	//echo "Puntos Resultado: $puntos puntos(+) <br> Percentil $mensaje <br>";

     //$nombre = $_POST['nombre'];
	 session_start();
     $nomape = $_SESSION[ 'nomape'];
      

     $contenido="
     ......V. DESCONFIADO & CONFIADO......

     Nombre: $nomape
     Puntos: $Desconfiado_Confiado
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
<form class="contenedor" action="fin.php" method="POST">
	<div class="libreta">
		<div class="titulo">
			<h3>PARTE 6 <br> PERCENTIL</h3>	
		</div>

		<div id="div1" class="preguntas">
			<h4>1. Prefiero escuchar un programa de radio que ir a
			ver un partido.</h4>
			<input required type="radio" class="form-control" name="PreguntaUno" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaUno" value="d">Diferente

			<h4>2. Me gusta relacionarme con desconocidos y
			hablar con ellos.</h4>
			<input required type="radio" class="form-control" name="PreguntaDos" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaDos" value="d">Diferente

			<h4>3. Me gusta enseñar mis trabajos a otros y les
			pido consejo.</h4>
			<input required type="radio" class="form-control" name="PreguntaTres" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaTres" value="d">Diferente

			<h4>4. Me gusta pasar las vacaciones en la soledad y
			quietud del campo.</h4>
			<input required type="radio" class="form-control" name="PreguntaCuatro" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaCuatro" value="d">Diferente

			<h4>5. Me gusta más pasar el tiempo con mis
			compañeros que permanecer solo.</h4>
			<input required type="radio" class="form-control" name="PreguntaCinco" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaCinco" value="d">Diferente

			<h4>6. Me gusta acompañar a los visitantes y
			enseñarles todo el colegio.</h4>
			<input required type="radio" class="form-control" name="PreguntaSeis" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaSeis" value="d">Diferente

			<h4>7. Cuando me dan a escoger un trabajo, prefiero
			aquel que puedo realizar solo.</h4>
			<input required type="radio" class="form-control" name="PreguntaSiete" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaSiete" value="d">Diferente

			<h4>8. Si me encuentro con desconocidos no les hago
			caso, porque no me interesa</h4>
			<input required type="radio" class="form-control" name="PreguntaOcho" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaOcho" value="d">Diferente

			<h4>9. Me gusta el trato con los demás, para llegar a
			tener muchos amigos.
			</h4>
			<input required type="radio" class="form-control" name="PreguntaNueve" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaNueve" value="d">Diferente

			<h4>10. Prefiero la compañía de mis padres a estar sólo
			en mi cuarto.
			</h4>
			<input required type="radio" class="form-control" name="PreguntaDiez" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaDiez" value="d">Diferente

			<h4>11. No me gustan las reuniones donde hay mucha
			gente.</h4>
			<input required type="radio" class="form-control" name="PreguntaOnce" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaOnce" value="d">Diferente

			<h4>12. Prefiero divertirme en casa en vez de ir a jugar
			donde hay mucha gente.</h4>
			<input required type="radio" class="form-control" name="PreguntaDoce" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaDoce" value="d">Diferente

			<h4>13. Me gusta asistir a juegos o espectáculos donde
			hay mucha gente.
			</h4>
			<input required type="radio" class="form-control" name="PreguntaTrece" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaTrece" value="d">Diferente

			<h4>14. No me gusta pasear por las calles muy
			conocidas porque hay muchos curiosos.</h4>
			<input required type="radio" class="form-control" name="PreguntaCatorce" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaCatorce" value="d">Diferente

			<h4>15. Me aburro cuando tengo que trabajar solo y sin
			compañeros.</h4>
			<input required type="radio" class="form-control" name="PreguntaQuince" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaQuince" value="d">Diferente

			<h4>16. Tengo pocos amigos porque prefiero vivir solo y
			alejado.</h4>
			<input required type="radio" class="form-control" name="PreguntaDieciseis" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaDieciseis" value="d">Diferente

			<h4>17. Prefiero pasar la tarde en casa, en vez de asistir
			a un espectáculo.</h4>
			<input required type="radio" class="form-control" name="PreguntaDiecisiete" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaDiecisiete" value="d">Diferente

			<h4>18. Me gustaría pasar las vacaciones donde haya
			muchos turistas y extranjeros.
			</h4>
			<input required type="radio" class="form-control" name="PreguntaDieciocho" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaDieciocho" value="d">Diferente

			<h4>19. Me gustaría ir de casa en casa, vendiendo
			boletos para obras de caridad.</h4>
			<input required type="radio" class="form-control" name="PreguntaDiecinueve" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaDiecinueve" value="d">Diferente

			<h4>20. Me gusta vivir solo y tranquilo, sin ser
			molestado por nadie.</h4>
			<input required type="radio" class="form-control" name="PreguntaVeinte" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaVeinte" value="d">Diferente

			<h4>21. No me gusta estar entre mucha gente, los
			gritos y la agitación me molestan.</h4>
			<input required type="radio" class="form-control" name="PreguntaVeintiuno" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaVeintiuno" value="d">Diferente

			<h4>22. Me siento molesto cuando pienso que me están
			mirando.</h4>
			<input required type="radio" class="form-control" name="PreguntaVeintidos" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaVeintidos" value="d">Diferente

			<h4>23. Hago fácilmente muchos amigos cuando cambio
			de lugar.</h4>
			<input required type="radio" class="form-control" name="PreguntaVeintitres" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaVeintitres" value="d">Diferente

			<h4>24. Me siento muy bien en las reuniones y veladas
			con mis amigos.</h4>
			<input required type="radio" class="form-control" name="PreguntaVeinticuatro" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaVeinticuatro" value="d">Diferente

			<h4>25. Me molesta la presencia de personas
			desconocidas.</h4>
			<input required type="radio" class="form-control" name="PreguntaVeinticinco" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaVeinticinco" value="d">Diferente
		</div>
	</div>
	
	<div class="botones">
	    
		<button ><div class="circulo"><span>>></span></div> <p>TERMINAR</p></button>
		
	</div>
</form>		

<script src="script.js"></script>
</body>
</html>