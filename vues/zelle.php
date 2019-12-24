<html>
<head>
	<title>IEE/Zelle</title>
	<link rel="stylesheet" a href="..\css\style.css">
</head>
<body>
	<div class="container">
		<form>
		<table style="width:100%">
			<tr>
				<td><input type="text" name="id_zel" placeholder="ID_Zelle"/></td>
				<td>
					<select style="margin-top:30px; height:45px; width:300px; font-size:18px; margin-bottom:20px;background-color:#fff; padding-left:40px;">
					  <option value="" disabled selected hidden>ID_Module</option>
					  <option value=""></option>
					</select>
				</td>
				<td><input type="text" name="name_zel" placeholder="Name der Zelle"/></td>
			</tr>
			<tr>
				<td><input type="text" name="chem_zel" placeholder="Chemie"/></td>
				<td><input type="text" name="abk_chem" placeholder="Abkurzung der Chemie"/></td>
				<td><input type="text" name="abm_zel" placeholder="Abmaße"/></td>	
			</tr>
			<tr>
				<td><input type="text" name="anz_sp" placeholder="Anzahl der Spalte"/></td>
				<td><input type="text" name="anz_zel" placeholder="Anzahl der Zelle Reihe"/></td>
				<td><input type="text" name="nkap_zel" placeholder="NennKapazität"/></td>
			</tr>
			<tr>
				<td><input type="text" name="nspg_zel" placeholder="Nennspannung"/></td>
				<td><input type="text" name="kap_bol" placeholder="Kapazität(BOL)"/></td>
				<td><input type="text" name="kap_eol" placeholder="Kapazität(EOL)"/></td>
			</tr>
			<tr>
				<td><input type="text" name="sott_zel" placeholder="Sott"/></td>
				<td><textarea rows="5" cols="40" name="komm" placeholder="Kommentar"></textarea></td>
				<td></td>
			</tr>
		</table>
        <input type="submit" type="submit" value="SAVE" class="btn-login"/>		
		</form>
		
	</div>
</body>
</html>