<h3>Perjuicio Personal Particular</h3>
	<ul style="list-style-type:none">
		<li><h4>Daño emergente</h4>
			<ul style="list-style-type:none">
				<li>Gastos previsibles de asistencia sanitaria futura según secuela</li>
				<li><h5>Aquí va una lista dinámica</h5></li>
			</ul>
		</li>
		<li><h4>Prótesis y órtesis</h4>
			<ul style="list-style-type:none">
				<li>Rehabilitación domiciliaria y ambulatoria</li>
				<li><input type="radio" name="pp_protesisOrtesis" value="-" checked>Ninguno</li>
				<li><input type="radio" name="pp_protesisOrtesis" value="grave">Estados vegetativo-crónicos y tetraplegias igual o por encima de la C4.</li>
				<li><input type="radio" name="pp_protesisOrtesis" value="moderado">Tetraplegias, tetraparesias graves, secuelas graves del leguaje y transtornos graves neurológicos.</li>
				<li><input type="radio" name="pp_protesisOrtesis" value="leve">Resto de supuestos.</li>
			</ul>
		</li>
		<li><h4>Gastos por pérdida de autonomía personal</h4>
			<ul style="list-style-type:none">
				<li><input type="checkbox" name="pp_perdidaAutonomíaSecuelas_ayudas" value="pp_perdidaAutonomíaSecuelas_ayudas">Ayudas técnicas</li>
				<li><input type="checkbox" name="pp_perdidaAutonomíaSecuelas_vivienda" value="pp_perdidaAutonomíaSecuelas_vivienda">Adecuación de la vivienda</li>
				<li><input type="checkbox" name="pp_perdidaAutonomíaSecuelas_movilidad" value="pp_perdidaAutonomíaSecuelas_movilidad">Incremento de los costes de movilidad</li>
				<li>Edad del lesionado <input type="number" name="pp_perdidaAutonomíaSecuelas_edad" min="0"> años</li>
				<li>Horas de ayuda a domicilio según secuela: </li>
				<li><h4>Aquí va otra lista dinámica</h4></li>
			</ul>
		</li>
		<li><h4>Lucro cesante</h4>
			<ul style="list-style-type:none">
				<li><input type="radio" name="pp_lc_secuelas" value="-" checked>Ninguno</li>
				<li>
					<input type="radio" name="pp_lc_secuelas" value="absolutaTrabajador" >Por incapacidad para realizar cualquier trabajo o actividad profesional.
					<ul style="list-style-type: none">
						<li>Ingreso neto <input name="pp_lc_secuelas_absolutaTrabajador_ingreso" type="text"> €</li>
						<li>Edad del lesionado <input name="pp_lc_secuelas_absolutaTrabajador_edad" type="text"> años</li>
					</ul>	
				</li>
				<li>
					<input type="radio" name="pp_lc_secuelas" value="parcialTrabajador" >Por incapacidad para realizar su trabajo o actividad profesional.
					<ul style="list-style-type: none">
						<li>Ingreso neto <input name="pp_lc_secuelas_parcialTrabajador_ingreso" type="text"> €</li>
						<li>Edad del lesionado <input name="pp_lc_secuelas_parcialTrabajador_edad" type="text"> años</li>
					</ul>	
				</li>
				<li>
					<input type="radio" name="pp_lc_secuelas" value="disminucionTrabajador" >Por incapacidad que de lugar a una disminución parcial de ingresos en el ejercicio de su trabajo o actividad habitual.
					<ul style="list-style-type: none">
						<li>Ingreso neto <input name="pp_lc_secuelas_disminucionTrabajador_ingreso" type="text"> €</li>
						<li>Edad del lesionado <input name="pp_lc_secuelas_disminucionTrabajador_edad" type="text"> años</li>
					</ul>	
				</li>
				<li>
					<input type="radio" name="pp_lc_secuelas" value="absolutaNoTrabajador" >Por incapacidad para realizar cualquier trabajo o actividad profesional.
					<ul style="list-style-type: none">
						<li>Edad del lesionado <input name="pp_lc_secuelas_absolutaNoTrabajador_edad" type="text"> años</li>
					</ul>	
				</li>
				<li>
					<input type="radio" name="pp_lc_secuelas" value="parcialNoTrabajador" >Por incapacidad para realizar cualquier trabajo o actividad profesional.
					<ul style="list-style-type: none">
						<li>Edad del lesionado <input name="pp_lc_secuelas_parcialNoTrabajador_edad" type="text"> años</li>
					</ul>	
				</li>
			</ul>
		</li>
	</ul>