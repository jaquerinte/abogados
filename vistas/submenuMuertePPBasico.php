<h3>Perjuicio Personal Basico</h3>

<input type="checkbox" name="ppb_conyuge_viudo" value="ppb_conyuge_viudo">
	El conyuge viudo<br>
	<ul>
		<li><input type="radio" name="ppb_cv" value="<=67">La victima tenia hasta 67 años.</li>
		<li><input type="radio" name="ppb_cv" value="<=80">La victima tenia entre 67 y 80 años.</li>
		<li><input type="radio" name="ppb_cv" value=">80">La victima tenia más de 80 años.</li>
		<li>Años adicionales de convivencia: <input type="number" min="0" name="ppb_cv_addyears"></li>
	</ul>
	
<input type="checkbox" name="ppb_ascendientes" value="ppb_ascendientes">
	Los ascendientes<br>
	<ul>
		<li><input type="radio" name="ppb_asc" value="progenitor">A cada progenitor.
			<ul>
				<li><input type="checkbox" name="ppb_asc_<=30" value="ppb_asc_<=30">El hijo fallecido tenia hasta 30 años.</li>
				<li><input type="checkbox" name="ppb_asc_>30" value="ppb_asc_>30">El hijo fallecido tenia más de 30 años.</li>
			</ul>
		</li>
		<li><input type="radio" name="ppb_asc" value="abuelo">A cada abuelo.</li>
	</ul>
	
<input type="checkbox" name="ppb_descendientes" value="ppb_descendientes">
	Los descendientes<br>
	<ul>
		<li><input type="radio" name="ppb_desc" value="hijos">Hijos.
			<ul>
				<li><input type="checkbox" name="ppb_desc_hijo14" value="ppb_desc_14">Hijo hasta 14 años.</li>
				<li><input type="checkbox" name="ppb_desc_hijo20" value="ppb_desc_<=20">Hijo entre 14 y 20 años.</li>
				<li><input type="checkbox" name="ppb_desc_hijo30" value="ppb_desc_<=30">Hijo entre 20 y 30 años.</li>
				<li><input type="checkbox" name="ppb_desc_hijoM" value="ppb_desc_>30">Hijo con más de 30 años.</li>
			</ul>
		</li>
		<li><input type="radio" name="ppb_desc" value="nietos">Nietos.</li>
	</ul>
	
<input type="checkbox" name="ppb_hermanos" value="ppb_hermanos">
	Los hermanos<br>
	<ul>
		<li><input type="checkbox" name="ppb_her30" value="ppb_her_<=30">Hermano que tiene hasta 30 años.</li>
		<li><input type="checkbox" name="ppb_herM" value="ppb_desc_>30">Hermano que tiene más de 30 años.</li>
	</ul>
	
<input type="checkbox" name="ppb_allegados" value="ppb_allegados">
	Los allegados<br>