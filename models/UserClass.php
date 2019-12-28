<?php

class UserClass
{
    private $id;
    private $nameUser;
    private $surnameUser;
    private $login_user;
    private $pwd_user;
    private $accesNiveau_user;
	
	public function __construct()
	{
		
	}

    public function getId(): ?string
    {
        return $this->id;
    }
    
    public function setId(string $id):self
    {
          $this->id = $id;

         return $this;  
    }
    
    public function getNameUser(): ?string
    {
        return $this->nameUser;
    }

    public function setNameUser(string $nameUser): self
    {
        $this->nameUser = $nameUser;

        return $this;
    }

    public function getSurnameUser(): ?string
    {
        return $this->surnameUser;
    }

    public function setSurnameUser(string $surnameUser): self
    {
        $this->surnameUser = $surnameUser;

        return $this;
    }

    public function getLoginUser(): ?string
    {
        return $this->login_user;
    }

    public function setLoginUser(string $loginUser): self
    {
        $this->login_user = $loginUser;

        return $this;
    }

    public function getPwdUser(): ?string
    {
        return $this->pwd_user;
    }

    public function setPwdUser(string $pwdUser): self
    {
        $this->pwd_user = $pwdUser;

        return $this;
    }

    public function getAccesNiveauUser(): ?int
    {
        return $this->accesNiveau_user;
    }

    public function setAccesNiveauUser(int $accesNiveauUser): self
    {
        $this->accesNiveau_user = $accesNiveauUser;

        return $this;
    }

    
}
