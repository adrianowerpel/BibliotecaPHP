<?php

class Exemplar
{
    private $idExemplar;
    private $quantidade;
    private $idLivro;

    public function __construct()
    {
    }

    public function getIdExemplar()
    {
        return $this->idExemplar;
    }

    public function setIdExemplar($idExemplar)
    {
        $this->idExemplar = $idExemplar;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }

    public function getIdLivro()
    {
        return $this->idLivro;
    }

    public function setIdLivro($idLivro)
    {
        $this->idLivro = $idLivro;
    }
}