<?php

class ModuleClass
{
    private $id_modul;
    private $name_modul;
    private $chemie_modul;
    private $abkurzung_modul;
    private $anzahlSpalte_modul;
    private $anzahlZelleReihe_modul;
    private $abmass_modul;
    private $nennKapazitaet_modul;
    private $nennSpannung_modul;
    private $bolKapazitaet_modul;
    private $eolKapazitaet_modul;
    private $sott_modul;
    private $kommentar_modul;
    private $id_batterie;
	
	public function __construct()
	{
		
	}

    public function getIdModul(): ?string
    {
        return $this->id_modul;
    }
    
    public function setIdModul(string $id):self
    {
          $this->id_modul = $id;

         return $this;  
    }
    
    public function getNameModul(): ?string
    {
        return $this->name_modul;
    }

    public function setNameModul(string $namemodul): self
    {
        $this->name_modul = $namemodul;

        return $this;
    }

    public function getChemieModul(): ?string
    {
        return $this->chemie_modul;
    }

    public function setChemieModul(string $chemiemodul): self
    {
        $this->chemie_modul = $chemiemodul;

        return $this;
    }

    public function getAbkurzungModul(): ?string
    {
        return $this->abkurzung_modul;
    }

    public function setAbkurzungModul(string $abkurzungmodul): self
    {
        $this->abkurzung_modul = $abkurzungmodul;

        return $this;
    }

    public function getAnzahlSpalteModul(): ?int
    {
        return $this->anzahlSpalte_modul;
    }

    public function setAnzahlSpalteModul(int $anzahlSpaltemodul): self
    {
        $this->anzahlSpalte_modul = $anzahlSpaltemodul;

        return $this;
    }

    public function getAnzahlZelleReiheModul(): ?int
    {
        return $this->anzahlZelleReihe_modul;
    }

    public function setAnzahlZelleReiheModul(int $anzahlZelleReihemodul): self
    {
        $this->anzahlZelleReihe_modul = $anzahlZelleReihemodul;

        return $this;
    }

    public function getAbmassModul(): ?string
    {
        return $this->abmass_modul;
    }

    public function setAbmassModul(string $abmassmodul): self
    {
        $this->abmass_modul = $abmassmodul;

        return $this;
    }

    public function getNennKapazitaetModul(): ?string
    {
        return $this->nennKapazitaet_modul;
    }

    public function setNennKapazitaetModul(?string $nennKapazitaetmodul): self
    {
        $this->nennKapazitaet_modul = $nennKapazitaetmodul;

        return $this;
    }

    public function getNennSpannungModul(): ?string
    {
        return $this->nennSpannung_modul;
    }

    public function setNennSpannungModul(string $nennSpannungmodul): self
    {
        $this->nennSpannung_modul = $nennSpannungmodul;

        return $this;
    }

    public function getBolKapazitaetModul(): ?string
    {
        return $this->bolKapazitaet_modul;
    }

    public function setBolKapazitaetModul(string $bolKapazitaetmodul): self
    {
        $this->bolKapazitaet_modul = $bolKapazitaetmodul;

        return $this;
    }

    public function getEolKapazitaetModul(): ?string
    {
        return $this->eolKapazitaet_modul;
    }

    public function setEolKapazitaetModul(string $eolKapazitaetmodul): self
    {
        $this->eolKapazitaet_modul = $eolKapazitaetmodul;

        return $this;
    }

    public function getSottModul(): ?string
    {
        return $this->sott_modul;
    }

    public function setSottModul(string $sottmodul): self
    {
        $this->sott_modul = $sottmodul;

        return $this;
    }

    public function getKommentarModul(): ?string
    {
        return $this->kommentar_modul;
    }

    public function setKommentarModul(string $kommentarmodul): self
    {
        $this->kommentar_modul = $kommentarmodul;

        return $this;
    }

    public function getIdBatterie(): ?string 
    {
        return $this->id_batterie;
    }

    public function setIdBatterie(string $idBatterie): self
    {
        $this->id_batterie = $idBatterie;

        return $this;
    }

    //CRUD Functions
    //Save new Modul
    public function _push(): self
    {
        $pdo = _connect();
        $abfrage = "INSERT INTO  module VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $statement = $pdo->prepare($abfrage);
        if($statement->execute([
            $this->getIdModul(),
            $this->getNameModul(),
            $this->getChemieModul(),
            $this->getAbkurzungModul(),
            $this->getAnzahlSpalteModul(),
            $this->getAnzahlZelleReiheModul(),
            $this->getAbmassModul(),
            $this->getNennKapazitaetModul(),
            $this->getNennSpannungModul(),
            $this->getBolKapazitaetModul(),
            $this->getEolKapazitaetModul(),
            $this->getSottModul(),
            $this->getKommentarModul(),
            $this->getIdBatterie()
            ]) ) {
                echo "<div class='alert alert-success' role='alert'> Neue Modul gut gespeichert ! </div>";
            }
        else{
            echo "<div class='alert alert-danger' role='alert'> Speicherung unmöglich \n Versuchen Sie bitte erneue ! </div>";
        }
        return $this;
    }

    //Update Modul into Database
    public function _update() : self
    {
        $pdo = _connect();
        $abfrage = "UPDATE  module SET name = ? , chemie = ? , abkurzung_chemie = ? ,anzahl_spalte = ? ,anzahl_zelle_reihe = ? , abmass = ? , nennkapazitat = ? , nennspannung = ? , bol_kapazitat = ? , eol_kapazitat = ? , sott = ? , kommentar = ? ,bat_id = ? WHERE mod_id = ? ";
        $statement = $pdo->prepare($abfrage);
        if($statement->execute([
            $this->getNameModul(),
            $this->getChemieModul(),
            $this->getAbkurzungModul(),
            $this->getAnzahlSpalteModul(),
            $this->getAnzahlZelleReiheModul(),
            $this->getAbmassModul(),
            $this->getNennKapazitaetModul(),
            $this->getNennSpannungModul(),
            $this->getBolKapazitaetModul(),
            $this->getEolKapazitaetModul(),
            $this->getSottModul(),
            $this->getKommentarModul(),
            $this->getIdBatterie(),
            $this->getIdModul()
            ]) ) {
                echo "<div class='alert alert-success' role='alert'>  Update Success ! </div>";
            }
        else{
            echo "<div class='alert alert-danger' role='alert'> Update unmöglich \n Versuchen Sie bitte erneue ! </div>";
        }
        return $this;
    }

    //Delete Modul into Database
    public function _delete()
    {
        $pdo = _connect();
        $abfrage = "DELETE FROM  module  WHERE mod_id = ? ";
        $statement = $pdo->prepare($abfrage);
        if($statement->execute([ $this->getIdModul() ]) ) {
                echo "<div class='alert alert-success' role='alert'>  Modul wurde gelöscht ! </div>";
            }
        else{
            echo "<div class='alert alert-danger' role='alert'> Löschen unmöglich \n Versuchen Sie bitte erneue ! </div>";
        }
    }

}
