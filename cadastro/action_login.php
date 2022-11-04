<?php
session_start();
ob_start();
require 'config.php';

//recebe os dados do formulario

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, 'password');
$password_confirm = filter_input(INPUT_POST, 'password_confirm');



//verifica se o id, o nome e o email etc. são válidos

if($name && $email && $password && $password_confirm){
    $sql = $pdo->prepare("select * from usuario where email = :email");
    $sql->bindValue(':email', $email);
    $sql->execute();

    if($sql->rowCount() === 0 ){

        if($password === $password_confirm){
            
            $password_hash = password_hash($password, PASSWORD_DEFAULT);
            
            $sql = $pdo->prepare("INSERT INTO usuario (nome,email,senha) VALUES (:name, :email, :password)");
            $sql->bindValue(':name', $name);
            $sql->bindValue(':email', $email);
            $sql->bindValue(':password', $password_hash);
            $sql->execute();

            header("Location:index.php");
            exit;

        }else{
            header('Location:login.php');
            exit;
        }

    }else {
        ('Location:login.php');
        exit;
    }


} else {
    header('Location:login.php');
}