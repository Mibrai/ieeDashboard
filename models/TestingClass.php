<?php

class TestingClass
{
    private $code_testing;
    private $date_testing;
    private $codeUnit_testing;
    private $idPruefstand_testing;
    private $idTestArt_testing;
    private $userId_testing;

	public function __construct()
	{
		
	}

    public function getCodeTesting(): ?string
    {
        return $this->code_testing;
    }
    
    public function setCodeTesting(string $code):self
    {
          $this->code_testing = $code;

         return $this;  
    }
    
    public function getDateTesting(): ?string
    {
        return $this->date_testing;
    }

    public function setDateTesting(string $dateTesting): self
    {
        $this->date_testing = $dateTesting;

        return $this;
    }

    public function getCodeUnitTesting(): ?string
    {
        return $this->codeUnit_testing;
    }

    public function setCodeUnitTesting(string $codeUnitTesting): self
    {
        $this->codeUnit_testing = $codeUnitTesting;

        return $this;
    }

    public function getIdPruefstandTesting(): ?string
    {
        return $this->idPruefstand_testing;
    }

    public function setIdPruefstandTesting(string $idPruefstandTesting): self
    {
        $this->idPruefstand_testing = $idPruefstandTesting;

        return $this;
    }

    public function getIdTestArtTesting(): ?string 
    {
        return $this->idTestArt_testing;
    }

    public function setIdTestArtTesting(string $idTestArtTesting): self
    {
        $this->idTestArt_testing = $idTestArtTesting;
        
        return $this;
    }

    public function getUserIdTesting(): ?string 
    {
        return $this->userId_testing;
    }

    public function setIdUserTesting(string $idUser): self
    {
        $this->userId_testing = $idUser;
        
        return $this;
    }

     //CRUD Functions
    //Save new Testing
    public function _push(): self
    {
        $time = strtotime($this->getDateTesting());
        $dateTesting = date('Y-m-d',$time);
        $pdo = _connect();
        $abfrage = "INSERT INTO  testing VALUES (?,?,?,?,?,?)";
        $statement = $pdo->prepare($abfrage);
        if($statement->execute([
            $this->getCodeTesting(),
            $dateTesting,
            $this->getCodeUnitTesting(),
            $this->getIdPruefstandTesting(),
            $this->getIdTestArtTesting(),
            $this->getUserIdTesting()
            ]) ) {
                echo "<div class='alert alert-success' role='alert'> Neue Testing gut gespeichert ! </div>";
            }
        else{
            echo "<div class='alert alert-danger' role='alert'> Speicherung unmöglich \n Versuchen Sie bitte erneue ! </div>";
        }
        return $this;
    }

    //Update Testing into Database
    public function _update() : self
    {
        $time = strtotime($this->getDateCreateUnit);
        $dateTesting = date('Y-m-d',$time);
        $pdo = _connect();
        $abfrage = "UPDATE  testing  SET date_testing = ? , code_unit = ? , id_pruefstand = ? , id_test_art = ? , id_user = ? WHERE code_testing = ? ";
        $statement = $pdo->prepare($abfrage);
        if($statement->execute([
            $dateTesting,
            $this->getCodeUnitTesting(),
            $this->getIdPruefstandTesting(),
            $this->getIdTestArtTesting(),
            $this->getUserIdTesting(),
            $this->getCodeTesting()
            ]) ) {
                echo "<div class='alert alert-success' role='alert'>  Update Success ! </div>";
            }
        else{
            echo "<div class='alert alert-danger' role='alert'> Update unmöglich \n Versuchen Sie bitte erneue ! </div>";
        }
        return $this;
    }

    //Delete Testing into Database
    public function _delete()
    {
        $pdo = _connect();
        $abfrage = "DELETE FROM  testing  WHERE code_testing = ? ";
        $statement = $pdo->prepare($abfrage);
        if($statement->execute([ $this->getCodeTesting() ]) ) {
                echo "<div class='alert alert-success' role='alert'>  Testing wurde gelöscht ! </div>";
            }
        else{
            echo "<div class='alert alert-danger' role='alert'> Löschen unmöglich \n Versuchen Sie bitte erneue ! </div>";
        }
    }
    
}
