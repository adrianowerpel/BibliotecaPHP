<?php

class Reserva
{
    private $idReserva;
    private $dt_reserva;
    private $idLivro;
    private $idUser;

    public function __construct()
    {
    }

    public function getIdReserva()
    {
        return $this->idReserva;
    }

    public function setIdReserva($idReserva)
    {
        $this->idReserva = $idReserva;
    }

    public function getDtReserva()
    {
        return $this->dt_reserva;
    }

    public function setDtReserva($dt_reserva)
    {
        $this->dt_reserva = $dt_reserva;
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