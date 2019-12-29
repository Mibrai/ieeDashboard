<?php

class BatterieClass
{
    private $id_batterie;
    private $name_batterie;
    private $chemie_batterie;
    private $abkurzung_batterie;
    private $anzahlSpalte_batterie;
    private $anzahlZelleReihe_batterie;
    private $abmass_batterie;
    private $nennKapazitaet_batterie;
    private $nennSpannung_batterie;
    private $bolKapazitaet_batterie;
    private $eolKapazitaet_batterie;
    private $sott_batterie;
    private $kommentar_batterie;
	
	public function __construct()
	{
		
	}

    public function getIdBatterie(): ?string
    {
        return $this->id_batterie;
    }
    
    public function setIdBatterie(string $id):self
    {
          $this->id_batterie = $id;

         return $this;  
    }
    
    public function getNameBatterie(): ?string
    {
        return $this->name_batterie;
    }

    public function setNameBatterie(string $nameBatterie): self
    {
        $this->name_batterie = $nameBatterie;

        return $this;
    }

    public function getChemieBatterie(): ?string
    {
        return $this->chemie_batterie;
    }

    public function setChemieBatterie(string $chemieBatterie): self
    {
        $this->chemie_batterie = $chemieBatterie;

        return $this;
    }

    public function getAbkurzungBatterie(): ?string
    {
        return $this->abkurzung_batterie;
    }

    public function setAbkurzungBatterie(string $abkurzungBatterie): self
    {
        $this->abkurzung_batterie = $abkurzungBatterie;

        return $this;
    }

    public function getAnzahlSpalteBatterie(): ?int
    {
        return $this->anzahlSpalte_batterie;
    }

    public function setAnzahlSpalteBatterie(int $anzahlSpalteBatterie): self
    {
        $this->anzahlSpalte_batterie = $anzahlSpalteBatterie;

        return $this;
    }

    public function getAnzahlZelleReiheBatterie(): ?int
    {
        return $this->anzahlZelleReihe_batterie;
    }

    public function setAnzahlZelleReiheBatterie(int $anzahlZelleReiheBatterie): self
    {
        $this->anzahlZelleReihe_batterie = $anzahlZelleReiheBatterie;

        return $this;
    }

    public function getAbmassBatterie(): ?string
    {
        return $this->abmass_batterie;
    }

    public function setAbmassBatterie(string $abmassBatterie): self
    {
        $this->abmass_batterie = $abmassBatterie;

        return $this;
    }

    public function getNennKapazitaetBatterie(): ?string
    {
        return $this->nennKapazitaet_batterie;
    }

    public function setNennKapazitaetBatterie(?string $nennKapazitaetBatterie): self
    {
        $this->nennKapazitaet_batterie = $nennKapazitaetBatterie;

        return $this;
    }

    public function getNennSpannungBatterie(): ?string
    {
        return $this->nennSpannung_batterie;
    }

    public function setNennSpannungBatterie(string $nennSpannungBatterie): self
    {
        $this->nennSpannung_batterie = $nennSpannungBatterie;

        return $this;
    }

    public function getBolKapazitaetBatterie(): ?string
    {
        return $this->bolKapazitaet_batterie;
    }

    public function setBolKapazitaetBatterie(string $bolKapazitaetBatterie): self
    {
        $this->bolKapazitaet_batterie = $bolKapazitaetBatterie;

        return $this;
    }

    public function getEolKapazitaetBatterie(): ?string
    {
        return $this->eolKapazitaet_batterie;
    }

    public function setEolKapazitaetBatterie(string $eolKapazitaetBatterie): self
    {
        $this->eolKapazitaet_batterie = $eolKapazitaetBatterie;

        return $this;
    }

    public function getSottBatterie(): ?string
    {
        return $this->sott_batterie;
    }

    public function setSottBatterie(string $sottBatterie): self
    {
        $this->sott_batterie = $sottBatterie;

        return $this;
    }

    public function getKommentarBatterie(): ?string
    {
        return $this->kommentar_batterie;
    }

    public function setKommentarBatterie(string $kommentarBatterie): self
    {
        $this->kommentar_batterie = $kommentarBatterie;

        return $this;
    }

    //CRUD Functions
    //Save new Batterie
    public function _push(): self
    {
        $pdo = _connect();
        $abfrage = "INSERT INTO  batterie VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $statement = $pdo->prepare($abfrage);
        if($statement->execute([
            $this->getIdBatterie(),
            $this->getNameBatterie(),
            $this->getChemieBatterie(),
            $this->getAbkurzungBatterie(),
            $this->getAnzahlSpalteBatterie(),
            $this->getAnzahlZelleReiheBatterie(),
            $this->getAbmassBatterie(),
            $this->getNennKapazitaetBatterie(),
            $this->getNennSpannungBatterie(),
            $this->getBolKapazitaetBatterie(),
            $this->getEolKapazitaetBatterie(),
            $this->getSottBatterie(),
            $this->getKommentarBatterie()
            ]) ) {
                echo "<div class='alert alert-success' role='alert'> Neue Batterie gut gespeichert ! </div>";
            }
        else{
            echo "<div class='alert alert-danger' role='alert'> Speicherung unmöglich \n Versuchen Sie bitte erneue ! </div>";
        }
        return $this;
    }

    //Update Batterie into Database
    public function _update() : self
    {
        $pdo = _connect();
        $abfrage = "UPDATE  batterie SET name = ? , chemie = ? , abkurzung_chemie = ? ,anzahl_spalte = ? ,anzahl_zelle_reihe = ? , abmass = ? , nennkapazitat = ? , nennspannung = ? , bol_kapazitat = ? , eol_kapazitat = ? , sott = ? , kommentar = ? WHERE bat_id = ? ";
        $statement = $pdo->prepare($abfrage);
        if($statement->execute([
            $this->getNameBatterie(),
            $this->getChemieBatterie(),
            $this->getAbkurzungBatterie(),
            $this->getAnzahlSpalteBatterie(),
            $this->getAnzahlZelleReiheBatterie(),
            $this->getAbmassBatterie(),
            $this->getNennKapazitaetBatterie(),
            $this->getNennSpannungBatterie(),
            $this->getBolKapazitaetBatterie(),
            $this->getEolKapazitaetBatterie(),
            $this->getSottBatterie(),
            $this->getKommentarBatterie(),
            $this->getIdBatterie()
            ]) ) {
                echo "<div class='alert alert-success' role='alert'>  Update Success ! </div>";
            }
        else{
            echo "<div class='alert alert-danger' role='alert'> Update unmöglich \n Versuchen Sie bitte erneue ! </div>";
        }
        return $this;
    }

    //Delete Batterie into Database
    public function _delete()
    {
        $pdo = _connect();
        $abfrage = "DELETE FROM  batterie  WHERE bat_id = ? ";
        $statement = $pdo->prepare($abfrage);
        if($statement->execute([ $this->getIdBatterie() ]) ) {
                echo "<div class='alert alert-success' role='alert'>  Batterie wurde gelöscht ! </div>";
            }
        else{
            echo "<div class='alert alert-danger' role='alert'> Löschen unmöglich \n Versuchen Sie bitte erneue ! </div>";
        }
    }

}
