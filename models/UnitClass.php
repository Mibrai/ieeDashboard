<?php

class UnitClass
{
    private $code_unit;
    private $dateCreate_unit;
    private $type_unit; //Batterie , Modul ,Zelle
    private $idType_unit;//id_batterie, id_modul, id_zelle
    private $userId_unit;

	public function __construct()
	{
		
	}

    public function getCodeUnit(): ?string
    {
        return $this->code_unit;
    }
    
    public function setCodeUnit(string $code):self
    {
          $this->code_unit = $code;

         return $this;  
    }
    
    public function getDateCreateUnit(): ?string
    {
        return $this->dateCreate_unit;
    }

    public function setDateCreateUnit(string $dateCreateUnit): self
    {
        $this->dateCreate_unit = $dateCreateUnit;

        return $this;
    }

    public function getTypeUnit(): ?string
    {
        return $this->type_unit;
    }

    public function setTypeUnit(string $typeUnit): self
    {
        $this->type_unit = $typeUnit;

        return $this;
    }

    public function getIdTypeUnit(): ?string
    {
        return $this->idType_unit;
    }

    public function setIdTypeUnit(string $idTypeUnit): self
    {
        $this->idType_unit = $idTypeUnit;

        return $this;
    }

    public function getUserIdUnit(): ?string 
    {
        return $this->userId_unit;
    }

    public function setIdUserUnit(string $idUser): self
    {
        $this->userId_unit = $idUser;

        return $this;
    }

     //CRUD Functions
    //Save new Unit
    public function _push(): self
    {
        $time = strtotime($this->getDateCreateUnit);
        $dateUnit = date('Y-m-d',$time);
        $pdo = _connect();
        $abfrage = "INSERT INTO  unit VALUES (?,?,?,?)";
        $statement = $pdo->prepare($abfrage);
        if($statement->execute([
            $this->getCodeUnit(),
            $dateUnit,
            $this->getTypeUnit(),
            $this->getIdTypeUnit(),
            $this->getUserIdUnit()
            ]) ) {
                echo "<div class='alert alert-success' role='alert'> Neue Unit gut gespeichert ! </div>";
            }
        else{
            echo "<div class='alert alert-danger' role='alert'> Speicherung unmöglich \n Versuchen Sie bitte erneue ! </div>";
        }
        return $this;
    }

    //Update Unit into Database
    public function _update() : self
    {
        $time = strtotime($this->getDateCreateUnit);
        $dateUnit = date('Y-m-d',$time);
        $pdo = _connect();
        $abfrage = "UPDATE  unit  SET date_create = ? , type_unit = ? , id_type_unit = ? , user_id = ? WHERE code_unit = ? ";
        $statement = $pdo->prepare($abfrage);
        if($statement->execute([
            $dateUnit,
            $this->getTypeUnit(),
            $this->getIdTypeUnit(),
            $this->getUserIdUnit(),
            $this->getCodeUnit()
            ]) ) {
                echo "<div class='alert alert-success' role='alert'>  Update Success ! </div>";
            }
        else{
            echo "<div class='alert alert-danger' role='alert'> Update unmöglich \n Versuchen Sie bitte erneue ! </div>";
        }
        return $this;
    }

    //Delete Unit into Database
    public function _delete()
    {
        $pdo = _connect();
        $abfrage = "DELETE FROM  unit  WHERE code_unit = ? ";
        $statement = $pdo->prepare($abfrage);
        if($statement->execute([ $this->getCodeUnit() ]) ) {
                echo "<div class='alert alert-success' role='alert'>  Unit wurde gelöscht ! </div>";
            }
        else{
            echo "<div class='alert alert-danger' role='alert'> Löschen unmöglich \n Versuchen Sie bitte erneue ! </div>";
        }
    }

}
