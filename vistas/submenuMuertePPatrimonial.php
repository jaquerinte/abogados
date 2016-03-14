<h3>Perjuicio Patrimonial</h3>
	<ul style="list-style-type:none">
		<li><h4>Daño emergente</h4>
			<ul style="list-style-type:none">
				<li><input type="checkbox" name="pp_perjuicioPersonalBasico" value="pp_perjuicioPersonalBasico">Perjuicio patrimonial básico
					<ul style="list-style-type:none">
						<li><input type="checkbox" name="pp_ppb_gastosExcedentes" value="pp_ppb_gastosExcedentes">Gastos con necesidad de justificación que excedan el importe base.<input type="number" min=0 name="pp_ppb_gastosExcedentesValue"></li>
					</ul>
				</li>
				<li><input type="checkbox" name="pp_gastosEspecificos" value="pp_gastosEspecificos">Gastos específicos
					<ul style="list-style-type:none">
						<li>Gastos de traslado del fallecido, entierro, funeral y repatriación. <input type="number" min=0 name="pp_ge_Value"></li>
					</ul>					
				</li>
			</ul>
		</li>
		<li><h4>Lucro cesante</h4>
			<ul style="list-style-type:none">
				<li><input type="checkbox" name="pp_lc_conyuge" value="pp_lc_conyuge">Conyuge
					<ul style="list-style-type:none">
						<li>
							<table class="lc_table">
								<tr>
									<td>Duración matrimonio</td>
									<td><input type="number" min=0 name="pp_lc_conyuge_duracion"></td>
									<td>años.</td>
								</tr>
								<tr>
									<td>Edad del conyuge</td>
									<td><input type="number" min=0 name="pp_lc_conyuge_edad"></td>
									<td>años.</td>
								</tr>
								<tr>
									<td>Ingreso neto</td>
									<td><input type="number" min=0 name="pp_lc_conyuge_ingreso"></td>
									<td>€</td>
								</tr>
							</table>
						</li>
						<li><input type="checkbox" name="pp_lc_conyuge_discapacidad" value="pp_lc_conyuge_discapacidad">Discapacidad</li>
					</ul>
				</li>
				<li><input type="checkbox" name="pp_lc_hijo" value="pp_lc_hijo">Hijo
					<ul style="list-style-type:none">
						<li>
							<table class="lc_table">
								<tr>
									<td>Edad del hijo</td>
									<td><input type="number" min=0 name="pp_lc_hijo_edad"></td>
									<td>años.</td>
								</tr>
								<tr>
									<td>Ingreso neto</td>
									<td><input type="number" min=0 name="pp_lc_hijo_ingreso"></td>
									<td>€</td>
								</tr>
							</table>
						</li>
						<li><input type="checkbox" name="pp_lc_hijo_discapacidad" value="pp_lc_hijo_discapacidad">Discapacidad</li>
					</ul>
				</li>
				<li><input type="checkbox" name="pp_lc_progenitor" value="pp_lc_progenitor">Progenitor
					<ul style="list-style-type:none">
						<li>
							<table class="lc_table">
								<tr>
									<td>Edad del progenitor</td>
									<td><input type="number" min=0 name="pp_lc_progenitor_edad"></td>
									<td>años.</td>
								</tr>
								<tr>
									<td>Ingreso neto</td>
									<td><input type="number" min=0 name="pp_lc_progenitor_ingreso"></td>
									<td>€</td>
								</tr>
							</table>
						</li>
					</ul>
				</li>
				<li><input type="checkbox" name="pp_lc_hermano" value="pp_lc_hermano">Hermano
					<ul style="list-style-type:none">
						<li>
							<table class="lc_table">
								<tr>
									<td>Edad del hermano</td>
									<td><input type="number" min=0 name="pp_lc_hermano_edad"></td>
									<td>años.</td>
								</tr>
								<tr>
									<td>Ingreso neto</td>
									<td><input type="number" min=0 name="pp_lc_hermano_ingreso"></td>
									<td>€</td>
								</tr>
							</table>
						</li>
						<li><input type="checkbox" name="pp_lc_hermano_discapacidad" value="pp_lc_hermano_discapacidad">Discapacidad</li>
					</ul>
				</li>
				<li><input type="checkbox" name="pp_lc_abuelo" value="pp_lc_abuelo">Abuelo
					<ul style="list-style-type:none">
						<li>
							<table class="lc_table">
								<tr>
									<td>Edad del abuelo</td>
									<td><input type="number" min=0 name="pp_lc_abuelo_edad"></td>
									<td>años.</td>
								</tr>
								<tr>
									<td>Ingreso neto</td>
									<td><input type="number" min=0 name="pp_lc_abuelo_ingreso"></td>
									<td>€</td>
								</tr>
							</table>
						</li>
					</ul>
				</li>
				<li><input type="checkbox" name="pp_lc_nieto" value="pp_lc_nieto">Nieto
					<ul style="list-style-type:none">
						<li>
							<table class="lc_table">
								<tr>
									<td>Edad del nieto</td>
									<td><input type="number" min=0 name="pp_lc_nieto_edad"></td>
									<td>años.</td>
								</tr>
								<tr>
									<td>Ingreso neto</td>
									<td><input type="number" min=0 name="pp_lc_nieto_ingreso"></td>
									<td>€</td>
								</tr>
							</table>
						</li>
						<li><input type="checkbox" name="pp_lc_nieto_discapacidad" value="pp_lc_nieto_discapacidad">Discapacidad</li>
					</ul>
				</li>
				<li><input type="checkbox" name="pp_lc_allegado" value="pp_lc_allegado">Allegado
					<ul style="list-style-type:none">
						<li>
							<table class="lc_table">
								<tr>
									<td>Edad del allegado</td>
									<td><input type="number" min=0 name="pp_lc_allegado_edad"></td>
									<td>años.</td>
								</tr>
								<tr>
									<td>Ingreso neto</td>
									<td><input type="number" min=0 name="pp_lc_allegado_ingreso"></td>
									<td>€</td>
								</tr>
							</table>
						</li>
					</ul>
				</li>
			</ul>
		</li>
	</ul>