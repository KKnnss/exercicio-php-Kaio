<?php 

    require 'config.php';

    //recebe os dados do formulario

    $id = filter_input(INPUT_POST, 'id');
    $name = filter_input(INPUT_POST, 'name');
    $email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL); 
    $idade = filter_input(INPUT_POST, 'idade');  
    $contato = filter_input(INPUT_POST, 'contato');  
    $endereco = filter_input(INPUT_POST, 'endereco');



    ////verifica se o id o nome e o email etc. são válidos
    if ($id && $name && $email && $idade && $contato && $endereco) {
        
       //atualiza os dados
       $sql = $pdo->prepare("UPDATE tbl_aluno SET nome =:nome, email = :email, idade = :idade, contato = :contato, endereco = :endereco WHERE id= :id");
       $sql->bindValue(':id', $id);
        $sql->bindValue(":nome", $name);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":idade", $idade); 
        $sql->bindValue(":contato", $contato);
        $sql->bindValue(":endereco", $endereco);
        $sql->execute ();

        header("Location:home.php");
        exit;
//se nao retorna para página editar.php e não registra.
    } else {
        header('Location: editar.php');
        exit;
    } 
