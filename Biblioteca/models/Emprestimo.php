<?php

class Emprestimo
{
    private $idEmprestimo;
    private $dt_emprestimo;
    private $dt_devolucao;
    private $idLivro;
    private $idUser;

    public function __construct()
    {
    }

    public function getIdEmprestimo()
    {
        return $this->idEmprestimo;
    }

    public function setIdEmprestimo($idEmprestimo)
    {
        $this->idEmprestimo = $idEmprestimo;
    }

    public function getDtEmprestimo()
    {
        return $this->dt_emprestimo;
    }

    public function setDtEmprestimo($dt_emprestimo)
    {
        $this->dt_emprestimo = $dt_emprestimo;
    }

    public function getDtDevolucao()
    {
        return $this->dt_devolucao;
    }

    public function setDtDevolucao($dt_devolucao)
    {
        $this->dt_devolucao = $dt_devolucao;
    }

    public function getIdLivro()
    {
        return $this->idLivro;
    }

    public function setIdLivro($idLivro)
    {
        $this->idLivro = $idLivro;
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