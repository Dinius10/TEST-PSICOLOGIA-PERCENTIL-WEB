<?php

// Definir la contraseña que se debe ingresar para acceder al botón
$contrasena_correcta = "12345";

// Verificar si se ha enviado la contraseña mediante el método POST
if (isset($_POST['contrasena'])) {
    $contrasena_ingresada = $_POST['contrasena'];

    // Verificar si la contraseña ingresada es correcta
    if ($contrasena_ingresada === $contrasena_correcta) {
        // La contraseña es correcta, realizar la acción deseada
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
					<div class="preguntas">
						
						<h2>RESPUESTAS</h2>
						<?php
							$directorio = "respuestas";

							// Abre el directorio
							if (is_dir($directorio)) {
								if ($dh = opendir($directorio)) {
									// Muestra todos los archivos del directorio
									while (($archivo = readdir($dh)) !== false) {
										// Verifica si el archivo es un archivo regular y termina con la extensión .txt
										if (is_file($directorio . "/" . $archivo) && pathinfo($archivo, PATHINFO_EXTENSION) == 'txt') {
											echo "<a href='$directorio/$archivo' target='_blank'>$archivo</a><br/>";
										}
									}
									closedir($dh);
								}
							} else {
								echo "No es un directorio válido.";
							}
						?>	
						
					</div>
				</div>
				<div class="botones">    
					<a href="index.php"><div class="circulo"><span><i class="fa-solid fa-house"></i></span></div> <p>INICIO</p></a>
				</div>
			</div>	
			</body>
			</html>
		<?php
		
    } else {
        // La contraseña es incorrecta, mostrar un mensaje de error
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
							<p><i class="fa-solid fa-face-sad-tear"></i><br>CONTRASEÑA INCORRECTA</p>
						</div>
						<div class="subtitulo">
							<a href="contraseña.php">INTENTE DE NUEVO...</a>
						</div>
					</div>
				</div>
				<div class="botones">    
					<a href="index.php"><div class="circulo"><span><i class="fa-solid fa-house"></i></span></div> <p>INICIO</p></a>
				</div>
			</div>	
			</body>
			</html>
		<?php	
    }
} else {
    // Si no se envió ninguna contraseña, redirigir al formulario de nuevo
    header("Location: index.php");
    exit();
}


?>