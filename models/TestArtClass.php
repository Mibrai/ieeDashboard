<?php

class TestArtClass
{
    private $id_testArt;
    private $impedanz_testArt;
    private $laden_testArt;
    private $kapazitaet_testArt;

	public function __construct()
	{
		
	}

    public function getIdTestArt(): ?string
    {
        return $this->id_testArt;
    }
    
    public function setIdTestArt(string $id):self
    {
          $this->id_testArt = $id;

         return $this;  
    }
    
    public function getImpedanz_TestArt(): ?string
    {
        return $this->impedanz_testArt;
    }

    public function setImpedanz_testArt(string $impedanzTestArt): self
    {
        $this->impedanz_testArt = $impedanzTestArt;

        return $this;
    }

    public function getLadenTestArt(): ?string
    {
        return $this->laden_testArt;
    }

    public function setLadenTestArt(string $ladenTestArt): self
    {
        $this->laden_testArt = $ladenTestArt;

        return $this;
    }

    public function getKapazitaetTestArt(): ?string
    {
        return $this->kapazitaet_testArt;
    }

    public function setKapazitaetTestArt(string $kapazitaetTestArt): self
    {
        $this->kapazitaet_testArt = $kapazitaetTestArt;

        return $this;
    }

    //CRUD Functions
    //Save new TestArt
    public function _push(): self
    {
        $pdo = _connect();
        $abfrage = "INSERT INTO  test_art VALUES (?,?,?,?)";
        $statement = $pdo->prepare($abfrage);
        if($statement->execute([
            $this->getIdTestArt(),
            $this->getImpedanz_TestArt(),
            $this->getLadenTestArt(),
            $this->getKapazitaetTestArt()
            ]) ) {
                echo "<div class='alert alert-success' role='alert'> Neue Test Art gut gespeichert ! </div>";
            }
        else{
            echo "<div class='alert alert-danger' role='alert'> Speicherung unmöglich \n Versuchen Sie bitte erneue ! </div>";
        }
        return $this;
    }

    //Update Test Art into Database
    public function _update() : self
    {
        $pdo = _connect();
        $abfrage = "UPDATE  test_art  SET impedanz = ? , laden = ? , kapazitat_test = ? WHERE test_id = ? ";
        $statement = $pdo->prepare($abfrage);
        if($statement->execute([
            $this->getImpedanz_TestArt(),
            $this->getLadenTestArt(),
            $this->getKapazitaetTestArt(),
            $this->getIdTestArt()
            ]) ) {
                echo "<div class='alert alert-success' role='alert'>  Update Success ! </div>";
            }
        else{
            echo "<div class='alert alert-danger' role='alert'> Update unmöglich \n Versuchen Sie bitte erneue ! </div>";
        }
        return $this;
    }

    //Delete Test Art into Database
    public function _delete()
    {
        $pdo = _connect();
        $abfrage = "DELETE FROM  test_art  WHERE test_id = ? ";
        $statement = $pdo->prepare($abfrage);
        if($statement->execute([ $this->getIdTestArt() ]) ) {
                echo "<div class='alert alert-success' role='alert'>  Test Art wurde gelöscht ! </div>";
            }
        else{
            echo "<div class='alert alert-danger' role='alert'> Löschen unmöglich \n Versuchen Sie bitte erneue ! </div>";
        }
    }
    
}
