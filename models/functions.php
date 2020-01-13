<?php 
    //function connection
	function _connect(){
        $host = '127.0.0.1';
        $db   = 'ieedb';
        $user = 'root';
        $pass = '';
        $charset = 'utf8mb4';
        $options = [
            \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        try {
            $pdo = new \PDO($dsn, $user, $pass, $options);
            return $pdo;
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
	}
    //get User by connect informations
	function getInfoConnect($login,$pwd)
	{
        $pdo = _connect();
        $abfrage = "SELECT * FROM user WHERE  login_user = ? AND pwd_user = ? ";
        $statement = $pdo->prepare($abfrage);
        $statement->execute([$login,$pwd]);
		$user = new UserClass();
		while($back=$statement->fetch())
				{
					$user->setId($back['id_user']);
					$user->setNameUser($back['name_user']);
					$user->setSurnameUser($back['surname']);
					$user->setLoginUser($back['login_user']);
					$user->setPwdUser($back['pwd_user']);
					$user->setAccesNiveauUser($back['acces_niveau']);
					
				}
		return $user;
	}
    //function control login
    function connect_form($login,$pwd){
		$user = getInfoConnect($login,$pwd);
		if($user->getId() != null){
			//load Session Variable  User
			$_SESSION['user'] = $user->getNameUser();
			header("Refresh:0; url='view/home.html' ");
		}
		else{
			echo "<script type='text/javascript'>alert('Echec Connection veuillez reessayer');</script>";
		}
	}
	//load Test Art into <option></option>
	function loadTestArtOption(){
		$pdo = _connect();
		$abfrageTestart = "SELECT * FROM test_art";
		$statementTestart = $pdo->query($abfrageTestart);
		echo "
				<option value='#' id='title_option'><ul class='list-group' >
					<li class='list-group-item '>TestArt</li>
				</ul></option>
				";
				while($back = $statementTestart->fetch())
				{
					$id_testArt = $back['test_id'];
					$impedanz = $back['impedanz'];
					$laden = $back['laden'];
					$kapazitaet = $back['kapazitat_test'];
					echo "<option value=$id_testArt>$id_testArt-.-$impedanz -.- $laden -.- $kapazitaet  </option>";
				}
	}
	//load prüfstand into <option></option>
	function loadPruefstandOption(){
		$pdo = _connect();
		$abfragePruefstand = "SELECT * FROM prufstand";
		$statementPruefstand = $pdo->query($abfragePruefstand);
		echo "
				<option value='#' id='title_option'><ul class='list-group' >
					<li class='list-group-item '>Prüfstand</li>
				</ul></option>
				";
				while($back = $statementPruefstand->fetch())
				{
					$id_pruefstand = $back['id_prufstand'];
					$name_pruefstand = $back['name_prufstand'];
					echo "<option value=$id_pruefstand>$id_pruefstand-.-$name_pruefstand</option>";
				}
	}
	//function load all Unit (Batterie, Module; Zelle) into <option></option>
	function loadUnit($choice){
		$pdo = _connect();
		$abfrageBatterie = "SELECT * FROM batterie";
		$abfrageModule = "SELECT * FROM module";
		$abfrageZelle = "SELECT * FROM zelle";
		$statementBatterie = $pdo->query($abfrageBatterie);
		$statementModule = $pdo->query($abfrageModule);
		$statementZelle = $pdo->query($abfrageZelle);
		
		if($choice == "all")
		{
			// load Unit Batterie into Option
				echo "
				<option value='#' id='title_option'><ul class='list-group' >
					<li class='list-group-item '>Batterie</li>
				</ul></option>
				";
				while($back = $statementBatterie->fetch())
				{
					$id_batterie = $back['bat_id'];
					$name_batterie = $back['name'];
					$abkurzung = $back['abkurzung_chemie'];
					echo "<option value=$id_batterie><div id='char_id'>B :: $name_batterie  $abkurzung</div></option>";
				}

				//load Unit Module into Option
				echo "
				<option value='#' id='title_option'><ul class='list-group' >
					<li class='list-group-item '>Module</li>
				</ul></option>
				";
				while($back = $statementModule->fetch())
				{
					$id_module = $back['mod_id'];
					$name_module = $back['name'];
					$abkurzung = $back['abkurzung_chemie'];
					echo "<option value=$id_module><div id='char_id'>M :: $name_module  $abkurzung</div></option>";
				}

				//load Unit Zelle into Option
				echo "
						<option value='#' id='title_option'><ul class='list-group' >
							<li class='list-group-item '>Zelle</li>
						</ul></option>
					";
				while($back = $statementZelle->fetch())
				{
					$zelle_num = $back['zelle_num'];
					$name_zelle = $back['name'];
					$abkurzung = $back['abkurzung_chemie'];
					echo "<option value=$zelle_num><div id='char_id'>Z :: $name_zelle  $abkurzung</div></option>";
				}
			}
		else{
			if($choice == "Batterie"){

				// load Unit Batterie into Option
				echo "
				<option value='#' id='title_option'><ul class='list-group' >
					<li class='list-group-item '>Batterie</li>
				</ul></option>
				";
				while($back = $statementBatterie->fetch())
				{
					$id_batterie = $back['bat_id'];
					$name_batterie = $back['name'];
					$abkurzung = $back['abkurzung_chemie'];
					echo "<option value=$id_batterie><div id='char_id'>B :: $name_batterie  $abkurzung</div></option>";
				}

			}
			else{
				if($choice == "Module"){

						//load Unit Module into Option
					echo "
					<option value='#' id='title_option'><ul class='list-group' >
						<li class='list-group-item '>Module</li>
					</ul></option>
					";
					while($back = $statementModule->fetch())
					{
						$id_module = $back['mod_id'];
						$name_module = $back['name'];
						$abkurzung = $back['abkurzung_chemie'];
						echo "<option value=$id_module><div id='char_id'>M :: $name_module  $abkurzung</div></option>";
					}
	
				}
				else{
					if($choice == "Zelle"){

						//load Unit Zelle into Option
						echo "
						<option value='#' id='title_option'><ul class='list-group' >
							<li class='list-group-item '>Zelle</li>
						</ul></option>
							";
						while($back = $statementZelle->fetch())
						{
							$zelle_num = $back['zelle_num'];
							$name_zelle = $back['name'];
							$abkurzung = $back['abkurzung_chemie'];
							echo "<option value=$zelle_num><div id='char_id'>Z :: $name_zelle  $abkurzung</div></option>";
						}

					}
				}
			}
		}
	}
//get liste Unit 
function getListUnit($choice){
	$count = 0;
	$listUnit = array();
	$pdo = _connect();
	//create Query of Unit
	$abfrageUnit = ($choice == "Batterie")?"SELECT * FROM batterie":($choice == "Module")?"SELECT * FROM module":"SELECT * FROM zelle";
	$statementUnit = $pdo->query($abfrageUnit);
	while($back = $statementUnit->fetch()){
		if($choice == "Batterie")
		{
			$unit = new BatterieClass();
			$unit->setIdBatterie($back['bat_id']);
			$unit->setNameBatterie($back['name']);
			$unit->setAbkurzungBatterie($back['abkurzung_chemie']);
		}
		else{
			if($choice == "Module")
			{
				$unit = new ModuleClass();
				$unit->setIdModul($back['mod_id']);
				$unit->setNameModul($back['name']);
				$unit->setAbkurzungModul($back['abkurzung_chemie']);
			}
			else{
				$unit = new ZelleClass();
				$unit->setIdZelle($back['zelle_num']);
				$unit->setNameZelle($back['name']);
				$unit->setAbkurzungZelle($back['abkurzung_chemie']);
			}
		}
		//load on the list
		$listUnit[$count] = $unit;
		$count++;
	}

	return $listUnit;
}
//get List Test by id Unit
function getListTestById($id_unit){
	$count = 0;
	$listTest = array();
	$pdo = _connect();
	//create Query of Unit
	$abfrageUnit = "SELECT * FROM testing WHERE code_unit = ?";
	$statementUnit = $pdo->prepare($abfrageUnit);
	$statementUnit->execute([$id_unit]);
	while($back = $statementUnit->fetch()){
		$testing = new TestingClass();
		$testing->setCodeTesting($back['code_testing']);
		$testing->setDateTesting($back['date_testing']);
		$testing->setCodeUnitTesting($back['code_unit']);
		$testing->setIdPruefstandTesting($back['id_pruefstand']);
		$testing->setIdTestArtTesting($back['id_test_art']);
		$testing->setIdUserTesting($back['id_user']);
		//load on the list
		$listTest[$count] = $testing;
		$count++;
	}

	return $listTest;
}
	//get type unit by Id code_unit
	function getIdTypeUnitByCodeUnit($code_unit){
		$id_type_unit = "";
		$pdo = _connect();
		$abfrageUnit = "SELECT * FROM unit WHERE id_type_unit = ?";
		$statementUnit = $pdo->prepare($abfrageUnit);
		$statementUnit->execute([$code_unit]);
		while($back = $statementUnit->fetch()){
			$id_type_unit = $back['id_type_unit'];
		}
			return $id_type_unit;
	}
	//get code unit by id type
	function getCodeUnitByIdTypeUnit($id_unit){
		$code_unit = "";
		$pdo = _connect();
		$abfrageUnit = "SELECT * FROM unit WHERE id_type_unit = ?";
		$statementUnit = $pdo->prepare($abfrageUnit);
		$statementUnit->execute([$id_unit]);
		while($back = $statementUnit->fetch()){
			$code_unit = $back['code_unit'];
		}
			return $code_unit;
	}
	//get unit By Id and Type
	function getUnitByTypeId($type_unit,$id_unit){
		$pdo = _connect();
		$unit = null;
		//create Query of Unit
		$abfrageUnit = ($type_unit == "Batterie")?"SELECT * FROM batterie WHERE bat_id = ? ":($type_unit == "Module")?"SELECT * FROM module WHERE mod_id = ? ":"SELECT * FROM zelle WHERE zelle_num = ?";
		$statementUnit = $pdo->prepare($abfrageUnit);
		$statementUnit->execute([$id_unit]);
		while($back = $statementUnit->fetch()){
			if($type_unit == "Batterie")
			{
				$unit = new BatterieClass();
				$unit->setIdBatterie($back['bat_id']);
				$unit->setNameBatterie($back['name']);
				$unit->setAbkurzungBatterie($back['abkurzung_chemie']);
			}
			else{
				if($type_unit == "Module")
				{
					$unit = new ModuleClass();
					$unit->setIdModul($back['mod_id']);
					$unit->setNameModul($back['name']);
					$unit->setAbkurzungModul($back['abkurzung_chemie']);
				}
				else{
					$unit = new ZelleClass();
					$unit->setIdZelle($back['zelle_num']);
					$unit->setNameZelle($back['name']);
					$unit->setAbkurzungZelle($back['abkurzung_chemie']);
				}
			}
		}

		return $unit;
	}
	//get Prüfstand by Id
	function getPruefstandById($id_pruefstand){
		$pruefstand = new PruefstandClass();
		$pdo = _connect();
		$abfragePruefstand = "SELECT * FROM prufstand WHERE id_prufstand = ?";
		$statementPruefstand = $pdo->prepare($abfragePruefstand);
		$statementPruefstand->execute([$id_pruefstand]);
		while($back = $statementPruefstand->fetch()){
				$pruefstand->setId($back['id_prufstand']);
				$pruefstand->setNamePruefstand($back['name_prufstand']);
				$pruefstand->setKommentarPruefstand($back['kommentar']);
			}
		return $pruefstand;
	}
	//get Testart By Id
	function  getTestArtById($id_testArt){
		$testart = new TestArtClass();
		$pdo = _connect();
		$abfrageTestart = "SELECT * FROM test_art WHERE test_id = ?";
		$statementTestart = $pdo->prepare($abfrageTestart);
		$statementTestart->execute([$id_testArt]);
		while($back = $statementTestart->fetch()){
				$testart->setIdTestArt($back['test_id']);
				$testart->setImpedanz_testArt($back['impedanz']);
				$testart->setLadenTestArt($back['laden']);
				$testart->setKapazitaetTestArt($back['kapazitat_test']);
			}
		return $testart;
	}
?>