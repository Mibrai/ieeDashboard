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
?>