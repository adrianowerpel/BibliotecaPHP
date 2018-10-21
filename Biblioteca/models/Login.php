<?php

class Login
{
    private $idLogin;
    private $login;
    private $senha;
    private $idUser;

    public function __construct()
    {
    }


    public function getIdLogin()
    {
        return $this->idLogin;
    }

    public function setIdLogin($idLogin)
    {
        $this->idLogin = $idLogin;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function getIdUser()
    {
        return $this->idUser;
    }

    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    }
}