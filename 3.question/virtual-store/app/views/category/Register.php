<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Categorias</title>
</head>
<style>
  label {
    display: block;
  }
</style>
<body>
  <form action="../../interceptor.php?class=Category&method=post" method="post">
    <label for="alias">
      Nome da Categoria:
      <input type="text" name="alias" id="alias"/>
    </label>

    <input type="submit" />
  </form>
</body>
</html>