<?php 

    require 'config.php';

    $name = filter_input(INPUT_POST, 'name');
    $email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL); 
    $idade = filter_input(INPUT_POST, 'idade');  
    $contato = filter_input(INPUT_POST, 'contato');  
    $endereco = filter_input(INPUT_POST, 'endereco');

    if ($id && $name && $email && $idade && $contato && $endereco) {
        
        $sql = $pdo->prepare("UPDATE tbl_aluno SET name =:name, email = :email, idade = :idade, contato = :contato, endereco = :endereco WHERE id = :id");
        $sql->bindValue(":name", $name);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":idade", $idade);
        $sql->bindValue(":contato", $contato);
        $sql->bindValue(":endereco", $endereco);
        $sql->execute ();

        header("Location:home.php");
        exit;

    } else {
        header('Location: editar.php');
        exit;
    } 
