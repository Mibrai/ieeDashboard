<html>
<head>
	<title>IEE/Batterie</title>
	<link rel="stylesheet" a href="..\css\style.css">
</head>
<body>
	<div class="container">
		<form>
		<table style="width:100%">
			<tr>
				<td><input type="text" name="id_bat" placeholder="ID_Batterie"/></td>
				<td><input type="text" name="name_bat" placeholder="Name der Batterie"/></td>
				<td><input type="text" name="chem_bat" placeholder="Chemie"/></td>
			</tr>
			<tr>
				<td><input type="text" name="abk_chem" placeholder="Abkurzung der Chemie"/></td>
				<td><input type="text" name="anz_sp" placeholder="Anzahl der Spalte"/></td>
				<td><input type="text" name="anz_zel" placeholder="Anzahl der Zelle Reihe "/></td>
			</tr>
			<tr>
				<td><input type="text" name="abm_bat" placeholder="Abmaße"/></td>
				<td><input type="text" name="nkap_bat" placeholder="NennKapazität"/></td>
				<td><input type="text" name="nspg_bat" placeholder="Nennspannung"/></td>
			</tr>
			<tr>
				<td><input type="text" name="kap_bol" placeholder="Kapazität(BOL)"/></td>
				<td><input type="text" name="kap_eol" placeholder="Kapazität(EOL)"/></td>
				<td><input type="text" name="sott_bat" placeholder="Sott"/></td>
			</tr>
			<tr>
				
				<td><textarea rows="5" cols="40" name="komm" placeholder="Kommentar"></textarea></td>
				<td></td>
			</tr>
		</table>
			<input type="submit" type="submit" value="SAVE" class="btn-login"/>
		</form>
		
	</div>
</body>
</html>