<?php
require "../models/User.php";
require "../DAO/UserDAO.php";

$user = new User();

if(!empty($_POST['nome']) && isset($_POST['nome']) && !empty($_POST['dt_nasc']) && isset($_POST['dt_nasc']) &&
   !empty($_POST['cpf']) && isset($_POST['cpf']) && !empty($_POST['tipo']) && isset($_POST['tipo']) &&
   !empty($_POST['logradouro']) && isset($_POST['logradouro']) && !empty($_POST['numero']) && isset($_POST['numero']) &&
   !empty($_POST['bairro']) && isset($_POST['bairro']) && !empty($_POST['cidade']) && isset($_POST['cidade']) &&
   !empty($_POST['estado']) && isset($_POST['estado']) && !empty($_POST['complemento']) && isset($_POST['complemento']) &&
   !empty($_REQUEST['act']) && isset($_REQUEST['act']) && $_REQUEST['act'] == "save")
{

    if(!empty($_POST['idUser']) && isset($_POST['idUser'])){
        $user->setIdUser($_POST['idUser']);
    }

    $user->setNome($_POST['nome']);
    $user->setDtNascimento($_POST['dt_nasc']);
    $user->setCpf($_POST['cpf']);
    $user->setTipo($_POST['tipo']);
    $user->setLogradouro($_POST['logradouro']);
    $user->setNumero($_POST['numero']);
    $user->setBairro($_POST['bairro']);
    $user->setCidade($_POST['cidade']);
    $user->setEstado($_POST['estado']);
    $user->setComplemento($_POST['complemento']);

    $userDAO = new UserDAO();
    $userDAO->salvar($user);
}
elseif (!empty($_REQUEST['act']) && isset($_REQUEST['act']) && $_REQUEST['act'] == "delete" &&
        !empty($_GET['idUser']) && isset($_GET['idUser']))
{
    $userDAO = new UserDAO();
    $userDAO->remover($_GET['idUser']);
}
