<?php
session_start();
    require 'config.php';

    $name = filter_input(INPUT_POST, 'name');
    $email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL); 
    $idade = filter_input(INPUT_POST, 'idade');  
    $contato = filter_input(INPUT_POST, 'contato');  
    $endereco = filter_input(INPUT_POST, 'endereco');  

    //verificar se o id, o nome e o email etc... são válidos

    if($name && $email) {
        
        $sql = $pdo->prepare("INSERT INTO tbl_aluno(nome,email,idade,contato,endereco) VALUES (:nome,:email,:idade,:contato,:endereco)" ); 
        $sql->bindValue(':nome',$name); 
        $sql->bindValue(':email',$email); 
        $sql->bindValue(':idade',$idade); 
        $sql->bindValue(':contato',$contato); 
        $sql->bindValue(':endereco',$endereco); 
        $sql->execute();

        header("Location:home.php");
        exit;

    } else {
        //caso contrário, vai retorna para página adicionar.php e não registra.
        header('Location: index.php'); 
        exit;
    }