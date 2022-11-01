<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    
</body>
</html>

<?php 

    require 'config.php';
   

    $info = [];

    $id = filter_input(INPUT_GET, 'id');

    if ($id) {
        $sql = $pdo->prepare("SELECT * FROM tbl_aluno Where id = :id");
        $sql-> bindValue(':id', $id);
        $sql-> execute();
    
        if ($sql-> rowCount() > 0) {
            $info = $sql->fetch(PDO::FETCH_ASSOC);
        } else {
            header("Location: home.php");
            exit;
        }

    } else {
        header ("Location: home.php");
        exit;
    }

?>

<div class="container">

    <h1>Editar Ùsuario</h1>

    <form action="action_editar.php" method="post">
        <input type="hidden" name="id" value="<?=$info['id'];?>">
    <div class="mb-3">
        <label for="" class="form-label">
            Nome: </br>
            <input type="text" name="name" value="<?=$info['nome'];?>" class="form-control">
        </label>
    </div>
    <div>
        <label for="" class="form-label">
            E-mail: </br>
            <input type="email" name="email" value="<?=$info['email'];?>" class="form-control">
        </label>
</div>
        <div>
        <label for="" class="form-label">
            idade: </br>
            <input type="number" name="idade" value="<?=$info['idade'];?>" class="form-control">
        </label>
    </div>
        <div>
        <label for="" class="form-label">
            E-mail: </br>
            <input type="text" name="contato" value="<?=$info['contato'];?>" class="form-control">
        </label>
</div>
<div>
        <label for="" class="form-label">
            E-mail: </br>
            <input type="text" name="endereco" value="<?=$info['endereco'];?>" class="form-control">
        </label>

</div>


    </div>

    <input type="submit" value="Salvar" class="btn btn-primary">
    </form>

</div>