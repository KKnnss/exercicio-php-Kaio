
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
<div class="form-group">

        <h1>Adicionar usuario</h1>
        <form action="action_login.php" method="post">

            <label for="">Nome:</label>
            <input  type="text" name="name">

            <label for="">E-mail:</label>
            <input type="email" name="email">

            <label for="">Senha:</label>
            <input type="password" name="password">

            <label for="">Confirmar Senha:</label>
            <input type="password" name="password_confirm">
            
            <input type="submit" value="Adicionar" class="botao">
        </form>

    </div>    
</body>
</html>