<html>
<head>
	<title>IEE/Module</title>
	<link rel="stylesheet" a href="..\css\style.css">
</head>
<body>
	<div class="container">
		<form>
		<table style="width:100%">
			<tr>
				<td><input type="text" name="id_mod" placeholder="ID_Module"/></td>
				<td>
					<select style="margin-top:30px; height:45px; width:300px; font-size:18px; margin-bottom:20px;background-color:#fff; padding-left:40px;">
					  <option value="" disabled selected hidden>ID_Batterie</option>
					  <option value=""></option>
					</select>
				</td>
				<td><input type="text" name="name_mod" placeholder="Name der Module"/></td>
			</tr>
			<tr>
				<td><input type="text" name="chem_mod" placeholder="Chemie"/></td>
				<td><input type="text" name="abk_chem" placeholder="Abkurzung der Chemie"/></td>
				<td><input type="text" name="abm_mod" placeholder="Abmaße"/></td>	
			</tr>
			<tr>
				<td><input type="text" name="anz_sp" placeholder="Anzahl der Spalte"/></td>
				<td><input type="text" name="anz_mod" placeholder="Anzahl der Zelle Reihe"/></td>
				<td><input type="text" name="nkap_mod" placeholder="NennKapazität"/></td>
			</tr>
			<tr>
				<td><input type="text" name="nspg_mod" placeholder="Nennspannung"/></td>
				<td><input type="text" name="kap_bol" placeholder="Kapazität(BOL)"/></td>
				<td><input type="text" name="kap_eol" placeholder="Kapazität(EOL)"/></td>
			</tr>
			<tr>
				<td><input type="text" name="sott_mod" placeholder="Sott"/></td>
				<td><textarea rows="5" cols="40" name="komm" placeholder="Kommentar"></textarea></td>
				<td></td>
			</tr>
		</table>
        <input type="submit" type="submit" value="SAVE" class="btn-login"/>		
		</form>
		
	</div>
</body>
</html>