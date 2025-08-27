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
		$mensaje=" Percentil es: 17";
	
	} else if ($puntos == 10)
	{
		$mensaje=" Percentil es: 20";
	
	} else if ($puntos == 11)
	{
		$mensaje=" Percentil es: 24";
	
	} else if ($puntos == 12)
	{
		$mensaje=" Percentil es: 28";
	
	} else if ($puntos == 13)
	{
		$mensaje=" Percentil es: 31";
	
	} else if ($puntos == 14)
	{
		$mensaje=" Percentil es: 34";
	
	} else if ($puntos == 15)
	{
		$mensaje=" Percentil es: 38";
	
	} else if ($puntos == 16)
	{
		$mensaje=" Percentil es: 42";
	
	} else if ($puntos == 17)
	{
		$mensaje=" Percentil es: 49";
	
	} else if ($puntos == 18)
	{
		$mensaje=" Percentil es: 57";
	
	} else if ($puntos == 19)
	{
		$mensaje=" Percentil es: 65";
	
	} else if ($puntos == 20)
	{
		$mensaje=" Percentil es: 73";
	
	} else if ($puntos == 21)
	{
		$mensaje=" Percentil es: 79";
	
	} else if ($puntos == 22)
	{
		$mensaje=" Percentil es: 84";
	
	} else if ($puntos == 23)
	{
		$mensaje=" Percentil es: 90";
	
	} else if ($puntos == 24)
	{
		$mensaje=" Percentil es: 95";
	
	} else if ($puntos == 25)
	{
		$mensaje=" Percentil es: 99";
	}
	//------------------------------------------------------------
	 if (($puntos <= 12)&&($puntos >= 1)) {
	   $mensaje2=" Es Misantropo";
	}
	else {
	    $mensaje2=" Es Sociable";
	}	
	
	
    $Misantropo_Sociable = $puntos . $mensaje;

	//echo "Puntos Resultado: $puntos puntos(+) <br> Percentil $mensaje <br>";

     //$nombre = $_POST['nombre'];
	 session_start();
     $nomape = $_SESSION[ 'nomape'];


     $contenido="
     ......VI. MISANTROPO & SOCIABLE......

     Nombre: $nomape
     Puntos: $Misantropo_Sociable
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
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/e077a1619a.js" crossorigin="anonymous"></script>
  <title>TEST PERCENTIL</title>
</head>
<body>
<div class="contenedor">	
	<div class="libreta">
		<div class="cuadro-titulo">
			<div class="titulo-inicio">
				<p><i class="fa-solid fa-face-smile-beam"></i><br>GRACIAS</p>
			</div>
			<div class="subtitulo">
				<p>ESO ES TODO...</p>
			</div>
		</div>
	</div>
	
	<div class="botones">
		<a href="contraseña.php"><div class="circulo"><span><i class="fa-solid fa-book"></i></span></div> <p>RESPUESTAS</p></a>
		<a href="index.php"><div class="circulo"><span><i class="fa-solid fa-house"></i></span></div> <p>TERMINAR</p></a>
		
	</div>	
</div>
<script src="script.js"></script>
</body>
</html>