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
    <form action="../../interceptor.php?class=Purchase&method=post" method="post">
        <label for="user_id">
            ID do usuário:
            <input type="number" name="user_id" id="user_id"/>
        </label>

        <label for="product_id">
            ID do produto:
            <input type="number" name="product_id" id="product_id">
        </label>

        <label for="about_it">
            Descrição:
            <input type="text" name="about_it" id="about_it">
        </label>

        <label for="payment_way">
            Forma de Pagamento:
            <input type="text" name="payment_way" id="payment_way"/>
        </label>

        <input type="submit" value="Comprar"/>
    </form>
</body>
</html>