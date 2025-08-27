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
<form class="contenedor" action="parte2.php" method="POST">
	<div class="libreta">
		<div class="titulo">
			<h3>PARTE 1 <br> PERCENTIL</h3>	
		</div>

			<div id="div1" class="preguntas">
				<div class="nombre">
					<label >Nombre Completo: </label>
					<input required type="text" class="form-control" name="nombre" placeholder=" nombres y apellidos">	
				</div>
				

				<h4>1. Cuando no comprendo alguna cosa en clase no
				me atrevo a pedir explicación.</h4>
				<input required type="radio" class="form-control" name="PreguntaUno" value="s">Semejante
				<input required type="radio" class="form-control" name="PreguntaUno" value="d">Diferente

				<h4>2. Cuando el profesor no esta en clases no me
				gusta recibir ordenes de un compañero.</h4>
				<input required type="radio" class="form-control" name="PreguntaDos" value="s">Semejante
				<input required type="radio" class="form-control" name="PreguntaDos" value="d">Diferente

				<h4>3. Cuando compro algo y esta mal no me
				avergüenza decírselo al vendedor.</h4>
				<input required type="radio" class="form-control" name="PreguntaTres" value="s">Semejante
				<input required type="radio" class="form-control" name="PreguntaTres" value="d">Diferente

				<h4>4. Hago generalmente lo que me mandan y no me
				cuesta obedecer.</h4>
				<input required type="radio" class="form-control" name="PreguntaCuatro" value="s">Semejante
				<input required type="radio" class="form-control" name="PreguntaCuatro" value="d">Diferente

				<h4>5. Muchas veces no estoy de acuerdo con lo que
				quieren hacer los demás.</h4>
				<input required type="radio" class="form-control" name="PreguntaCinco" value="s">Semejante
				<input required type="radio" class="form-control" name="PreguntaCinco" value="d">Diferente

				<h4>6. No me gusta que el jefe de equipo decida todo
				sin consultarme.</h4>
				<input required type="radio" class="form-control" name="PreguntaSeis" value="s">Semejante
				<input required type="radio" class="form-control" name="PreguntaSeis" value="d">Diferente

				<h4>7. No me gusta ser responsable de un equipo de
				juego.
				</h4>
				<input required type="radio" class="form-control" name="PreguntaSiete" value="s">Semejante
				<input required type="radio" class="form-control" name="PreguntaSiete" value="d">Diferente

				<h4>8. Si un amigo me pide muchas veces que lo
				acompañe a una reunión poco interesante,
				dudo en rechazar.</h4>
				<input required type="radio" class="form-control" name="PreguntaOcho" value="s">Semejante
				<input required type="radio" class="form-control" name="PreguntaOcho" value="d">Diferente
			
				<h4>9. Me gusta dar ordenes en reuniones de
				muchachos de mi edad.</h4>
				<input required type="radio" class="form-control" name="PreguntaNueve" value="s">Semejante
				<input required type="radio" class="form-control" name="PreguntaNueve" value="d">Diferente

				<h4>10. No me cuesta decir no a quien insiste
				demasiado en lo que tengo que hacer.</h4>
				<input required type="radio" class="form-control" name="PreguntaDiez" value="s">Semejante
				<input required type="radio" class="form-control" name="PreguntaDiez" value="d">Diferente

				<h4>11. Prefiero dejar a otros la tarea de organizar
				nuevos juegos.</h4>
				<input required type="radio" class="form-control" name="PreguntaOnce" value="s">Semejante
				<input required type="radio" class="form-control" name="PreguntaOnce" value="d">Diferente

				<h4>12. Aunque no quiera asistir a un espectáculo no
				me atrevo a rechazar una entrada.</h4>
				<input required type="radio" class="form-control" name="PreguntaDoce" value="s">Semejante
				<input required type="radio" class="form-control" name="PreguntaDoce" value="d">Diferente

				<h4>13. A menudo quiero tener razón cuando discuto
				con mis amigos.</h4>
				<input required type="radio" class="form-control" name="PreguntaTrece" value="s">Semejante
				<input required type="radio" class="form-control" name="PreguntaTrece" value="d">Diferente

				<h4>14. Si juego contra un rival más hábil que yo, ni
				siquiera intento ganarle.</h4>
				<input required type="radio" class="form-control" name="PreguntaCatorce" value="s">Semejante
				<input required type="radio" class="form-control" name="PreguntaCatorce" value="d">Diferente

				<h4>15. Me esfuerzo en hacer valer mis ideas, aunque
				para ello sea necesario luchar.</h4>
				<input required type="radio" class="form-control" name="PreguntaQuince" value="s">Semejante
				<input required type="radio" class="form-control" name="PreguntaQuince" value="d">Diferente

				<h4>16. No me gusta dirigir un trabajo en grupo.</h4>
				<input required type="radio" class="form-control" name="PreguntaDieciseis" value="s">Semejante
				<input required type="radio" class="form-control" name="PreguntaDieciseis" value="d">Diferente
			
				<h4>17. Prefiero dejar que hablen mis compañeros
				cuando el profesor nos pide nuestra opinión.</h4>
				<input required type="radio" class="form-control" name="PreguntaDiecisiete" value="s">Semejante
				<input required type="radio" class="form-control" name="PreguntaDiecisiete" value="d">Diferente

				<h4>18. Intento estar entre los primeros cuando se trata
				de algo curioso o de ir a jugar.</h4>
				<input required type="radio" class="form-control" name="PreguntaDieciocho" value="s">Semejante
				<input required type="radio" class="form-control" name="PreguntaDieciocho" value="d">Diferente

				<h4>19. A menudo yo desearía conducir y mandar a los
				demás.</h4>
				<input required type="radio" class="form-control" name="PreguntaDiecinueve" value="s">Semejante
				<input required type="radio" class="form-control" name="PreguntaDiecinueve" value="d">Diferente

				<h4>20. Dudo en contradecir a quienes tienen opiniones
				diferentes a las mías.
				</h4>
				<input required type="radio" class="form-control" name="PreguntaVeinte" value="s">Semejante
				<input required type="radio" class="form-control" name="PreguntaVeinte" value="d">Diferente

				<h4>21. No me atrevo a rechazar un trabajo que se me
				pide aunque no me guste.</h4>
				<input required type="radio" class="form-control" name="PreguntaVeintiuno" value="s">Semejante
				<input required type="radio" class="form-control" name="PreguntaVeintiuno" value="d">Diferente

				<h4>22. Si olvido algo necesario para el juego prefiero
				no jugar antes de pedir prestado.
				</h4>
				<input required type="radio" class="form-control" name="PreguntaVeintidos" value="s">Semejante
				<input required type="radio" class="form-control" name="PreguntaVeintidos" value="d">Diferente

				<h4>23. No renuncio fácilmente a mis derechos cuando
				tengo razón.</h4>
				<input required type="radio" class="form-control" name="PreguntaVeintitres" value="s">Semejante
				<input required type="radio" class="form-control" name="PreguntaVeintitres" value="d">Diferente

				<h4>24. Me gusta desafiar a otros y enfrentarme con
				ellos en algunas ocasiones.
				</h4>
				<input required type="radio" class="form-control" name="PreguntaVeinticuatro" value="s">Semejante
				<input required type="radio" class="form-control" name="PreguntaVeinticuatro" value="d">Diferente

				<h4>25. Me siento molesto cuando estoy en compañía
				de un superior.
				</h4>
				<input required type="radio" class="form-control" name="PreguntaVeinticinco" value="s">Semejante
				<input required type="radio" class="form-control" name="PreguntaVeinticinco" value="d">Diferente

				
			</div>
		
	</div>
	
	<div class="botones">
	    
		<button ><div class="circulo"><span><i class="fa-solid fa-arrow-right"></i></span></div> <p>NEXT</p></button>
		
	</div>
</form>		

<script src="script.js"></script>
</body>
</html>

