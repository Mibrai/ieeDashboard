<?php

class PruefstandClass
{
    private $id_pruefstand;
    private $name_pruefstand;
    private $kommentar_pruefstand;
	
	public function __construct()
	{
		
	}

    public function getId(): ?string
    {
        return $this->id_pruefstand;
    }
    
    public function setId(string $id):self
    {
          $this->id_pruefstand = $id;

         return $this;  
    }
    
    public function getNamePruefstand(): ?string
    {
        return $this->name_pruefstand;
    }

    public function setNameUser(string $namePruefstand): self
    {
        $this->name_pruefstand = $namePruefstand;

        return $this;
    }

    public function getKommentarPruefstand(): ?string
    {
        return $this->kommentar_pruefstand;
    }

    public function setKommentarPruefstand(string $kommentarPruefstand): self
    {
        $this->kommentar_pruefstand = $kommentarPruefstand;

        return $this;
    }

     //CRUD Functions
    //Save new Pruefstand
    public function _push(): self
    {
        $pdo = _connect();
        $abfrage = "INSERT INTO  prufstand VALUES (?,?,?)";
        $statement = $pdo->prepare($abfrage);
        if($statement->execute([
            $this->getId(),
            $this->getNamePruefstand(),
            $this->getKommentarPruefstand()
            ]) ) {
                echo "<div class='alert alert-success' role='alert'> Neue Prüfstand gut gespeichert ! </div>";
            }
        else{
            echo "<div class='alert alert-danger' role='alert'> Speicherung unmöglich \n Versuchen Sie bitte erneue ! </div>";
        }
        return $this;
    }

    //Update Prüfstand into Database
    public function _update() : self
    {
        $pdo = _connect();
        $abfrage = "UPDATE  prufstand SET name_prufstand = ? , kommentar = ?  WHERE id_prufstand = ? ";
        $statement = $pdo->prepare($abfrage);
        if($statement->execute([
            $this->getNamePruefstand(),
            $this->getKommentarPruefstand(),
            $this->getId()
            ]) ) {
                echo "<div class='alert alert-success' role='alert'>  Update Success ! </div>";
            }
        else{
            echo "<div class='alert alert-danger' role='alert'> Update unmöglich \n Versuchen Sie bitte erneue ! </div>";
        }
        return $this;
    }

    //Delete Prüfstand into Database
    public function _delete()
    {
        $pdo = _connect();
        $abfrage = "DELETE FROM  prufstand  WHERE id_prufstand = ? ";
        $statement = $pdo->prepare($abfrage);
        if($statement->execute([ $this->getId() ]) ) {
                echo "<div class='alert alert-success' role='alert'>  Prüfstand wurde gelöscht ! </div>";
            }
        else{
            echo "<div class='alert alert-danger' role='alert'> Löschen unmöglich \n Versuchen Sie bitte erneue ! </div>";
        }
    }

   
}
