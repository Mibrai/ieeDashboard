<?php

class AlgorithmClass
{
    private $code_algo;
    private $name_algo;
    private $link_algo;
    private $code_unit_fk;

	public function __construct()
	{
		
	}

    public function getCodeAlgo(): ?string
    {
        return $this->code_algo;
    }
    
    public function setCodeAlgo(string $code):self
    {
          $this->code_algo = $code;

         return $this;  
    }
    
    public function getNameAlgo(): ?string
    {
        return $this->name_algo;
    }

    public function setNameAlgo(string $nameAlgo): self
    {
        $this->name_algo = $nameAlgo;

        return $this;
    }

    public function getLinkAlgo(): ?string
    {
        return $this->link_algo;
    }

    public function setLinkAlgo(string $linkAlgo): self
    {
        $this->link_algo = $linkAlgo;

        return $this;
    }

    public function getCodeUnitFK(): ?string
    {
        return $this->code_unit_fk;
    }

    public function setCodeUnitFK(string $codeUnitFK): self
    {
        $this->code_unit_fk = $codeUnitFK;

        return $this;
    }

     //CRUD Functions
    //Save new Algorithm
    public function _push(): self
    {
        $pdo = _connect();
        $abfrage = "INSERT INTO  algorithmen VALUES (?,?,?,?)";
        $statement = $pdo->prepare($abfrage);
        if($statement->execute([
            $this->getCodeAlgo(),
            $this->getNameAlgo(),
            $this->getLinkAlgo(),
            $this->getCodeUnitFK()
            ]) ) {
                echo "<div class='alert alert-success' role='alert'> Neues Algorithmus gut gespeichert ! </div>";
            }
        else{
            echo "<div class='alert alert-danger' role='alert'> Speicherung unmöglich \n Versuchen Sie bitte erneue ! </div>";
        }
        return $this;
    }

    //Update Algorithmus into Database
    public function _update() : self
    {
        $pdo = _connect();
        $abfrage = "UPDATE  algorithmen  SET name_algo = ? , link = ? , code_unit_fk = ? WHERE code_algo = ? ";
        $statement = $pdo->prepare($abfrage);
        if($statement->execute([
            $this->getNameAlgo(),
            $this->getLinkAlgo(),
            $this->getCodeUnitFK(),
            $this->getCodeAlgo()
            ]) ) {
                echo "<div class='alert alert-success' role='alert'>  Update Success ! </div>";
            }
        else{
            echo "<div class='alert alert-danger' role='alert'> Update unmöglich \n Versuchen Sie bitte erneue ! </div>";
        }
        return $this;
    }

    //Delete Algorithmus into Database
    public function _delete()
    {
        $pdo = _connect();
        $abfrage = "DELETE FROM  algorithmen  WHERE code_algo = ? ";
        $statement = $pdo->prepare($abfrage);
        if($statement->execute([ $this->getCodeAlgo() ]) ) {
                echo "<div class='alert alert-success' role='alert'>  Algorithmus wurde gelöscht ! </div>";
            }
        else{
            echo "<div class='alert alert-danger' role='alert'> Löschen unmöglich \n Versuchen Sie bitte erneue ! </div>";
        }
    }
    
    
}
