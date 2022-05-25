<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Produtos</title>
  <style>
    label {
      display: block;
      margin-bottom: 1rem;
    }
  </style>
</head>
<body>
  <form action="../../interceptor.php?class=Product&method=post" method="post">
    <label for="alias">
      Nome:
      <input type="text" name="alias" id="alias">
    </label>

    <label for="about_it">
      Descrição:
      <input type="text" name="about_it" id="about_it">
    </label>

    <label for="price">
      Preço:
      <input type="text" name="price" id="price">
    </label>

    <label for="image_path">
      Caminho da imagem:
      <input type="text" name="image_path" id="image_path">
    </label>

    <label for="category">
      ID da categoria:
      <input type="number" name="category" id="category">
    </label>

    <label for="ncm">
      NCM:
      <input type="text" name="ncm" id="ncm">
    </label>

    <label for="quantity">
      Quantidade:
      <input type="number" name="quantity" id="quantity">
    </label>

    <input type="submit" />
  </form>
</body>
</html>