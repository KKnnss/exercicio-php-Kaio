<?php
require 'config.php';



$id = filter_input(INPUT_GET, 'id');
//filtra o id e deleta tudo na coluna
if($id){
    $sql = $pdo->prepare("DELETE FROM tbl_aluno WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

}
header("Location: home.php");
exit;
?>