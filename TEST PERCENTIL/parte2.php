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
	if(($puntos == 1) || ($puntos == 4))
	{
		$mensaje=" Percentil es: 0";
	} else if ($puntos == 5)
	{
		$mensaje=" Percentil es: 1";

	} else if ($puntos == 6)
	{
		$mensaje=" Percentil es: 2";
	
	} else if ($puntos == 7)
	{
		$mensaje=" Percentil es: 3";
	
	} else if ($puntos == 8)
	{
		$mensaje=" Percentil es: 6";
	
	} else if ($puntos == 9)
	{
		$mensaje=" Percentil es: 9";
	
	} else if ($puntos == 10)
	{
		$mensaje=" Percentil es: 13";
	
	} else if ($puntos == 11)
	{ 
		$mensaje=" Percentil es: 20";
	
	} else if ($puntos == 12)
	{
		$mensaje=" Percentil es: 29";
	
	} else if ($puntos == 13)
	{
		$mensaje=" Percentil es: 40";
	
	} else if ($puntos == 14)
	{
		$mensaje=" Percentil es: 48";
	
	} else if ($puntos == 15)
	{
		$mensaje=" Percentil es: 57";
	
	} else if ($puntos == 16)
	{
		$mensaje=" Percentil es: 67";
	
	} else if ($puntos == 17)
	{
		$mensaje=" Percentil es: 73";
	
	} else if ($puntos == 18)
	{
		$mensaje=" Percentil es: 78";
	
	} else if ($puntos == 19)
	{
		$mensaje=" Percentil es: 84";
	
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
		$mensaje=" Percentil es: 98";
	
	} else if ($puntos == 24)
	{
		$mensaje=" Percentil es: 99";
	
	} else if ($puntos == 25)
	{
		$mensaje=" Percentil es: 99";
	}
//---------------------------------------------------
	 if (($puntos <= 12)&&($puntos >= 1)) {
	   $mensaje2=" Es sumiso";
	}
	else {
	    $mensaje2=" Es Dominador";
	}
	
	$Sumiso_Dominador = $puntos . $mensaje;

	//echo "$Sumiso_Dominador<br>";		
	//echo "Puntos Resultado: $puntos puntos(+) <br>  $mensaje <br>";

	/*$con =new PDO('mysql:host=localhost;dbname=test','root','123456789');
	if(isset($_POST['nombre'])){
		$nombre = $_POST['nombre'];
		$Sumiso_Dominador = $_POST['Sumiso_Dominador'];

		$insertar = $con->prepare("INSERT INTO perfil(nombre, Sumiso_Dominador) VALUES ('$nombre','$Sumiso_Dominador')");
		$insertar->execute();
	}*/
	session_start();
     $nombre = $_POST['nombre'];
     $nomape = $_SESSION[ 'nomape'];
		$nomape=$nombre;
		$_SESSION['nomape']=$nomape;

     $contenido="
     ...........I. SUMISO & DOMINADOR..........

     Nombre: $nomape
     Puntos: $Sumiso_Dominador
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
<form class="contenedor" action="parte3.php" method="POST">
	<div class="libreta">
		<div class="titulo">
			<h3>PARTE 2 <br> PERCENTIL</h3>	
		</div>
			<div id="div1" class="preguntas">
			<h4>1. Hablo poco en reuniones, prefiero escuchar a
			los compañeros.</h4>
			<input required type="radio" class="form-control" name="PreguntaUno" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaUno" value="d">Diferente

			<h4>2. Durante los partidos, grito mucho cuando los
			jugadores realizan una buena jugada.</h4>
			<input required type="radio" class="form-control" name="PreguntaDos" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaDos" value="d">Diferente

			<h4>3. Casi siempre soy el que más habla en las
			reuniones de los amigos.
			</h4>
			<input required type="radio" class="form-control" name="PreguntaTres" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaTres" value="d">Diferente

			<h4>4. Cuando escribo a un amigo tengo pocas cosas
			que decirle.</h4>
			<input required type="radio" class="form-control" name="PreguntaCuatro" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaCuatro" value="d">Diferente

			<h4>5. En los momentos de descanso, divierto a mis
			amigos con chistes y canciones.
			</h4>
			<input required type="radio" class="form-control" name="PreguntaCinco" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaCinco" value="d">Diferente

			<h4>6. Me gusta mucho organizar fiestas y reuniones.</h4>
			<input required type="radio" class="form-control" name="PreguntaSeis" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaSeis" value="d">Diferente

			<h4>7. Guardo para mí mis secretos y no los cuento
			fácilmente a los demás.</h4>
			<input required type="radio" class="form-control" name="PreguntaSiete" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaSiete" value="d">Diferente

			<h4>8. Cuando tengo que hablar o escribir sobre un
			tema, se me ocurren muy pocas ideas.</h4>
			<input required type="radio" class="form-control" name="PreguntaOcho" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaOcho" value="d">Diferente

			<h4>9. Me gusta contar mis aventuras más
			interesantes a mis amigos.</h4>
			<input required type="radio" class="form-control" name="PreguntaNueve" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaNueve" value="d">Diferente

			<h4>10. Siento deseos de responder en el momento y a
			disculparme cuando me reclaman algo.</h4>
			<input required type="radio" class="form-control" name="PreguntaDiez" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaDiez" value="d">Diferente

			<h4>11. En las reuniones prefiero que hablen los otros y
			escuchar sus opiniones.
			</h4>
			<input required type="radio" class="form-control" name="PreguntaOnce" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaOnce" value="d">Diferente

			<h4>12. Mantengo fácilmente el silencio en clase,
			cuando no se debe hablar.</h4>
			<input required type="radio" class="form-control" name="PreguntaDoce" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaDoce" value="d">Diferente

			<h4>13. Cuando estoy triste necesito decirlo a un amigo
			para desahogarme.</h4>
			<input required type="radio" class="form-control" name="PreguntaTrece" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaTrece" value="d">Diferente

			<h4>14. No siento deseos de contar los secretos que me
			han confiado.</h4>
			<input required type="radio" class="form-control" name="PreguntaCatorce" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaCatorce" value="d">Diferente

			<h4>15. Cuando el profesor pregunta a toda la clase,
			me gusta responder</h4>
			<input required type="radio" class="form-control" name="PreguntaQuince" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaQuince" value="d">Diferente

			<h4>16. Hablo pocas veces de mí, de lo que he hecho o
			de lo que me ha pasado.</h4>
			<input required type="radio" class="form-control" name="PreguntaDieciseis" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaDieciseis" value="d">Diferente

			<h4>17. Cuando tengo que participar en una reunión me
			voy bien preparado.</h4>
			<input required type="radio" class="form-control" name="PreguntaDiecisiete" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaDiecisiete" value="d">Diferente

			<h4>18. Me gusta hacer reír a los demás contando
			chistes o historias graciosas.</h4>
			<input required type="radio" class="form-control" name="PreguntaDieciocho" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaDieciocho" value="d">Diferente

			<h4>19. Tan pronto como recibo una noticia interesante
			corro a contarlo a mis amigos.</h4>
			<input required type="radio" class="form-control" name="PreguntaDiecinueve" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaDiecinueve" value="d">Diferente

			<h4>20. Soy reservado en mis opiniones; prefiero
			guardarlas para mí.</h4>
			<input required type="radio" class="form-control" name="PreguntaVeinte" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaVeinte" value="d">Diferente

			<h4>21. Durante los partidos, no me altero aunque los
			demás espectadores griten.
			</h4>
			<input required type="radio" class="form-control" name="PreguntaVeintiuno" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaVeintiuno" value="d">Diferente

			<h4>22. Oculto fácilmente mis pensamientos, cuando
			no es necesario decirlos.</h4>
			<input required type="radio" class="form-control" name="PreguntaVeintidos" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaVeintidos" value="d">Diferente

			<h4>23. Aprovecho cualquier ocasión para decir a los
			demás lo que pienso.
			</h4>
			<input required type="radio" class="form-control" name="PreguntaVeintitres" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaVeintitres" value="d">Diferente

			<h4>24. Me gusta mucho bromear a costa de otros,
			pero sin molestarles.</h4>
			<input required type="radio" class="form-control" name="PreguntaVeinticuatro" value="s">Semejante
			<input required type="radio" class="form-control" name="PreguntaVeinticuatro" value="d">Diferente

			<h4>25. Puedo permanecer mucho tiempo quieto sin
			sentir la necesidad de hablar o moverme.</h4>
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

