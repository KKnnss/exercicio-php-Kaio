<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<?php
    require 'config.php';
        $lista = [];
        $sql = $pdo->query("SELECT * FROM tbl_aluno");

    if($sql->rowCount() > 0) {
        $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}

?>

<body>
    <div class="container">
    <div>
        <a  class="btn btn-primary" href="index.php">adicionar usuario</a>  
    </div>

    <div>
        <table class="table" >
            <tr>
                <th>id</th>
                <th>nome</th>   
                <th>email</th>
                <th>idade</th>
                <th>contato</th>
                <th>endereço</th>
                <th>ações</th>
            </tr>
            <?php foreach($lista as $usuario):?>
            <tr>
                <td><?php echo $usuario['id'];?></td>
                <td><?=$usuario['nome'];?></td>
                <td><?=$usuario['email'];?></td>
                <td><?=$usuario['idade'];?></td>
                <td><?=$usuario['contato'];?></td>
                <td><?=$usuario['endereco'];?></td>





                <td>
                    <a 
                    href="editar.php?id=<?=$usuario['id'];?>"
                    class="btn btn-success"
                    >
                    editar
                </a>

                <a 
                href="excluir.php?id=<?=$usuario['id'];?>"
                onclick="return confirm('tem certeza que desaja excluir?')"
                class="btn btn-danger"
                >
                excluir
                </a>
                </td>
            </tr>
            <?php endforeach; ?>
            

        </table>
    </div>
</div>
</body>

</html>