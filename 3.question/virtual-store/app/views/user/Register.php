<?php 
    $options = array("PIX", "DINHEIRO", "CARTÃO");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compras</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    <form action="../../interceptor.php?class=User&method=post" method="post">
        <label for="cpf">
            Cpf do usuário:
            <input type="text" name="cpf" id="cpf" class="form-control cpf-mask" placeholder="Ex.: 000.000.000-00"/>
        </label>

        <label for="username">
            Nome do usuário:
            <input type="text" name="username" id="username">
        </label>

        <label for="user_password">
           Senha:
            <input type="text" name="user_password" id="user_password">
        </label>

        <input type="submit" value="Cadastrar"/>
    </form>
</body>
</html>