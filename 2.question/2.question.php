<?php
/* 2 - Questão:
================================================================================
Faça um formulário com 3 campos: Nome, Cidade e Estado. -> OK
================================================================================
O campo Estado deve ser um select gerado a partir de um array 
associativo pré-definido com as siglas e nomes dos estados como 
índices e valores, respectivamente.  -> OK
================================================================================
Os campos Nome e Cidade devem  ser caixas de texto normais, 
porém eles são obrigatórios, ou seja,  se forem submetidos 
em branco, deve ser exibida uma mensagem de erro.  -> OK
================================================================================
Além disso, o Nome precisa ter pelo menos 2 palavras.  -> OK
================================================================================
Nesses casos de erro, além de mostrar a mensagem, o formulário deve 
ser exibido novamente, com os valores enviados anteriormente já 
preenchidos ou selecionados em seus campos. -> OK
================================================================================
*/
?>

<?php 
  $options = array(
    "AC"=>"ACRE",
    "AL"=>"ALAGOAS",
    "AP"=>"AMAPÁ",
    "AM"=>"AMAZONAS",
    "BA"=>"BAHIA",
    "CE"=>"CEARÁ",
    "DF"=>"DISTRITO FEDERAL",
    "ES"=>"ESPÍRITO SANTO",
    "GO"=>"GOIÁS",
    "MA"=>"MARANHÃO",
    "MT"=>"MATO GROSSO",
    "MS"=>"MATO GROSSO DO SUL",
    "MG"=>"MINAS GERAIS",
    "PA"=>"PARÁ",
    "PB"=>"PARAÍBA",
    "PR"=>"PARANÁ",
    "PE"=>"PERNAMBUCO",
    "PI"=>"PIAUÍ",
    "RN"=>"RIO GRANDE DO NORTE",
    "RS"=>"RIO GRANDE DO SUL",
    "RJ"=>"RIO DE JANEIRO",
    "RO"=>"RONDÔNIA",
    "RR"=>"RORAIMA",
    "SC"=>"SANTA CATARINA",
    "SP"=>"SÃO PAULO",
    "SE"=>"SERGIPE",
    "TO"=>"TOCANTINS"
  );

  $errorName = $erroCidade = "";
  $estado = "";
  $name = "";
  $city = "";
  $state = "";
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
    $name = $_POST["name"];
    $city = $_POST["city"];
    $estado = $_POST["state"];

    if (empty($_POST["name"])) {
      $errorName = "O nome é um campo obrigatório";
    } else if (strpos($_POST["name"], ' ') == false) {
      $errorName = "O nome deve conter, pelo menos, primeiro e segundo nome";
    }

    if (empty($_POST["city"])) {
      $erroCidade = "A cidade é um campo obrigatório";
    }
  }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>2.question.php -> Professor Felipe Alencar</title>
  <style>
    label {
      display: block;
      margin-bottom: 1rem;
    }
    .error {
      color: #ff0000;
    }
  </style>
</head>
<body>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
    <label for="name">
      Nome:
      <input type="text" name="name" id="name" value="<?php echo $name; ?>"/>
      <span class="error">* <?php echo $errorName; ?></span>
    </label>

    <label for="city">
      Cidade:
      <input type="text" name="city" id="city" value="<?php echo $city; ?>">
      <span class="error">* <?php echo $erroCidade; ?></span>
    </label>

    <label for="state">
      Estado:
      <select name="state" id="state">
        <option value="<?php $estado ?>" selected>
          <?php 
            if ($estado != "") {
              echo $estado; 
            } else {
              echo $state;
            }
          ?>
        </option>

        <?php foreach($options as $uf => $state) {?>
          <option value="<?php echo $state; ?>">
            <?php echo $state; ?>
          </option>
        <?php }; ?>
      </select>
    </label>

    <input type="submit" />
  </form>
</body>
</html>