<h3>Perjuicio Personal Particular</h3>
Se calcula sobre el perjuicio personal b�sico, anteriormente especificado.<br>

<input type="checkbox" name="ppp_disc_fispsi" value="ppp_disc_fispsi">
	Discapacidad f�sica o ps�quica del perjudicado previa o a resultas del accidente. 
		(Incremento del 25% al 75%) <input type="number" min=25 max=75 name="ppp_disc_fispsi_number"><br>

<input type="checkbox" name="ppp_convivencia" value="ppp_convivencia">
	Convivencia del perjudicado con la v�ctima.
	<ul style="list-style-type:none">
		<li><input type="checkbox" name="ppp_conv_prog>30" value="ppp_conv_prog>30">Progenitor, con hijo fallecido mayor de 30 a�os.</li>
		<li><input type="checkbox" name="ppp_conv_abu" value="ppp_conv_abu">Abuelo.</li>
		<li><input type="checkbox" name="ppp_conv_hijo>30" value="ppp_conv_hijo>30">Hijo con m�s de 30 a�os.</li>
		<li><input type="checkbox" name="ppp_conv_nieto" value="ppp_conv_nieto">Nieto.</li>
		<li><input type="checkbox" name="ppp_conv_herm>30" value="ppp_conv_herm>30">Hermano con m�s de 30 a�os.</li>
	</ul>
	
<input type="checkbox" name="ppp_perjudicado_unico_cat" value="ppp_perjudicado_unico_cat">
	Perjudicado unico de su categor�a.<br>

<input type="checkbox" name="ppp_perjudicado_unico_fam" value="ppp_perjudicado_unico_fam">
	Perjudicado �nico familiar.<br>
	
<input type="checkbox" name="ppp_fall_prog_unic" value="ppp_fall_prog_unic">
	Fallecimiento del progenitor �nico.
	<ul style="list-style-type:none">
		<li><input type="checkbox" name="ppp_fpu<=20" value="ppp_fpu<=20">Hijo que tiene hasta 20 a�os.</li>
		<li><input type="checkbox" name="ppp_fpu>20" value="ppp_fpu>20">Hijo con m�s de 20 a�os.</li>
	</ul>
	
<input type="checkbox" name="ppp_fall_prog" value="ppp_fall_prog">
	Fallecimiento de ambos progenitores en el accidente.
	<ul style="list-style-type:none">
		<li><input type="checkbox" name="ppp_fp<=20" value="ppp_fp<=20">Hijo que tiene hasta 20 a�os.</li>
		<li><input type="checkbox" name="ppp_fp>20" value="ppp_fp>20">Hijo con m�s de 20 a�os.</li>
	</ul>
	
<input type="checkbox" name="ppp_fall_hijo_unic" value="ppp_fall_hijo_unic">
	Fallecimiento del hijo �nico.<br>
	
<input type="checkbox" name="ppp_fall_embarazada" value="ppp_fall_embarazada">
	Fallecimiento de v�ctima embarazada con p�rdida de feto.
	<ul style="list-style-type:none">
		<li><input type="checkbox" name="ppp_femb<=12" value="ppp_femb<=12">La p�rdida tuvo lugar en las primeras 12 semanas.</li>
		<li><input type="checkbox" name="ppp_femb>12" value="ppp_femb>12">La p�rdida tuvo lugar a partir de las 12 semanas de gestaci�n.</li>
	</ul>
	
<input type="checkbox" name="ppp_excepcional" value="ppp_excepcional">
	Perjuicio excepcional. (hasta el 25%)
	<input type="number" min=0 max=25 name="ppp_excepcional_number"><br>