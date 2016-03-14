<div>
	<h3>Bienvenido <?php echo $_SESSION['user_name']?>, estas son las cosas mas importantes que puedes hacer con la aplicacion:</h3>
	<table>
		<tr>
			<td>
				En su <b>panel de usuario</b>, marcado con el boton <b><?php echo $_SESSION['user_name']?></b>, 
				podra ver su suscripción, cuando acaba, y renovarla.
				Ademas, podra comprobar su historial de todas las consultas hechas en la aplicacion,
				por si quisiese revisar algun caso. Por otro lado, tambien podra
				cambiar su contrase&ntilde;a de acceso al sistema.
			</td>
		</tr>
		<tr>
			<td>
				En la <b>Calculadora de accidentes</b>, marcada con el boton del mismo nombre, 
				ud. podra hacer tanto un calculo completo, con todas las secciones posibles,
				o un calculo parcial, seleccionando valores de una sola seccion.
			</td>
		</tr>
		<tr>
			<td>
				En la <b>Consulta de valores</b>, ud. podra comprobar <b>un solo valor</b> del que no se acordaba, 
				pero le hacia falta, <b>sin repetir todo el calculo</b> completo de un accidente.
			</td>
		</tr>
	</table>

</div>