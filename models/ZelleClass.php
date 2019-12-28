<?php

class ZelleClass
{
    private $id_zelle;
    private $name_zelle;
    private $chemie_zelle;
    private $abkurzung_zelle;
    private $anzahlSpalte_zelle;
    private $anzahlZelleReihe_zelle;
    private $abmass_zelle;
    private $nennKapazitaet_zelle;
    private $nennSpannung_zelle;
    private $bolKapazitaet_zelle;
    private $eolKapazitaet_zelle;
    private $sott_zelle;
    private $kommentar_zelle;
    private $id_modul;
	
	public function __construct()
	{
		
	}

    public function getIdZelle(): ?string
    {
        return $this->id_zelle;
    }
    
    public function setIdZelle(string $id):self
    {
          $this->id_zelle = $id;

         return $this;  
    }
    
    public function getNameZelle(): ?string
    {
        return $this->name_zelle;
    }

    public function setNameZelle(string $namezelle): self
    {
        $this->name_zelle = $namezelle;

        return $this;
    }

    public function getChemieZelle(): ?string
    {
        return $this->chemie_zelle;
    }

    public function setChemieZelle(string $chemiezelle): self
    {
        $this->chemie_zelle = $chemiezelle;

        return $this;
    }

    public function getAbkurzungZelle(): ?string
    {
        return $this->abkurzung_zelle;
    }

    public function setAbkurzungZelle(string $abkurzungzelle): self
    {
        $this->abkurzung_zelle = $abkurzungzelle;

        return $this;
    }

    public function getAnzahlSpalteZelle(): ?int
    {
        return $this->anzahlSpalte_zelle;
    }

    public function setAnzahlSpalteZelle(int $anzahlSpaltezelle): self
    {
        $this->anzahlSpalte_zelle = $anzahlSpaltezelle;

        return $this;
    }

    public function getAnzahlZelleReiheZelle(): ?int
    {
        return $this->anzahlZelleReihe_zelle;
    }

    public function setAnzahlZelleReiheZelle(int $anzahlZelleReihezelle): self
    {
        $this->anzahlZelleReihe_zelle = $anzahlZelleReihezelle;

        return $this;
    }

    public function getAbmassZelle(): ?string
    {
        return $this->abmass_zelle;
    }

    public function setAbmassZelle(string $abmasszelle): self
    {
        $this->abmass_zelle = $abmasszelle;

        return $this;
    }

    public function getNennKapazitaetZelle(): ?string
    {
        return $this->nennKapazitaet_zelle;
    }

    public function setNennKapazitaetZelle(?string $nennKapazitaetzelle): self
    {
        $this->nennKapazitaet_zelle = $nennKapazitaetzelle;

        return $this;
    }

    public function getNennSpannungZelle(): ?string
    {
        return $this->nennSpannung_zelle;
    }

    public function setNennSpannungZelle(string $nennSpannungzelle): self
    {
        $this->nennSpannung_zelle = $nennSpannungzelle;

        return $this;
    }

    public function getBolKapazitaetZelle(): ?string
    {
        return $this->bolKapazitaet_zelle;
    }

    public function setBolKapazitaetZelle(string $bolKapazitaetzelle): self
    {
        $this->bolKapazitaet_zelle = $bolKapazitaetzelle;

        return $this;
    }

    public function getEolKapazitaetZelle(): ?string
    {
        return $this->eolKapazitaet_zelle;
    }

    public function setEolKapazitaetZelle(string $eolKapazitaetzelle): self
    {
        $this->eolKapazitaet_zelle = $eolKapazitaetzelle;

        return $this;
    }

    public function getSottZelle(): ?string
    {
        return $this->sott_zelle;
    }

    public function setSottZelle(string $sottzelle): self
    {
        $this->sott_zelle = $sottzelle;

        return $this;
    }

    public function getKommentarZelle(): ?string
    {
        return $this->kommentar_zelle;
    }

    public function setKommentarZelle(string $kommentarzelle): self
    {
        $this->kommentar_zelle = $kommentarzelle;

        return $this;
    }

    public function getIdModul(): ?string 
    {
        return $this->id_modul;
    }

    public function setIdModul(string $idModul): self
    {
        $this->id_modul = $idModul;
        
        return $this;
    }

     //CRUD Functions
    //Save new Zelle
    public function _push(): self
    {
        $pdo = _connect();
        $abfrage = "INSERT INTO  zelle VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $statement = $pdo->prepare($abfrage);
        if($statement->execute([
            $this->getIdZelle(),
            $this->getNameZelle(),
            $this->getChemieZelle(),
            $this->getAbkurzungZelle(),
            $this->getAnzahlSpalteZelle(),
            $this->getAnzahlZelleReiheZelle(),
            $this->getAbmassZelle(),
            $this->getNennKapazitaetZelle(),
            $this->getNennSpannungZelle(),
            $this->getBolKapazitaetZelle(),
            $this->getEolKapazitaetZelle(),
            $this->getSottZelle(),
            $this->getKommentarZelle(),
            $this->getIdModul()
            ]) ) {
                echo "<div class='alert alert-success' role='alert'> Neue Zelle gut gespeichert ! </div>";
            }
        else{
            echo "<div class='alert alert-danger' role='alert'> Speicherung unmöglich \n Versuchen Sie bitte erneue ! </div>";
        }
        return $this;
    }

    //Update Zelle into Database
    public function _update() : self
    {
        $pdo = _connect();
        $abfrage = "UPDATE  zelle SET name = ? , chemie = ? , abkurzung_chemie = ? ,anzahl_spalte = ? ,anzahl_zelle_reihe = ? , abmass = ? , nennkapazitat = ? , nennspannung = ? , bol_kapazitat = ? , eol_kapazitat = ? , sott = ? , kommentar = ? ,bat_id = ? WHERE zelle_num = ? ";
        $statement = $pdo->prepare($abfrage);
        if($statement->execute([
            $this->getNameZelle(),
            $this->getChemieZelle(),
            $this->getAbkurzungZelle(),
            $this->getAnzahlSpalteZelle(),
            $this->getAnzahlZelleReiheZelle(),
            $this->getAbmassZelle(),
            $this->getNennKapazitaetZelle(),
            $this->getNennSpannungZelle(),
            $this->getBolKapazitaetZelle(),
            $this->getEolKapazitaetZelle(),
            $this->getSottZelle(),
            $this->getKommentarZelle(),
            $this->getIdModul(),
            $this->getIdZelle()
            ]) ) {
                echo "<div class='alert alert-success' role='alert'>  Update Success ! </div>";
            }
        else{
            echo "<div class='alert alert-danger' role='alert'> Update unmöglich \n Versuchen Sie bitte erneue ! </div>";
        }
        return $this;
    }

    //Delete Zelle into Database
    public function _delete()
    {
        $pdo = _connect();
        $abfrage = "DELETE FROM  zelle  WHERE zelle_num = ? ";
        $statement = $pdo->prepare($abfrage);
        if($statement->execute([ $this->getIdZelle() ]) ) {
                echo "<div class='alert alert-success' role='alert'>  Zelle wurde gelöscht ! </div>";
            }
        else{
            echo "<div class='alert alert-danger' role='alert'> Löschen unmöglich \n Versuchen Sie bitte erneue ! </div>";
        }
    }


}
