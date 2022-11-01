

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 <H1>Cadastro de Aluno</H1>
<form action="action_cadastro.php" method="post">
    
<input type="hidden" name="id" value="<?=$info['id'];?>" />

<label for="">Nome:</label>
<input type="text" name="name">

<label for="">E-mail:</label>
<input type="text" name="email">

<label for="">idade:</label>
<input type="text" name="idade">

<label for="">contato:</label>
<input type="text" name="contato">

<label for="">endereço:</label>
<input type="text" name="endereco">



<input type="submit" name="salvar" value="Adicionar" class="botao">



</form>
    
</body>
</html>