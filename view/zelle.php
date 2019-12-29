<h1> <span class="badge badge-primary">Neue Zelle</span></h1>
	<div class="container">
		<form>
		<div class="form-row">
				<table style="width:100%">
					<tr>
					<div class="form-group col-md-4">
						<td><input type="text" name="id_zelle" class ="form-control" placeholder="ID Zelle"/></td>
					</div>
					<div class="form-group col-md-4">
						<td><input type="text" name="name_zelle" class ="form-control" placeholder="Name der Zelle"/></td>
					<div>
					<div class="form-group col-md-4">
						<td><input type="text" name="chem_zelle" class ="form-control" placeholder="Chemie"/></td>
					</div>
					</tr>
				</table>
		</div>
		<div class="form-row">
			<table style="width:100%">
					<tr>
					<div class="form-group col-md-4">
						<td><input type="text" name="abk_chem" class ="form-control" placeholder="Abkurzung der Chemie"/></td>
					</div>
					<div class="form-group col-md-4">
						<td><input type="text" name="anz_sp" class ="form-control" placeholder="Anzahl der Spalte"/></td>
					</div>
					<div class="form-group col-md-4">
						<td><input type="text" name="anz_zel" class ="form-control" placeholder="Anzahl der Zelle Reihe "/></td>
					</div>
					</tr>
			</table>
		</div>
		<div class="form-row">
			<table style="width:100%">
					<tr>
					<div class="form-group col-md-4">
						<td><input type="text" name="abm_zelle" class ="form-control" placeholder="Abmaße"/></td>
					</div>
					<div class="form-group col-md-4">
						<td><input type="text" name="nkap_zelle" class ="form-control" placeholder="NennKapazität"/></td>
					</div>
					<div class="form-group col-md-4">
						<td><input type="text" name="nspg_zelle" class ="form-control" placeholder="Nennspannung"/></td>
					</div>
					</tr>
			</table>
		</div>
		<div class="form-row">
			<table style="width:100%">
					<tr>
					<div class="form-group col-md-4">
						<td><input type="text" name="kap_bol" class ="form-control" placeholder="Kapazität(BOL)"/></td>
					</div>
					<div class="form-group col-md-4">
						<td><input type="text" name="kap_eol" class ="form-control" placeholder="Kapazität(EOL)"/></td>
					</div>
					<div class="form-group col-md-4">
						<td><input type="text" name="sott_bat" class ="form-control" placeholder="Sott"/></td>
					</div>
					</tr>
			</table>
		</div>
		<div class="form-row">
			<table style="width:100%">
				<tr>
					<div class="form-group col-md-6">
						<td><textarea rows="5" cols="40" name="komm" class ="form-control" placeholder="Kommentar"></textarea></td>
					</div>
				</tr>
				<tr>
					<div class="form-group col-md-6">
						<td> <select class="form-control" id="select_modul">
							<option>--Select Modul--</option>
							<option>2</option>
							</select></td>
					</div>
				</tr>
			</table>
		</div>
		<div class="form-row">
			<div class="form-group col-md-4" id="btn_save">
					<input type="submit" class ="btn btn-primary btn-lg btn-block" value="Speichern" />
			</div>
		</div>
		</form>
		
	</div>