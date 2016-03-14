<h3>Perjuicio Personal Particular</h3>
	<ul style="list-style-type:none">
		<li><h4>Da�o emergente</h4>
			<ul style="list-style-type:none">
				<li>Gastos previsibles de asistencia sanitaria futura seg�n secuela</li>
				<li><h5>Aqu� va una lista din�mica</h5></li>
			</ul>
		</li>
		<li><h4>Pr�tesis y �rtesis</h4>
			<ul style="list-style-type:none">
				<li>Rehabilitaci�n domiciliaria y ambulatoria</li>
				<li><input type="radio" name="pp_protesisOrtesis" value="-" checked>Ninguno</li>
				<li><input type="radio" name="pp_protesisOrtesis" value="grave">Estados vegetativo-cr�nicos y tetraplegias igual o por encima de la C4.</li>
				<li><input type="radio" name="pp_protesisOrtesis" value="moderado">Tetraplegias, tetraparesias graves, secuelas graves del leguaje y transtornos graves neurol�gicos.</li>
				<li><input type="radio" name="pp_protesisOrtesis" value="leve">Resto de supuestos.</li>
			</ul>
		</li>
		<li><h4>Gastos por p�rdida de autonom�a personal</h4>
			<ul style="list-style-type:none">
				<li><input type="checkbox" name="pp_perdidaAutonom�aSecuelas_ayudas" value="pp_perdidaAutonom�aSecuelas_ayudas">Ayudas t�cnicas</li>
				<li><input type="checkbox" name="pp_perdidaAutonom�aSecuelas_vivienda" value="pp_perdidaAutonom�aSecuelas_vivienda">Adecuaci�n de la vivienda</li>
				<li><input type="checkbox" name="pp_perdidaAutonom�aSecuelas_movilidad" value="pp_perdidaAutonom�aSecuelas_movilidad">Incremento de los costes de movilidad</li>
				<li>Edad del lesionado <input type="number" name="pp_perdidaAutonom�aSecuelas_edad" min="0"> a�os</li>
				<li>Horas de ayuda a domicilio seg�n secuela: </li>
				<li><h4>Aqu� va otra lista din�mica</h4></li>
			</ul>
		</li>
		<li><h4>Lucro cesante</h4>
			<ul style="list-style-type:none">
				<li><input type="radio" name="pp_lc_secuelas" value="-" checked>Ninguno</li>
				<li>
					<input type="radio" name="pp_lc_secuelas" value="absolutaTrabajador" >Por incapacidad para realizar cualquier trabajo o actividad profesional.
					<ul style="list-style-type: none">
						<li>Ingreso neto <input name="pp_lc_secuelas_absolutaTrabajador_ingreso" type="text"> �</li>
						<li>Edad del lesionado <input name="pp_lc_secuelas_absolutaTrabajador_edad" type="text"> a�os</li>
					</ul>	
				</li>
				<li>
					<input type="radio" name="pp_lc_secuelas" value="parcialTrabajador" >Por incapacidad para realizar su trabajo o actividad profesional.
					<ul style="list-style-type: none">
						<li>Ingreso neto <input name="pp_lc_secuelas_parcialTrabajador_ingreso" type="text"> �</li>
						<li>Edad del lesionado <input name="pp_lc_secuelas_parcialTrabajador_edad" type="text"> a�os</li>
					</ul>	
				</li>
				<li>
					<input type="radio" name="pp_lc_secuelas" value="disminucionTrabajador" >Por incapacidad que de lugar a una disminuci�n parcial de ingresos en el ejercicio de su trabajo o actividad habitual.
					<ul style="list-style-type: none">
						<li>Ingreso neto <input name="pp_lc_secuelas_disminucionTrabajador_ingreso" type="text"> �</li>
						<li>Edad del lesionado <input name="pp_lc_secuelas_disminucionTrabajador_edad" type="text"> a�os</li>
					</ul>	
				</li>
				<li>
					<input type="radio" name="pp_lc_secuelas" value="absolutaNoTrabajador" >Por incapacidad para realizar cualquier trabajo o actividad profesional.
					<ul style="list-style-type: none">
						<li>Edad del lesionado <input name="pp_lc_secuelas_absolutaNoTrabajador_edad" type="text"> a�os</li>
					</ul>	
				</li>
				<li>
					<input type="radio" name="pp_lc_secuelas" value="parcialNoTrabajador" >Por incapacidad para realizar cualquier trabajo o actividad profesional.
					<ul style="list-style-type: none">
						<li>Edad del lesionado <input name="pp_lc_secuelas_parcialNoTrabajador_edad" type="text"> a�os</li>
					</ul>	
				</li>
			</ul>
		</li>
	</ul>