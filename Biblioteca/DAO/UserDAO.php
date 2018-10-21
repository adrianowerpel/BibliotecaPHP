<?php

require_once "../db/connection.php";
require_once "../models/User.php";

class UserDAO
{
    public function salvar($user){

        global $pdo;

        try {
            if ($user->getIdUser() != "") {
                $statement = $pdo->prepare("UPDATE user SET nome = :nome ,dt_nascimento = :dt_nascimento ,cpf = :cpf ,tipo = :tipo ,
                logradouro = :logradouro, numero = :numero ,bairro = :bairro ,cidade = :cidade ,estado = :estado ,complemento = :complemento WHERE iduser = :iduser;");
                $statement->bindValue(":idUser", $user->getIdUser());
            } else {
                $statement = $pdo->prepare("INSERT INTO user (nome,dt_nascimento,cpf,tipo,logradouro,numero,bairro,cidade,estado,complemento)
                                                      VALUES (:nome, :dt_nascimento, :cpf,:tipo,:logradouro,:numero,:bairro,:cidade,:estado,:complemento);");
            }

            $statement->bindValue(":nome",$user->getNome() );
            $statement->bindValue(":dt_nascimento",$user->getDtNascimento());
            $statement->bindValue(":cpf",$user->getCpf());
            $statement->bindValue(":tipo",$user->getTipo());
            $statement->bindValue(":logradouro",$user->getLogradouro());
            $statement->bindValue(":numero",$user->getNumero());
            $statement->bindValue(":bairro",$user->getBairro());
            $statement->bindValue(":cidade",$user->getCidade());
            $statement->bindValue(":estado",$user->getEstado());
            $statement->bindValue(":complemento",$user->getComplemento());

            $user = null;

            if ($statement->execute()) {
                if ($statement->rowCount() > 0) {
                    return "<script> alert('Dados cadastrados com sucesso !'); </script>";
                } else {
                    return "<script> alert('Erro ao tentar efetivar cadastro !'); </script>";
                }
            } else {
                throw new PDOException("<script> alert('Não foi possível executar a declaração SQL !'); </script>");
            }
        } catch (PDOException $erro) {
            return "Erro: " . $erro->getMessage();
        }
    }

    public function remover($id){
        global $pdo;
        try {
            $statement = $pdo->prepare("DELETE FROM user WHERE iduser = :iduser");
            $statement->bindValue(":iduser", $id);
            if ($statement->execute()) {
                return "<script> alert('Registo foi excluído com êxito !'); </script>";
            } else {
                throw new PDOException("<script> alert('Não foi possível executar a declaração SQL !'); </script>");
            }
        } catch (PDOException $erro) {
            return "Erro: ".$erro->getMessage();
        }
    }
}